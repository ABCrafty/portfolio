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
        $projects = Project::latest()->count();
        return view('admin.projects.index', compact('projects'));
    }

    public function create() {
        return view('admin.projects.create');
    }

    public function store(Request $request) {
        $default_path = 'uploads/projects/'.str_replace(' ', '-', $request->input('title')).'/';

        $logo = $this->upload(['file' => $request->file('logo'), 'path' => $default_path]);

        $images = [];

        foreach($request->file('images') as $image) {
            $images[] = $this->upload(['file' => $image, 'path' => $default_path]);
        }

        $input = [];

        $input['title'] = $request->input('title');
        $input['user_id'] = auth()->user()->id;
        $input['body'] = $request->input('body');
        $input['link'] = $request->input('link');
        $input['tech'] = $request->input('tech');
        $input['logo'] = $logo;
        $input['images'] = serialize($images);

//        dd($default_path);

        $project = Project::create($input);
        $project->save($input);

        session()->flash('message','Nouveau projet créé');
        return redirect()->route('projects.index');
    }

    public function edit($id) {
        $project = Project::find($id);
        return view('admin.projects.edit', compact('project'));
    }

    public function update($project, Request $request) {

        $project = Project::find($project);
        $input = [];

        $input['title'] = $request->input('title');
        $input['body'] = $request->input('body');
        $input['link'] = $request->input('link');
        $input['tech'] = $request->input('tech');

        $project->update($input);

        session()->flash('message','Projet mis à jour');
        return redirect()->route('projects.index');
    }

    public function destroy($project) {
        $project = Project::find($project);

        $project->delete();

        session()->flash('message', 'projet supprimé');

        return redirect()->back();
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
