@extends('web.layouts.app2')
@section('title', 'Our Gallery')
@section('content')
<div class="main ">
    
    <section
      class="bg-dark text-light header-inner p-0 jarallax o-hidden"
      data-overlay
      data-jarallax
      data-speed="0.2"
    >
      <img
        src="{{ $web_source }}/assets/img/event-1.jpg"
        alt="Image"
        class="jarallax-img opacity-30"
      />
      <div class="container py-0 layer-2">
        <div class="row my-3">
          <div class="col">
            <nav aria-label="breadcrumb"></nav>
          </div>
        </div>

        <div class="row my-4 my-md-6" data-aos="fade-up">
          <div class="col-xl-7 col-lg-8 col-md-9">
            <h1 class="display-4">Gallery</h1>
            <p class="h3">
                Our Gallery Library
            </p>
          </div>
        </div>
      </div>
      </div> 
      <div class="divider ">
        <img
          src="{{ $web_source }}/assets/img/dividers/divider-1.svg"
          alt="graphical divider"
          data-inject-svg
        />
      </div>
    </section>

    <section class="pt-0">
      <div class="container">
        <div class="row justify-content-center text-center mb-6">
          <div class="col-xl-8 col-lg-9">
            <h2 class="display-4 mx-xl-6">Call to action about the gallery.</h2>
            <p class="lead">
              Our grand journey to the robotics lab
            </p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-9">
              <div class="row">
                <div align="center">
                    <button class="btn btn-default filter-button" data-filter="all">All</button>
                    @foreach ($tags as $item)
                       <button class="btn btn-default filter-button" data-filter="{{$item->filter}}">{{$item->filter}}</button>
                    @endforeach
                </div>
              </div>
              <div class="row">
                    @foreach ($gallery as $item)
                        <div class="col-3 col-md-3 {{$item->filter}} filter mb-3">
                            <a href="{{asset('post_images/'.$item->image) }}" data-fancybox="2" data-options='{"loop":true}'>
                                <img src="{{asset('post_images/'.$item->image) }}" alt="{{ $item->detail }}" class="rounded" style="border-radius: 0.4rem !important;">
                            </a>
                        </div>
                    @endforeach
                   
          </div>
        </div>
      </div>
    </section>

@stop