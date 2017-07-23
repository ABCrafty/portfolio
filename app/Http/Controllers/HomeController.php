<?php

namespace App\Http\Controllers;

use App\Models\Homepage;

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
        return view('homepage/index', compact('homepage'));
    }
}
