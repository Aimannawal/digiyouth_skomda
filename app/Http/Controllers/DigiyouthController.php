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

class DigiyouthController extends Controller
{
    public function index()
    {
        // dd(Auth::id());
        $project = Project::with('category')
            ->withCount('likes')
            ->orderBy('likes_count', 'desc')
            ->take(3)
            ->get();

        $teamUserContributions = TeamUser::select('user_id', \DB::raw('COUNT(*) as contributions'))
            ->groupBy('user_id')
            ->get()
            ->keyBy('user_id');

        $projectContributions = Project::select('user_id', \DB::raw('COUNT(*) as contributions'))
            ->groupBy('user_id')
            ->get()
            ->keyBy('user_id');

        $combinedContributions = collect();

        $allUserIds = $teamUserContributions->keys()->merge($projectContributions->keys())->unique();

        foreach ($allUserIds as $userId) {
            $teamUserCount = $teamUserContributions->get($userId)->contributions ?? 0;
            $projectCount = $projectContributions->get($userId)->contributions ?? 0;

            $combinedContributions->push([
                'user_id' => $userId,
                'contributions' => $teamUserCount + $projectCount,
            ]);
        }

        $popularContributors = $combinedContributions
            ->sortByDesc('contributions')
            ->take(5)
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

        $allCategories = Category::all();

        return view('index', compact('project', 'popularContributors', 'allCategories'));
    }


    
    public function category(string $id)
    {
        $likeModel = Like::class;
        $category = Category::find($id);
        $allCategories = Category::all();

        $projects = Project::where("category_id", $id)->paginate(8);

        return view('category', [
            "projects" => $projects,
            "likeModel" => $likeModel,
            "category" => $category,
            "allCategories" => $allCategories
        ]);
    }

    public function detail(string $id)
    {
        $likeModel = Like::class; // Model untuk mengelola "like"
        $project = Project::findOrFail($id); // Pastikan project ditemukan, jika tidak return 404
        $category = Category::all();

        // Data tim
        $membersArray = [];
        foreach ($project->team->users as $member) {
            $membersArray[] = $member->name;
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
        $comments = Comment::where("project_id", $id)->get();
        $commentsCount = Comment::where("project_id", $id)->count();

        // Cek apakah user sudah menyukai project ini
        $userLiked = auth()->check() && Like::where('project_id', $id)
            ->where('user_id', auth()->id())
            ->exists();

        return view('detail', [
            "project" => $project,
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
}
