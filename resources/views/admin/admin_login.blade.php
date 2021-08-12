@extends('web.layouts.app')
@section('title')
Admin Login
@endsection
@section('content')
    <section class="banner-w3layouts ptb-100">
        <div class="container">
            <div class="row banner-w3layouts-grids">
                <div class="col-lg-5 sign-info" data-aos="fade-right">
                    <h3>Sign in to your Account</h3>
                    <p class="para-sign mt-2 mb-4">Enter your details to login</p>

                    <form method="post" action="{{ route('Adminlogin')}}">{{ csrf_field() }}
                        <div class="form-group">
                            <label>User Email*</label>
                            <div class="icon1">
                                <input class="form-control" placeholder="" name="email" type="email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password*</label>
                            <div class="icon2">
                                <input class="form-control" placeholder="" name="password" type="password" required="">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <input type="submit" class="btn btn-primary btn-lg" value="Sign in">
                        <br>
                        <label class="anim">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </label>
                    </form>
                </div>
                <div class="col-lg-7 banner-w3layouts-image pl-md-5">
                    <div class="effect-w3">
                        <img src="{{ $web_source }}/images/img4.jpg" alt="" class="img-fluid image1">
                        <img src="{{ $web_source }}/images/img4.jpg" alt="" class="img-fluid image2">
                        <img src="{{ $web_source }}/images/img4.jpg" alt="" class="img-fluid image3">
                        <img src="{{ $web_source }}/images/img4.jpg" alt="" class="img-fluid image4">
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
