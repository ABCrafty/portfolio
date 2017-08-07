<?php

namespace App\Http\Controllers;

use App\Homepage;
use App\Project;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homepage = Homepage::first();
        $projects = Project::latest()->limit(3)->get();
        $learnTech = explode(', ', Homepage::pluck('tech'));

        return view('homepage.index', compact('homepage', 'projects', 'learnTech'));
    }

    protected function clean($string) {
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    }
}
