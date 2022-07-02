@extends('web.layouts.app2')
@section('title', 'About Us')
@section('content')
<div class="main ">
    
   
  <section
  class="bg-dark text-light header-inner p-0 jarallax o-hidden"
  data-overlay
  data-jarallax
  data-speed="0.2"
>
  <img
    src="{{ $web_source }}/assets/img/article-9.jpg"
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
        <h1 class="display-4">Events</h1>
        <p class="h3">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium.
        </p>
      </div>
    </div>
  </div>
  <div class="decoration-wrapper">
    <div
      class="decoration bottom right d-none d-md-block"
      data-jarallax-element="100 100"
    >
      <img
        class="bg-primary-2"
        src="{{ $web_source }}/assets/img/decorations/deco-blob-1.svg"
        alt="deco-blob-1 decoration"
        data-inject-svg
      />
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

<section>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-10 col-xl-8">
              <h2 class="h1 mt-3 mb-4">Upcoming events</h2>
          </div>
          @if ($upcoming->count() > 0)
              @foreach ($upcoming as $event)
              <div class="pr-lg-4">
                <div class="card card-article-wide flex-md-row no-gutters">
                <a href="{{ route('event_info' , ['id' => $event->id , 'slug' => $event->slug ]) }}" class="col-md-4">
                    <img
                    src="{{ asset('post_images/'.$event->image) }}"
                    alt="{!! $event->title !!}"
                    class="card-img-top"
                    />
                </a>
                <div class="card-body d-flex flex-column col-auto p-4">
                    <div class="d-flex justify-content-between mb-3">
            
                    <span data-toggle="tooltip" data-placement="top" title="{{ date('M d, Y',strtotime($event->event_date))}}" class="badge text-muted float-right">{{$event->event_date}}</span>
                    </div>
                    <a href="{{route('event_info' , ['id' => $event->id , 'slug' => $event->slug ]) }}" class="flex-grow-1">
                    <h3>{{$event->title}}</h3>
                    <p class="text-dark">
                      {{  \Illuminate\Support\Str::limit( strip_tags($event->description), $limit = 100, $end = '...') }}
                    </p>
                    </a>
                </div>
                </div>
            </div>   
              @endforeach
          @else 
          <div class="col mt-5 text-center">
            No Upcoming events!
          </div>
          @endif
      </div>
  </div>
</section>

<section>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-10 col-xl-8">
              <h2 class="h1 mt-3 mb-4">Past Events</h2>
              @if ($past->count() > 0)
              @foreach ($past as $event)
              <div class="pr-lg-4">
                <div class="card card-article-wide flex-md-row no-gutters">
                <a href="{{route('event_info' , ['id' => $event->id , 'slug' => $peventost->slug ]) }}" class="col-md-4">
                    <img
                    src="{{ asset('post_images/'.$event->image) }}"
                    alt="{!! $event->title !!}"
                    class="card-img-top"
                    />
                </a>
                <div class="card-body d-flex flex-column col-auto p-4">
                    <div class="d-flex justify-content-between mb-3">
            
                    <span data-toggle="tooltip" data-placement="top" title="{{date('M d, Y',strtotime($event->event_date))}}" class="badge text-muted float-right">{{$event->event_date}}</span>
                    </div>
                    <a href="{{route('event_info' , ['id' => $event->id , 'slug' => $peventost->slug ]) }}" class="flex-grow-1">
                    <h3>{{$event->title}}</h3>
                    <p class="text-dark">
                      {{  \Illuminate\Support\Str::limit( strip_tags($event->description), $limit = 100, $end = '...') }}
                    </p>
                    </a>
                </div>
                </div>
            </div>   
              @endforeach
          @else
          <div class="col mt-5 text-center">
                  No past events!
          </div>
          @endif           
          </div>
      </div>
  </div>
</section>
       
</div>
@stop