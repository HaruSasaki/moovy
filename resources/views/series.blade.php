@extends('layouts.app')

@section('main')
<!-- top-rated-movie -->
<div class="top-rated-movie tr-movie-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-50">
                    <h2 class="title">Top Rated Series</h2>
                </div>
            </div>
        </div>
        <div class="row tr-movie-active">
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                @foreach ($series as $serie)
                <div class="movie-item mb-60">
                    <div class="movie-poster">
                        <a href="movie-details.html"><img src="{{ asset('/image/cover/'.$serie->cover) }}" alt=""></a>
                    </div>
                    <div class="movie-content">
                        <div class="top">
                            <h5 class="title"><a href="#">{{ $serie->title }}</a></h5>
                            <span class="date">{{ $serie->year }}</span>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li><span class="quality">{{ $serie->rated }}</span></li>
                                <li>
                                    <span class="duration"><i class="far fa-clock"></i>{{ $serie->duration }}</span>
                                    <span class="rating"><i class="fas fa-star"></i> {{ $serie->rating }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- top-rated-movie-end -->
@endsection