<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Like;
use App\Models\Project;
use App\Models\Team;
use App\Models\TeamUser;
use App\Models\User;
use Illuminate\Http\Request;

class DigiyouthController extends Controller
{
    public function index()
    {
        $project = Project::with('category')
            ->withCount('likes')
            ->orderBy('likes_count', 'desc')
            ->take(3)
            ->get();

        $popularContributors = TeamUser::select('user_id', \DB::raw('COUNT(*) as contributions'))
            ->groupBy('user_id')
            ->orderBy('contributions', 'desc')
            ->take(5)
            ->get()
            ->map(function ($teamUser) {
                $user = User::find($teamUser->user_id);
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'photo' => $user->profile_picture,
                    'contributions' => $teamUser->contributions,
                ];
            });

        return view('index', compact('project', 'popularContributors'));
    }


    public function detail(string $id)
    {
        $likeModel = Like::class;
        // $team = Team::where("project_id", $id)->get();
        // dd($team);
        $project = Project::find($id);
        $membersArray = [];
        foreach($project->team->users as $member){
            $membersArray[] = $member->name;
        }
        $members = implode(", ",$membersArray);
        return view('detail', ["project" => $project, "likeModel" => $likeModel, "members" => $members]);
    }

    public function category(string $id)
{
    $likeModel = Like::class;
    $category = Category::find($id);

    $projects = Project::where("category_id", $id)->paginate(8); 

    return view('category', [
        "projects" => $projects,
        "likeModel" => $likeModel,
        "category" => $category
    ]);
}


    public function login()
    {
        return view('login');
    }
}
