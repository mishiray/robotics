@extends('web.layouts.app2')
@section('title' , 'Our Blog')
@section('content')

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
      <h1 class="display-4">News</h1>
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

<section data-overlay>
<div class="container">
  <div class="row mb-4">
    <div class="col-md-8 col-lg-9">
@if ($posts->count() > 0)
    @foreach ($posts as $post)
      <div class="pr-lg-4">
          <div class="card card-article-wide flex-md-row no-gutters">
          <a href="{{ route('blog_info' , ['id' => $post->id , 'slug' => $post->slug ]) }}" class="col-md-4">
              <img
              src="{{ asset('post_images/'.$post->image) }}"
              alt="{!! $post->title !!}"
              class="card-img-top"
              />
          </a>
          <div class="card-body d-flex flex-column col-auto p-4">
              <div class="d-flex justify-content-between mb-3">
              <div class="text-small d-flex">
                  <div class="mr-2">
                  </div>
              </div>
              <span data-toggle="tooltip" data-placement="top" title="March 24th, 2021" class="badge text-muted float-right">{!! date('M d, Y',strtotime($post->created_at))!!}</span>
              </div>
              <a href="{{ route('blog_info' , ['id' => $post->id , 'slug' => $post->slug ]) }}" class="flex-grow-1">
              <h3>{!! $post->title !!}</h3>
              <p class="text-dark">
                {{  \Illuminate\Support\Str::limit( strip_tags($post->description), $limit = 100, $end = '...') }}
              </p>
              </a>
          </div>
          </div>
      </div>   
    <!-- Post end-->
 @endforeach
<!-- Page Navigation-->
    <div class="row">
        <div class="col-md-12">
            <nav class="custom-pagination-nav">
                <ul class="pagination justify-content-center">
                    {!! $posts->links() !!}
                </ul>
            </nav>
        </div>
    </div>
    <!-- Page Navigation end-->
    @else
    <div class="col mt-5 text-center">
        No posts found at the moment!
    </div>
    @endif
    </div>
  </div>
</div>
</section>

</div>
<!--body content wrap end-->
@stop
