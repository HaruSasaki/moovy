@extends('layouts.app')

@section('header')
    <li><a href="#">home</a></li>
    <li><a href="#">movies</a></li>
    <li><a href="#">series</a></li>
    <li><a href="#">about us</a></li>
@endsection

@section('main')
<div class="movie-details-area" data-background="img/bg/movie_details_bg.jpg">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-xl-3 col-lg-4">
                <div class="movie-details-img">
                    <img src="img/poster/movie_details_img.jpg" alt="">
                    <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><img src="img/images/play_icon.png" alt=""></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8">
                <div class="movie-details-content">
                    <h2><span>The Easy Reach</span></h2>
                    <div class="banner-meta">
                        <ul>
                            <li class="quality">
                                <span>Pg 18</span>
                            </li>
                            <li class="category">
                                <a href="#">Romance,</a>
                                <a href="#">Drama</a>
                            </li>
                            <li class="release-time">
                                <span><i class="far fa-calendar-alt"></i> 2021</span>
                                <span><i class="far fa-clock"></i> 128 min</span>
                            </li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many
                        variations of passages of lorem
                        Ipsum available, but the majority have suffered alteration in some injected humour.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection