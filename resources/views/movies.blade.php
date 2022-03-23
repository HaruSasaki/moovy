@extends('layouts.app')

@section('main')
<!-- top-rated-movie -->
<div class="top-rated-movie tr-movie-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-50">
                    <h2 class="title">Top Rated Movies</h2>
                </div>
            </div>
        </div>
        <div class="row tr-movie-active">
            <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer">
                @foreach ($movies as $movie)
                <div class="movie-item mb-60">
                    <div class="movie-poster">
                        <a href="/detail/{{ $movie->id }}"><img src="{{ asset('/image/cover/'.$movie->cover) }}" alt=""></a>
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
                                    <span class="duration"><i class="far fa-clock"></i>{{ $movie->duration }}</span>
                                    <span class="rating"><i class="fas fa-star"></i> {{ $movie->rating }}</span>
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