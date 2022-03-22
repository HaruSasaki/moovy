@extends('layouts.app')
@extends('layouts.navigation')

@section('header')
    <li class="active"><a href="#">home</a></li>
    <li><a href="#">movies</a></li>
    <li><a href="#">series</a></li>
    <li><a href="#">about us</a></li>
@endsection

@section('main')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="banner-area banner-bg" data-background="img/banner/banner_bg01.jpg">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="banner-content">
                            <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">Unlimited <span>Blade</span> Works</h2>
                            <div class="banner-meta wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.8s">
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
                            <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="banner-btn btn popup-video wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1.8s"><i class="fas fa-play"></i> Watch Trailer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="..." alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="..." alt="Third slide">
      </div>
    </div>
  </div>

<!-- top-rated-movie -->
        <div class="ucm-area ucm-bg" data-background="img/bg/ucm_bg.jpg">
            <div class="ucm-bg-shape" data-background="img/bg/ucm_bg_shape.png"></div>
            <div class="container">
                <div class="row align-items-end mb-55">
                    <div class="col-lg-6">
                        <div class="section-title text-center text-lg-left">
                            <h2 class="title">New Movies</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ucm-nav-wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="movies-tab" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="true">Movies</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="Series-tab" data-toggle="tab" href="#Series" role="tab" aria-controls="Series" aria-selected="false">Series</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="Series" role="tabpanel" aria-labelledby="Series-tab">
                        <div class="ucm-active owl-carousel">
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="img/poster/ucm_poster01.jpg" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">Women's Day</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">pg 18</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- top-rated-movie-end -->
@endsection