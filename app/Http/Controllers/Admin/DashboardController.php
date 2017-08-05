<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Posts;
use App\Project;
use App\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $articles = Posts::pluck('id');
        $projects = Project::pluck('id');
        $users = User::pluck('id');

        $usersToday = User::whereDay('created_at', date('d'))->pluck('id');
        $usersMonth = User::whereMonth('created_at', date('m'))->pluck('id');
        $usersYear = User::whereYear('created_at', date('Y'))->pluck('id');

        $projectsToday = Project::whereDay('created_at', date('d'))->pluck('id');
        $projectsMonth = Project::whereMonth('created_at', date('m'))->pluck('id');
        $projectsYear = Project::whereYear('created_at', date('Y'))->pluck('id');

        $articlesToday = Posts::whereDay('created_at', date('d'))->pluck('id');
        $articlesMonth = Posts::whereMonth('created_at', date('m'))->pluck('id');
        $articlesYear = Posts::whereYear('created_at', date('Y'))->pluck('id');

        return view('admin.dashboard',
            compact('articles', 'projects', 'users', 'usersMonth', 'usersYear', 'usersToday',
                'projectsToday', 'projectsMonth', 'projectsYear', 'articlesToday', 'articlesMonth', 'articlesYear'));
    }
}
