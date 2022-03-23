@extends('layouts.main')
@section('main')
<div class="contact-area contact-bg">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="widget-title mb-50">
                        <div class="row">
                                <div class="col"><h5 class="title"><a href="/login">Login</a></h5></div>
                                <div class="col"><h5 class="title"><a href="/register">Register</a></h5></div>
                            </div>
                        </div>
                            <div class="contact-form">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="col-md-12">
                                        <input type="email" name="email" placeholder="E-Mail">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <a href="#">Forgot password?</a>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn" type="submit">login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

