@extends('layouts.main')
@section('main')


<div class="contact-area contact-bg">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-6 col-lg-7">
                <div class="widget-title mb-50" align="center">
                <div class="row">
                        <div class="col"><h5 class="title wow fadeInUp">Edit Movies</h5></div>
                    </div>
                </div>
                    <div class="contact-form">
                        <form action="{{ url('edit', $movies->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="cover" id="cover">Cover</label>
                                    <input type="file" name="cover" values="{{$movies->cover}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="banner" id="banner">Banner</label>
                                    <input type="file" name="banner" values="{{$movies->banner}}">
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12">
                                <label for="title" id="title">Title</label>
                                <input type="text" name="title" placeholder="Input title in here... values="{{$movies->title}}"">
                            </div></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="writer" id="writer">riter</label>
                                    <input type="text" name="writer" placeholder="Input writer in here..." values="{{$movies->writer}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="director" id="director">Director</label>
                                    <input type="text" name="director" placeholder="Input director in here..." values="{{$movies->director}}">
                                </div>
                                </div>
                            <div class="row">
                            <div class="col-md-6">
                                <label for="year" id="year">Year</label>
                                <input type=nnumberr" name="year" placeholder="Input year in here.. values="{{$movies->year}}".">
                            </div>
                            <div class="col-md-6">
                                <label for="duration" id="duration">Duration</label>
                                <input type="number" name="duration" placeholder="Edit duration in here..." values="{{$movies->duration}}">
                            </div>
                            <div class="col-md-12">
                                <label for="type" id="type">Type</label>
                                <input type="text" name="type" placeholder="Series/Movies">
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="type" id="type">Type</label>
                                    <input type="text" name="type" placeholder="Series/Movie"> values="{{$movies->title}}"rated
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"> values="{{$movies->title}}"rating
                                    <label for="rated" id="rated">Rated</label>
                                    <input type="text" name="rated" placeholder="Input age rated in here...">
                                </div>
                                <div class="col-md-6">
                                    <label for="rating" id="rating">Rating</label>
                                    <input type="number" name="rating" placeholder="Input rating in here..." values="{{$movies->genre}}">
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="genre" id="genre">Genre</label> values="{{$movies->title}}"trailer
                                        <input type="text" name="genre" placeholder="Input genre in here...">
                                    </div></div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="trailer" id="trailer">Trailer</label> values="{{$movies->titsynopsis
                                            <input type="text" name="trailer" placeholder="Youtube Vid Id (https://youtu.be/ here ->Pv56oBAfRhY<- here)">
                                        </div></div>
                            <div class="row">
                            <div class="col-md-12">
                                <label for="Synopsis" id="Synopsis">Synopsis</label>
                                <textarea name="synopsis" placeholder="Input Synopsis in here..."></textarea>
                            </div></div>
                            <div class="d-flex justify-content-end">
                                <button class="btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection