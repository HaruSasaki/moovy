@extends('layouts.app')
@extends('layouts.navigation')

@section('header')
<li><a href="#">home</a></li>
<li class="active"><a href="#">movies</a></li>
<li><a href="#">series</a></li>
<li><a href="#">about us</a></li>
@endsection

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
              <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                  <div class="movie-item mb-60">
                      <div class="movie-poster">
                          <a href="movie-details.html"><img src="img/poster/ucm_poster02.jpg" alt=""></a>
                      </div>
                      <div class="movie-content">
                          <div class="top">
                              <h5 class="title"><a href="movie-details.html">DISINI BUAT JUDUL</a></h5>
                              <span class="date">DISINI TAHUN RILIS</span>
                          </div>
                          <div class="bottom">
                              <ul>
                                  <li><span class="quality">DISINI RATING</span></li>
                                  <li>
                                      <span class="duration"><i class="far fa-clock"></i>DISINI DURASI</span>
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
  <!-- top-rated-movie-end -->
@endsection