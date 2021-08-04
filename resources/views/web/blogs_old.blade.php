@extends('web.layouts.app')
@section('title' , 'Our Blog')
@section('content')

<!--body content wrap start-->
<div class="blog">
   <div class="container">
        <div class="row">
            <div class="col-md-12 pt-2">
                <div class="titlepage text_align_left">
                    <h2>Our Blog Posts</h2>
                </div>
            </div>
        </div>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        @if(!empty($search_keywords))
                            <h1 class="text-white mb-0">Search result for "{{ $search_keywords }}"</h1>
                        @elseif(!empty($category_id))
                            <h1 class="text-white mb-0">Blog posts for "{{ $category_id->title }}"</h1>
                        @else
                            <h1 class="text-white mb-0">Our Blog Posts</h1>
                        @endif
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">Blog</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header section end-->

    <!--blog section start-->
    <div class="module ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="row row-post-thumbnail">
                       @if ($posts->count() > 0)
                        @foreach ($posts as $post)
                                <!-- Post-->
                                <article class="post row align-items-center">
                                    <div class="col-md-5">
                                    <a href="{{ route('blog_info' , ['id' => $post->id , 'slug' => $post->slug ]) }}">
                                        <img class="card-img-top img-thumbnail" src="{{ asset('post_images/'.$post->image) }}" alt="">
                                    </a>
                                    <div class="post-preview"></div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="post-wrapper">
                                            <div class="post-header">
                                                <h2 class="post-title">
                                                    <a href="{{ route('blog_info' , ['id' => $post->id , 'slug' => $post->slug ]) }}">
                                                        {!! $post->title !!}
                                                    </a>
                                                </h2>
                                                <ul class="post-meta">
                                                    <li>{{ date('M d, Y',strtotime($post->created_at)) }}</li>
                                                    <li><a href="#">Branding</a>, <a href="#">Design</a></li>
                                                    <li><a href="#">3 Comments</a></li>
                                                </ul>
                                            </div>
                                            <div class="post-content">
                                                <p>
                                                    {{  \Illuminate\Support\Str::limit( strip_tags($post->description), $limit = 100, $end = '...') }}
                                                </p>
                                                <a href="{{ route('blog_info' , ['id' => $post->id , 'slug' => $post->slug ]) }}" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
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
                <div class="col-lg-4 col-md-4">
                    <div class="sidebar-right pl-4">

                        @include('web.fragments.blog_searchbar' , ['search_keywords' => $search_keywords])
                        @if ($categories->count() > 0)
                            <!-- Categories widget-->
                            <aside class="widget widget-categories">
                                <div class="widget-title">
                                    <h6>Categories</h6>
                                </div>
                                <ul>
                                    @foreach ($categories as $category)
                                        <li><a href=""> {{ $category->title }} <span class="float-right"></span></a></li>
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
<!--body content wrap end-->
@stop
