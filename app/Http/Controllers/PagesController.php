<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Anime;

class PagesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rated_anime = Anime::orderBy('anime_rating', 'desc')
        ->orderBy('created_at', 'desc')->limit(5)->get();

        $voted_anime = Anime::orderBy('anime_votes', 'desc')
        ->orderBy('created_at', 'desc')->limit(5)->get();
    
        $title = 'Welcome';
        return view('pages.home')->with([
            'title' => $title,
            'r_anime' => $rated_anime,
            'v_anime' => $voted_anime
            ]);
    }

    public function anime()
    {
        $all_anime = Anime::orderBy('anime_name', 'asc')->paginate(15);

        $title = 'Browse All Anime';
        return view('pages.anime')->with([
            'title' => $title,
            'all_anime' => $all_anime
            ]);
    }

    public function display($id)
    {
        $anime = Anime::find($id);

        $title = $anime->anime_name;
        return view('pages.display')->with([
            'title' => $title,
            'anime' => $anime
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
