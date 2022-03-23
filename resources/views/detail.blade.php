@extends('layouts.main')

@section('main')

<div class="movie-details-area" data-background="{{ asset('image/banner/'. $movie->banner )}}">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-xl-3 col-lg-4">
                <div class="movie-details-img">
                    <img src="{{ asset('image/cover/'. $movie->cover )}}" alt="">
                    <a href="https://www.youtube.com/watch?v=". {{ $movie->trailer }}" class="popup-video"> <img src="{{ asset('img/images/play_icon.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8">
                <div class="col">
                    <table class="table table-borderless">
                        <td style="width: 90%"></td>
                        <td>
                        <td style="width: 5%"><a href="/edit/{{ $movie->id }}" class="btn">Edit</a></td>
                        <td style="width: 5%">
                            <form method="POST" action="{{ url('detail', $movie->id ) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn">delete</button>
                            </form>
                        </td>
                    </table>
                </div>
                <div class="movie-details-content">
                    <h2><span>{{ $movie->title}}</span></h2>
                    <div class="banner-meta">
                        <ul>
                            <li class="quality">
                                <span>{{ $movie->rated}}</span>
                            </li>
                            <li class="category">{{ $movie->genre}}</li>
                            <li class="release-time">
                                <span><i class="far fa-calendar-alt"></i> {{ $movie->year}}</span>
                                <span><i class="far fa-clock"></i> {{ $movie->duration}} min</span>
                            </li>
                        </ul>
                    </div>
                    <ul>
                        <li>Written by {{ $movie->writer}}</li>
                        <li>Directed by {{ $movie->director}}</li>
                    </ul><br>
                    <p>{{ $movie->synopsis}}</p><br>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection