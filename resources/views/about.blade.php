@extends('layouts.app')
@extends('layouts.navigation')

@section('header')
    <li><a href="#">home</a></li>
    <li><a href="#">movies</a></li>
    <li><a href="#">series</a></li>
    <li class="active"><a href="#">about us</a></li>
@endsection

@section('main')
<div class="blog-details-area blog-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-post-item blog-details-wrap">
                    <div class="blog-post-content">
                        <h2 class="title text-center">Our Team</h2>
                    </div>
                </div>
                <div class="avatar-post mt-40 mb-80">
                    <div class="post-avatar-img">
                        <img src="img/blog/post_avatar_img.png" alt="img">
                    </div>
                    <div class="post-avatar-content">
                        <h5>Andhika Bayu Ramadhany</h5>
                        <p>Bukan ayang</p>
                    </div>
                </div>
                <div class="avatar-post mt-40 mb-80">
                    <div class="post-avatar-img">
                        <img src="img/blog/post_avatar_img.png" alt="img">
                    </div>
                    <div class="post-avatar-content">
                        <h5>Dio Fathir Zinedine Khalaf</h5>
                        <p>Bukan ayang</p>
                    </div>
                </div>
                <div class="avatar-post mt-40 mb-80">
                    <div class="post-avatar-img">
                        <img src="img/blog/post_avatar_img.png" alt="img">
                    </div>
                    <div class="post-avatar-content">
                        <h5>Gloria Loren Lawuredja</h5>
                        <p>Bukan ayang</p>
                    </div>
                </div>
                <div class="avatar-post mt-40 mb-80">
                    <div class="post-avatar-img">
                        <img src="img/blog/post_avatar_img.png" alt="img">
                    </div>
                    <div class="post-avatar-content">
                        <h5>Iqbal Abdurrahman</h5>
                        <p>Ini adalah saya</p>
                    </div>
                </div>
                <div class="avatar-post mt-40 mb-80">
                    <div class="post-avatar-img">
                        <img src="img/blog/post_avatar_img.png" alt="img">
                    </div>
                    <div class="post-avatar-content">
                    <h5>Silmi Julia Rahmi</h5>
                    <p>Bukan ayang</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection