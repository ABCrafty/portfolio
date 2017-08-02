<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
    }

    public function index() {
        $posts = Posts::latest()->get();
        return view('blog.index', compact('posts'));
    }

    public function show($id) {
        $post = Posts::find($id);


        return view('blog.show', compact('post'));
    }
}
