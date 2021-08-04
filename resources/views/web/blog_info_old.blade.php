@extends('web.layouts.app')
@section('title' , $post->title )
@section('content')


<!--body content wrap start-->
<div class="main">

    <!--header section start-->
    <section class="contact hero-section ptb-100 gradient-overlay"
             style="background: url('{{ $web_source }}img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Blog Post Information</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">Blog Information</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--blog section start-->
    <div class="module ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <!-- Post-->
                    <article class="post">
                        <div class="post-preview"><img src="{{ asset('post_images/'.$post->image) }}" alt="article" class="img-fluid"/></div>
                        <div class="post-wrapper">
                            <div class="post-header">
                                <h1 class="post-title"> {!! $post->title !!} </h1>
                                <ul class="post-meta">
                                    <li>{{ date('M d, Y',strtotime($post->created_at)) }}</li>
                                    <li><a href="#"><span class="comments_count">{{ $comments->count() ?? 0 }}</span> Comments</a></li>
                                </ul>
                            </div>
                            <div class="post-content">
                                {!! $post->description !!}
                            </div>
                            {{-- <div class="post-footer">
                                <div class="post-tags"><a href="#">Lifestyle</a><a href="#">Music</a><a href="#">News</a><a href="#">Travel</a></div>
                            </div> --}}
                        </div>
                    </article>
                    <!-- Post end-->

                    <!-- Comments area-->
                    <div class="comments-area mb-5">
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
                                    <button class="btn secondary-solid-btn" type="submit">Post Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Comments area end-->
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="sidebar-right pl-4">

                        @include('web.fragments.blog_searchbar' , ['search_keywords' => $search_keywords ?? ''])

                        @if ($categories->count() > 0)
                            <!-- Categories widget-->
                            <aside class="widget widget-categories">
                                <div class="widget-title">
                                    <h6>Categories</h6>
                                </div>
                                <ul>
                                    @foreach ($categories as $category)
                                        <li><a href="">{{ $category->title }} <span class="float-right"></span></a></li>
                                    @endforeach
                                </ul>
                            </aside>
                        @endif


                        @if ($recent_posts->count() > 0)
                            <!-- Recent entries widget-->
                            <aside class="widget widget-recent-entries-custom">
                                <div class="widget-title">
                                    <h6>Recent Posts</h6>
                                </div>
                                <ul>
                                    @foreach ($recent_posts as $r_post)
                                        @include('web.fragments.recent_post_item' , ['r_post'  => $r_post])
                                    @endforeach
                                </ul>
                            </aside>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog section end-->

</div>
<!-- Comment Twmplate-->
<div class="comment d-none" id="commentTemplate">
    <div class="comment-author"><img class="avatar img-fluid rounded-circle" src="" alt="comment"/></div>
    <div class="comment-body">
        <div class="comment-meta">
            <div class="comment-meta-author"></div>
            <div class="comment-meta-date"></div>
        </div>
        <div class="comment-content">
            <p></p>
        </div>
        {{-- <div class="comment-reply"><a href="#">Reply</a></div> --}}
    </div>
</div>
<!--body content wrap end-->
@stop
