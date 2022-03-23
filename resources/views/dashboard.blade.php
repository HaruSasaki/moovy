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
            <img class="d-block w-100" src="..." alt="First slide">
          </div>
    @foreach ($newests as $newest)
      <div class="carousel-item">
        <div class="banner-area banner-bg" data-background="{{ asset('image/cover/'. $newest->cover )}}">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="banner-content">
                            <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">{{ $newest->title}}</h2>
                            <div class="banner-meta wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.8s">
                                <ul>
                                    <li class="quality">
                                        <span>{{ $newest->rated}}</span>
                                    </li>
                                    <li class="category">{{ $newest->genre}}
                                    </li>
                                    <li class="release-time">
                                        <span><i class="far fa-calendar-alt"></i> {{ $newest->year }}</span>
                                        <span><i class="far fa-clock"></i> {{ $newest->duration}} min</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="https://www.youtube.com/watch?v=". {{ $newest->trailer }} " class="banner-btn btn popup-video wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1.8s"><i class="fas fa-play"></i> Watch Trailer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

<!-- top-rated-movie -->
        <div class="ucm-area ucm-bg">
            <div class="ucm-bg-shape"></div>
            <div class="container">
                <div class="row align-items-end mb-55">
                    <div class="col-lg-6">
                        <div class="section-title text-center text-lg-left">
                            <h2 class="title">New Movies</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    @foreach ($series as $serie)
                    <div class="tab-pane fade show active" id="Series" role="tabpanel" aria-labelledby="Series-tab">
                        <div class="ucm-active owl-carousel">
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="detail/{{ $serie->id }}"><img src="{{ asset('image/cover/'. $serie->cover )}}" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="detail/{{ $serie->id }}">{{ $serie->title }}</a></h5>
                                        <span class="date">{{ $serie->year }}</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">{{ $serie->rated }}</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> {{ $serie->duration }} min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> {{ $serie->rating }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach ($movies as $movie)
                    <div class="tab-pane fade show active" id="Movies" role="tabpanel" aria-labelledby="Movies-tab">
                        <div class="ucm-active owl-carousel">
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="detail/{{ $movie->id }}"><img src="{{ asset('image/cover/'. $movie->cover )}}" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="detail/{{ $movie->id }}">{{ $movie->title }}</a></h5>
                                        <span class="date">{{ $movie->year }}</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">{{ $movie->rated }}</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> {{ $movie->duration }} min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> {{ $movie->rating }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
<!-- top-rated-movie-end -->
@endsection