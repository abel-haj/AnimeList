<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Dashboard';
        return view('admin.dashboard')->with('title', $title);
    }

    public function manage()
    {
        $title = 'Manage Anime';
        return view('admin.manage')->with('title', $title);
    }

    // public function add()
    // {
    //     $title = 'Create a new Anime';
    //     return view('admin.add')->with('title', $title);
    // }
}
