<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lyrics;
class LyricsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $lyrics = Lyrics::all();
        return view('lyrics')->with('lyrics', $lyrics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('create');
        // return view('create');
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
            'title' => 'required',
            'lyrics' => 'required',
            'artist' => 'required',
        ]);

        $lyrics = new Lyrics;
        $lyrics->lyrics = $request->lyrics;
        $lyrics->title = $request->title;
        $lyrics->artist = $request->artist;
        $lyrics->save();
        return redirect('lyrics')->with('success', 'Song Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lyrics = Lyrics::find($id);
        return view('view')->with('lyrics', $lyrics);
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
        $lyrics = Lyrics::find($id);
        return view('edit')->with('lyrics', $lyrics);
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
        $this->validate($request, [
            'title' => 'required',
            'lyrics' => 'required',
            'artist' => 'required',
        ]);

        $lyrics = Lyrics::find($id);
        $lyrics->lyrics = $request->lyrics;
        $lyrics->title = $request->title;
        $lyrics->artist = $request->artist;
        $lyrics->save();
        return redirect('lyrics')->with('success', 'Song Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lyrics = Lyrics::find($id);
        $lyrics->delete();
        
        return redirect('lyrics')->with('success', 'Song Deleted');
    }
    
}
