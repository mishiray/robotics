@extends('web.layouts.app2')
@section('title' , $post->title )
@section('content')


<!--body content wrap start-->
<div class="main">

    
    <div
      class="article-progress"
      data-sticky="below-nav"
      style="top: 101px !important;"
    >
      <progress class="reading-position" value="0"></progress>
      <div class="article-progress-wrapper">
        <div class="container">
          <div class="row">
            <div class="col py-2">
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                  <div class="text-small text-muted mr-1">Reading:</div>
                  <div class="text-small">
                    AICE Launches AI For Leaders Roundtable To Grow The AI Economy In Africa
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section
      class="bg-dark text-light header-inner p-0 jarallax o-hidden"
      data-overlay
      data-jarallax
      data-speed="0.2"
    >
      <img
        src="{{ asset('post_images/'.$post->image) }}"
        alt="{!! $post->title !!}"
        class="jarallax-img opacity-30"
      />
      <div class="container pt-6 mt-3">
        <div class="row justify-content-center">
          <div class="col-lg-10 col-xl-8">
            <div class="d-flex mb-3">
            </div>
            <h1>{!! $post->title !!}</h1>
            <div class="d-flex align-items-center">
              <div>
                <div class="text-small text-muted">{{ date('M d, Y',strtotime($post->created_at)) }}</div>
                <div class="text-small text-muted"><a href="#"><span class="comments_count">{{ $comments->count() ?? 0 }}</span> Comments</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="decoration-wrapper">
        <div
          class="decoration bottom right d-none d-md-block"
          data-jarallax-element="100 100"
        >
          <img
            class="bg-primary-2"
            src="/assets/img/decorations/deco-blob-1.svg"
            alt="deco-blob-1 decoration"
            data-inject-svg
          />
        </div>
      </div> -->
      <div class="divider ">
        <img
          src="../assets/img/dividers/divider-1.svg"
          alt="graphical divider"
          data-inject-svg
        />
      </div>
    </section>

    <section class="p-0" data-reading-position>
      <div class="container">
        <div class="row">
          <div class="col-xl-12  col-lg-12 col-md-10">
            <article class="article">
                {!! $post->description !!}
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="has-divider">
      <div class="divider">
        <img
          class="bg-primary-alt"
          src="../assets/img/dividers/divider-1.svg"
          alt="divider graphic"
          data-inject-svg
        />
      </div>
    </section>

</div>

<!-- Comments area-->
<div class="col-md-5 col-sm-12">
  
<div class="m-5 comments-area mb-5">
  <h5 class="comments-title"><span class="comments_count">{{ $comments->count() ?? 0 }}</span> Comments</h5>
  <div class="comment-list">

      @foreach ($comments as $comment)
      <!-- Comment-->
      <div class="comment">
          <div class="comment-author"><img class="avatar img-fluid rounded-circle" src="{{ $comment->getAvatar() }}" alt="comment"/></div>
          <div class="comment-body">
              <div class="comment-meta">
                  <div class="comment-meta-author">{{ $comment->name }}</div>
                  <div class="comment-meta-date">{{  date('d M Y h:i:A',strtotime($comment->created_at)) }}</div>
              </div>
              <div class="comment-content">
                  <p>
                      {!! $comment->comment !!}
                  </p>
              </div>
              {{-- <div class="comment-reply"><a href="#">Reply</a></div> --}}
          </div>
      </div>
      @endforeach

  </div>
  <div class="comment-respond">
      <h5 class="comment-reply-title">Leave a Reply</h5>
      <p class="comment-notes">Your email address will not be published. Required fields are marked</p>
      <form class="comment-form row" id="commentform" action="{{ route('our_blog.comment')}}" method="post">
          @csrf
          <input type="hidden" name="blog_id" required value="{{ $post->id }}">
          <div class="form-group col-md-4">
              <input class="form-control" type="text" name="name" placeholder="Name" required>
          </div>
          <div class="form-group col-md-4">
              <input class="form-control" type="text" name="email" placeholder="Email">
          </div>
          <div class="form-group col-md-4">
              <input class="form-control" type="url" name="website" placeholder="Website">
          </div>
          <div class="form-group col-md-12">
              <textarea class="form-control" rows="8" name="comment" placeholder="Comment" required></textarea>
          </div>
          <div class="form-submit col-md-12">
              <button class="btn btn-primary" type="submit">Post Comment</button>
          </div>
      </form>
  </div>
</div>
</div>
<!-- Comments area end-->

<!--body content wrap end-->
@stop
