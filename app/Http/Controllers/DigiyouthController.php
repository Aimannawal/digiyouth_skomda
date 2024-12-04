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
    

    public function detail()
        {
            return view('detail');
        }

    public function category()
        {
            return view('category');
        }

    public function login()
        {
            return view('login');
        }
}
