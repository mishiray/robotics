@extends('web.layouts.app2')
@section('title' , $post->title )
@section('content')


<!--body content wrap start-->
<div class="main">

  <section class="bg-primary-2 text-light p-0 o-hidden">
    <img
            src="{{ asset('post_images/'.$post->image) }}"
            alt="Image"
            class="bg-image blend-mode-multiply"
    />
    <div class="container layer-2">
        <div class="row pt-7 min-vh-80 align-items-center" data-aos="fade-up">
            <div class="col-lg-9 col-xl-8">
                <h5>{{ date('M d, Y',strtotime($post->event_date)) }}</h5>
                <h1 class="display-1"> {!! $post->title !!}</h1>
                <p class="lead mb-4">
                   
                </p>
                <h1
                        class="add-countdown-time"
                        %}
                        data-countdown-date="{!! $post->event_date !!}"
                ></h1>
            </div>
        </div>
    </div>
    <div class="divider ">
        <img
                class=""
                src="../assets/img/dividers/divider-5.svg"
                alt="divider graphic"
                data-inject-svg
        />
    </div>
</section>
<section class="">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 mb-3 mb-md-0">
              {!! $post->description !!}  
              <a class="btn btn-primary mt-3" href="{!! $post->link !!}" alt="heart icon" data-inject-svg="" /> Make Reservation </a></p>
            </div>
            <div class="col-md-5">
                <h2>{!! $post->location !!}</h2>
<div class="mb-3">
<h6 class="mb-1">Address</h6>
  <address>
    {!! $post->address !!}
  </address>
</div>
<div class="mb-3">
<h6 class="mb-1">Phone</h6>
{!! $post->phone !!}</div>
<div class="mb-3">
<h6 class="mb-1">Email</h6>
<a href="mailto:{!! $post->email !!}">{!! $post->email !!}</a></div>
            </div>
        </div>
    </div>
</section>
    
<!--body content wrap end-->
@stop
