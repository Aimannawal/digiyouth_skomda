<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Project;
use App\Models\Reply;
use App\Models\Team;
use App\Models\TeamUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DigiyouthController extends Controller
{
    public function index()
{
    // Ambil proyek dengan status == 1 untuk ditampilkan
    $project = Project::with('category')
        ->withCount('likes')
        ->where('status', 1)
        ->orderBy('likes_count', 'desc')
        ->take(3)
        ->get();

    // Ambil semua proyek untuk menghitung kontribusi (tanpa filter status)
    $allProjects = Project::select('user_id', \DB::raw('COUNT(*) as contributions'))
        ->groupBy('user_id')
        ->get()
        ->keyBy('user_id');

    // Hitung kontribusi dari tabel TeamUser
    $teamUserContributions = TeamUser::select('user_id', \DB::raw('COUNT(*) as contributions'))
        ->groupBy('user_id')
        ->get()
        ->keyBy('user_id');

    // Gabungkan kontribusi proyek dan tim
    $combinedContributions = collect();

    // Gabungkan semua user_id dari proyek dan tim
    $allUserIds = $allProjects->keys()->merge($teamUserContributions->keys())->unique();

    foreach ($allUserIds as $userId) {
        $projectCount = $allProjects->get($userId)->contributions ?? 0;
        $teamUserCount = $teamUserContributions->get($userId)->contributions ?? 0;

        $combinedContributions->push([
            'user_id' => $userId,
            'contributions' => $projectCount + $teamUserCount,
        ]);
    }

    // Sortir dan ambil 10 pengguna dengan kontribusi tertinggi
    $popularContributors = $combinedContributions
        ->sortByDesc('contributions')
        ->take(10)
        ->map(function ($contribution) {
            $user = User::find($contribution['user_id']);
            return [
                'id' => $user->id,
                'name' => $user->name,
                'grade' => $user->grade,
                'photo' => $user->profile_picture,
                'contributions' => $contribution['contributions'],
            ];
        });

    // Ambil semua kategori
    $allCategories = Category::all();

    return view('index', compact('project', 'popularContributors', 'allCategories'));
}


    
    public function category(string $id, string $sort)
    {
        $likeModel = Like::class;
        $category = Category::find($id);
        $allCategories = Category::all();

        if($sort == 1){
            $projects = Project::where("category_id", $id)->orderBy('created_at', 'desc')->paginate(8);
        }else if($sort == 2){
            $projects = Project::where("category_id", $id)->orderBy('created_at', 'asc')->paginate(8);
        }else if($sort == 3){
            $projects = Project::select('comments.id', 'comments.user_id', 'comments.text', 'comments.status', 'comments.created_at', DB::raw('COUNT(replies.id) as replies_count'))
            ->leftJoin('replies', 'comments.id', '=', 'replies.comment_id')
            ->where('comments.project_id', $id)
            ->groupBy('comments.id', 'comments.user_id', 'comments.text', 'comments.status', 'comments.created_at') // Explicitly group by these columns
            ->orderByDesc('replies_count') // Order by the number of replies
            ->paginate(8);
        }

        // $projects = Project::where("category_id", $id)->paginate(8);

        return view('category', [
            "sort" => $sort,
            "projects" => $projects,
            "likeModel" => $likeModel,
            "category" => $category,
            "allCategories" => $allCategories
        ]);
    }

    public function detail(string $id, string $sort)
    {
        $likeModel = Like::class; // Model untuk mengelola "like"
        $project = Project::findOrFail($id); // Pastikan project ditemukan, jika tidak return 404
        $category = Category::all();


        if($sort == 1){
            $comments = Comment::where("project_id", $id)->orderBy('created_at', 'desc')->paginate(5);
        }else if($sort == 2){
            $comments = Comment::select('comments.id', 'comments.user_id', 'comments.text', 'comments.status', 'comments.created_at', DB::raw('COUNT(replies.id) as replies_count'))
            ->leftJoin('replies', 'comments.id', '=', 'replies.comment_id')
            ->where('comments.project_id', $id)
            ->groupBy('comments.id', 'comments.user_id', 'comments.text', 'comments.status', 'comments.created_at') // Explicitly group by these columns
            ->orderByDesc('replies_count') // Order by the number of replies
            ->paginate(5);
        }
        // dd($comments);
        // Data tim
        $membersArray = [];
        foreach ($project->team->users as $member) {
            if($project->user->id == $member->id){
                continue;
            }else{
                $membersArray[] = $member->name;
            }
        }
        $members = implode(", ", $membersArray);

        // Data alat yang digunakan dalam project
        $toolsArray = [];
        foreach ($project->tool as $tool) {
            $toolsArray[] = $tool->image;
        }
        $tools = implode(", ", $toolsArray);
        $toolsArray = explode(", ", $tools);

        // Komentar terkait project
        // $comments = Comment::where("project_id", $id)->paginate(5);
        $commentsCount = Comment::where("project_id", $id)->where("status", 1)->count();

        // Cek apakah user sudah menyukai project ini
        $userLiked = auth()->check() && Like::where('project_id', $id)
            ->where('user_id', auth()->id())
            ->exists();

        return view('detail', [
            "project" => $project,
            "sort" => $sort,
            "likeModel" => $likeModel,
            "members" => $members,
            "category" => $category,
            "toolsArray" => $toolsArray,
            "comments" => $comments,
            "commentsCount" => $commentsCount,
            "userLiked" => $userLiked, // Ditambahkan untuk kebutuhan tombol like
        ]);
    }



    public function login()
    {
        return view('login');
    }

    public function comment(Request $request, string $id)
    {
        if (Auth::id() == null ) {
            return redirect()->route('login');
        } else {
            // dd($request->input('comment')); 
            if($request->input('comment') == null){
                return redirect()->back();
            }
            $project = Project::find($id);
        $newComment = Comment::create([
                'project_id' => $project->id,
                'user_id' => Auth::id(),
                'text' => $request->input('comment'),
            ]);


            return redirect()->back();
        }
    }

    public function like(Request $request, string $id)
    {
        if (Auth::id() == null) {
            return redirect()->route('login');
        } else {

            $project = Project::find($id);
            $like = Like::where('project_id', $project->id)->where('user_id', Auth::id())->first();
            if ($like == null) {

                $newLike = Like::create([
                    'project_id' => $project->id,
                    'user_id' => Auth::id(),
                ]);
            }else{
                Like::destroy($like->id);
            }


            return redirect()->back();
        }
    }

    public function reply(Request $request, string $id)
    {
        if (Auth::id() == null ) {
            return redirect()->route('login');
        } else {
            // dd($request->input('comment')); 
            if($request->input('reply') == null){
                return redirect()->back();
            }
            $comment = Comment::find($id);
        $newReply = Reply::create([
                'comment_id' => $comment->id,
                'user_id' => Auth::id(),
                'content' => $request->input('reply'),
            ]);


            return redirect()->back();
        }
    }
    public function profileDetail(string $id)
    {
        $likeModel = Like::class;
        $profile = User::find($id);
        $teams = TeamUser::where("user_id", $id)->get();
        
        $teamsProfile = [];
        foreach ($teams as $team) {
            $teamsProfile[] = $team->team->id;
        }
        
        // Ambil proyek yang hanya memiliki status 1
        $projects = Project::whereIn("team_id", $teamsProfile)
            ->where('status', 1) // Filter hanya proyek dengan status 1
            ->get();
        
        // Hitung jumlah proyek yang statusnya 1
        $projectsCount = $projects->count();
        
        return view("profile-user", [
            "likeModel" => $likeModel,
            "projects" => $projects,
            "projectsCount" => $projectsCount,
            "profile" => $profile,
        ]);
    }

    public function search(Request $request){
        $keyword = $request->input("keyword");
        // dd($keyword);
        // $projects = Project::query()->where("title", "LIKE", "%". $keyword ."%")
        // ->orWhereHas("category", function($query) use ($keyword){
        //     $query->where("name", "LIKE", "%". $keyword ."%");
        // })->get();
        // dd($request->input("keyword") );
        $allCategories = Category::all();
        $likeModel = Like::class;
        $projects = Project::query()->where("title", "LIKE", "%". $keyword ."%")
        ->orWhereHas("category", function($query) use ($keyword){
            $query->where("name", "LIKE", "%". $keyword ."%");
        })        
        ->orWhereHas("user", function($query) use ($keyword){
            $query->where("name", "LIKE", "%". $keyword ."%");
        })
        ->paginate(8);


        // dd($projects);
        return view("search", [
            "projects" => $projects,
            "allCategories" => $allCategories,
            "likeModel" => $likeModel,
        ]);
    }

    public function commentSort(string $id, Request $request)
    {
        $sort = $request->input("sort");
        return redirect()->route("detail", [$id, $sort]);
        // if($sort == 1){
        //     $comments = Comment::where("project_id", $id)->orderBy('created_at', 'desc')->paginate(5);
        // }else if($sort == 2){
        //     $comments = Comment::select('comments.id', 'comments.user_id', 'comments.text', 'comments.created_at', DB::raw('COUNT(replies.id) as replies_count'))
        //     ->leftJoin('replies', 'comments.id', '=', 'replies.comment_id')
        //     ->where('comments.project_id', $id)
        //     ->groupBy('comments.id', 'comments.user_id', 'comments.text', 'comments.created_at') // Explicitly group by these columns
        //     ->orderByDesc('replies_count') // Order by the number of replies
        //     ->paginate(5);
        // }
        // dd([$id,$comments]);
    }

    public function categorySort(string $id, Request $request)
    {
        $sort = $request->input("sort");
        return redirect()->route("category", [$id, $sort]);

        
    }
}
