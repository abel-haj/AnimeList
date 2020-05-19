<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Anime;

class AnimeController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $anime = Anime::orderBy('anime_name', 'asc')->get();
        $anime = DB::Table('animes')->orderBy('anime_name', 'asc')
                ->paginate(25);
        // return ($anime);
        return view('anime.index')->with('all_anime', $anime);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anime.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'mimes:jpg,jpeg,png,gif,svg|nullable|max:9999',
            'feat-image' => 'mimes:jpg,jpeg,png,gif,svg|nullable|max:9999',
            'date' => 'required',
            'rate' => 'required',
            'desc' => 'required'
        ]);

        // Handle File Upload for cover image
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $coverImage= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $request->file('image')->move(public_path() . '/images/cover/', $coverImage);
            // $path = $request->file('image')->storeAs('public/images/cover', $coverImage);
        } else {
            $coverImage = 'nocover.jpg';
        }
        // Handle File Upload for cover image
        if($request->hasFile('feat-image')){
            // $filenameWithExt = $request->file('feat-image')->getClientOriginalName();
            // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // $extension = $request->file('feat-image')->getClientOriginalExtension();
            // $featImage= $filename.'_featured_'.time().'.'.$extension;
            // $path = $request->file('feat-image')->storeAs('public/images/featured', $featImage);

            $filenameWithExt = $request->file('feat-image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('feat-image')->getClientOriginalExtension();
            $featImage= $filename.'_'.time().'.'.$extension;
            $request->file('feat-image')->move(public_path() . '/images/featured/', $featImage);
            // $path = $request->file('feat-image')->storeAs('public/images/featured', $featImage);
        } else {
            $featImage = 'nofeatured.jpg';
        }

        $anime = new Anime;
        $anime->anime_name = $request->input('name');
        $anime->anime_image = $coverImage;
        $anime->anime_featured_image = $featImage;
        $anime->anime_release_date = $request->input('date');
        $anime->anime_rating = $request->input('rate');
        $anime->anime_description = $request->input('desc');
        $anime->save();

        return redirect('/admin/anime')->with('Success', 'Anime created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anime = Anime::find($id);
        return ($anime);
        return view('anime.show')->with('anime', $anime);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
