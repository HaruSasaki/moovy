<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $movies = Movie::select('*')->where('type', '=', 'movies')->get();
        $series = Movie::select('*')->where('type', '=', 'series')->get();
        $newests = Movie::all();
        return view('dashboard', [
            'movies'=>$movies,
            'series'=>$series,
            'newests'=>$newests,
            'navlink'=> 'home'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function movies()
    {
        $movies = Movie::select('*')->where('type', '=', 'movies')->get();
        return view('movies', [
            'movies'=>$movies,
            'navlink'=> 'movies'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function series()
    {
        $series = Movie::select('*')->where('type', '=', 'series')->get();
        return view('series', [
            'series'=>$series,
            'navlink'=> 'series'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function profile()
    {
        $user_id = Auth::id();
        $user= User::select('*')->where('id', '=', $user_id)->get();
        return view('profile', ['user=>'=>$user]);
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
            'type'=>'required',
            'year'=>'required',
            'genre'=>'required',
            'synopsis'=>'required',
            'rated'=>'required',
            'rating'=>'required',
            'cover'=>'required',
            'cover.*'=> 'image|mimes:jpeg,png,jpg|max:2048',
            'banner.*'=> 'image|mimes:jpeg,png,jpg|max:2048']);

        $coverName = time().'.'.$request->cover->extension();
        $request->cover->move(public_path().'/image/cover/', $coverName);
        $bannerName = time().'.'.$request->banner->extension();
        $request->banner->move(public_path().'/image/banner/', $bannerName);
        $movie = Movie::create([
            'title'=>$request['title'],
            'type'=>$request['type'],
            'year'=>$request['year'],
            'genre'=>$request['genre'],
            'duration'=>$request['duration'],
            'writer'=>$request['writer'],
            'director'=>$request['director'],
            'synopsis'=>$request['synopsis'],
            'rating'=>$request['rating'],
            'rated'=>$request['rated'],
            'trailer'=>$request['trailer'],
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
        $movie = Movie::findorFail($id);
        $movies = Movie::all();
        return view('detail', ["movie"=>$movie, 'movies'=>$movies]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $movie = Movie::findorFail($id);
        return view('edit', ['movie'=>$movie]);
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
        $request->validate([
            'title'=>'required',
            'type'=>'required',
            'year'=>'required',
            'genre'=>'required',
            'synopsis'=>'required',
            'rated'=>'required',
            'rating'=>'required',
            'cover'=>'required',
            'cover.*'=> 'image|mimes:jpeg,png,jpg|max:2048',
            'banner.*'=> 'image|mimes:jpeg,png,jpg|max:2048']);
            $coverName = time().'.'.$request->cover->extension();
            $request->cover->move(public_path().'/image/cover/', $coverName);
            $bannerName = time().'.'.$request->banner->extension();
            $request->banner->move(public_path().'/image/banner/', $bannerName);

        $movie = Movie::find($id)->update([
            'title'=>$request['title'],
            'type'=>$request['type'],
            'year'=>$request['year'],
            'genre'=>$request['genre'],
            'duration'=>$request['duration'],
            'writer'=>$request['writer'],
            'director'=>$request['director'],
            'synopsis'=>$request['synopsis'],
            'rating'=>$request['rating'],
            'rated'=>$request['rated'],
            'trailer'=>$request['trailer'],
            'cover'=>$coverName,
            'banner'=>$bannerName]);
        return redirect('/')->with('success', 'Movie has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect('/')->with('success', 'Movie has been deleted.');
    }
}
