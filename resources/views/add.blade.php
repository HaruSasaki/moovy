@extends('layouts.main')
@section('main')


<div class="contact-area contact-bg">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-6 col-lg-7">
                <div class="widget-title mb-50" align="center">
                <div class="row">
                        <div class="col"><h5 class="title wow fadeInUp">Add Movies</h5></div>
                    </div>
                </div>
                    <div class="contact-form">
                        <form action="{{ url('add') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="cover" id="cover">Cover</label>
                                    <input type="file" name="cover">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="banner" id="banner">Banner</label>
                                    <input type="file" name="banner">
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12">
                                <label for="title" id="title">Title</label>
                                <input type="text" name="title" placeholder="Input title in here...">
                            </div></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="writer" id="writer">Writer</label>
                                    <input type="text" name="writer" placeholder="Input writer in here...">
                                </div>
                                <div class="col-md-6">
                                    <label for="director" id="director">Director</label>
                                    <input type="text" name="director" placeholder="Input director in here...">
                                </div>
                                </div>
                            <div class="row">
                            <div class="col-md-6">
                                <label for="year" id="year">Year</label>
                                <input type=number" name="year" placeholder="Input year in here...">
                            </div>
                            <div class="col-md-6">
                                <label for="duration" id="duration">Duration</label>
                                <input type=number" name="duration" placeholder="Input duration in here...">
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="type" id="type">Type</label>
                                    <select name="type" id="type">
                                        <option value="Series">Series</option>
                                        <option value="Movies">Movie</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="rated" id="rated">Rated</label>
                                    <input type="text" name="rated" placeholder="Input age rated in here...">
                                </div>
                                <div class="col-md-6">
                                    <label for="rating" id="rating">Rating</label>
                                    <input type="number" name="rating" placeholder="Input rating in here...">
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="genre" id="genre">Genre</label>
                                        <input type="text" name="genre" placeholder="Input genre in here...">
                                    </div></div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="trailer" id="trailer">Trailer</label>
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