<?php

namespace App\Http\Controllers\Admin;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function __construct()
    {
    }

    public function index() {
        return view('admin.about.index');
    }

    public function create() {
        return view('admin.about.create');
    }

    public function store() {

    }

    public function edit($id) {
        $about = About::find($id);
        return view('admin.about.edit', compact('about'));
    }

    public function update() {

    }

    public function destroy() {

    }
}
