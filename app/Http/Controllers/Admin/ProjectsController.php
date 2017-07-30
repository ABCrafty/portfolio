<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

class ProjectsController extends Controller
{
    public function __construct()
    {
    }

    public function index() {
        return view('admin.projects.index');
    }

    public function create() {
        return view('admin.projects.create');
    }

    public function store(Request $request) {
        $default_path = 'uploads/projects'.$request->input(str_replace(' ', '-', 'title'));
        $logo = $this->upload(['file' => $request->file('logo'), 'path' => $default_path]);

        $input = [];

        $input['title'] = $request->input('title');
        $input['user_id'] = 1;
        $input['body'] = $request->input('body');
        $input['link'] = $request->input('link');
        $input['logo'] = serialize($logo);

        $project = Project::create($input);
        $project->save($input);

        session()->flash('message','Utilisateur mis à jour');
        return redirect()->route('users.index');
    }

    public function edit($id) {
        $projects = Project::find($id);
        return view('admin.projects.edit', compact('projects'));
    }

    public function update() {

    }

    public function destroy() {

    }

    public function ajaxListing() {
        $projects = Project::select(['id', 'title']);
        return Datatables::of($projects)
            ->addColumn('action', function ($project) {
                return '<a class="data-action" href="'.route('projects.edit', $project->id).'">
                            <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                            <a class="data-action" href="'.route('projects.destroy', $project->id).'">
                            <i class="fa fa-times fa-2x" aria-hidden="true"></i></a>';
            })
            ->make(true);
    }
}
