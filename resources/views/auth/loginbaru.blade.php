@extends('layouts.main')
@section('main')
<div class="contact-area contact-bg">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="widget-title mb-50">
                        <div class="row">
                                <div class="col"><h5 class="title"><a href="#">Login</a></h5></div>
                                <div class="col"><h5 class="title"><a href="#">Register</a></h5></div>
                            </div>
                        </div>
                            <div class="contact-form">
                                <form action="#">
                                    <div class="col-md-12">
                                        <input type="email" placeholder="E-Mail">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="password" placeholder="Password">
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <a href="#">Forgot password?</a>
                                    </div>
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
@section