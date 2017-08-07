<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
    }

    public function index() {
        $projects = Project::latest()->paginate(10);
        return view('projects.index', compact('projects'));
    }

    public function show($id) {
        $project = Project::find($id);
        return view('projects.show', compact('project', 'usedTech'));
    }
}
