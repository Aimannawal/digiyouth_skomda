<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Like;
use App\Models\Project;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class DigiyouthController extends Controller
{
    public function index()
        {
            $project = Project::all();
            $category = Category::all();
            $team = Team::all();
            $like = Like::all();
            

            return view('index',compact('project','category','team','like'));
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
