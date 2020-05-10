<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Anime;

class PagesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anime = Anime::orderBy('anime_rating', 'desc')->limit(5)->get();
    
        $title = 'Welcome to ';
        return view('pages.home')->with([
            'title' => $title,
            'f_anime' => $anime
            ]);
    }

    public function about()
    {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function contact()
    {
        $title = 'Contact Us';
        return view('pages.contact')->with('title', $title);
    }
}
