<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'year'=>'required',
            'genre'=>'required',
            'synopsis'=>'required',
            'rating'=>'required',
            'star'=>'required',
            'cover'=>'required',
            'cover.*'=> 'image|mimes:jpeg,png,jpg|max:2048',
            'banner.*'=> 'image|mimes:jpeg,png,jpg|max:2048']);

        $coverName = time().'.'.$request->cover->extension();
        $request->cover->move(public_path().'/image/cover/', $coverName);
        $bannerName = time().'.'.$request->banner->extension();
        $request->banner->move(public_path().'/image/banner/', $bannerName);
        $movie = Movie::create([
            'title'=>$request['title'],
            'year'=>$request['year'],
            'genre'=>$request['genre'],
            'synopsis'=>$request['synopsis'],
            'rating'=>$request['rating'],
            'star'=>$request['star'],
            'cover'=>$coverName,
            'banner'=>$bannerName]);


            return back()->with('success', 'Movie has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
