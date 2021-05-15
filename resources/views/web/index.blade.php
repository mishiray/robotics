@extends('web.layouts.app')
@section('title', 'Home')
@section('content')
<div class="main">
        <div class="full_bg">
        <!-- header inner -->
            <div class="section">
                <!-- carousel code -->
                <div id="banner1" class="carousel slide slider_main">
                <ol class="carousel-indicators ">
                    <li data-target="#banner1" data-slide-to="0" class="indicator-li-1">01</li>
                    <li data-target="#banner1" data-slide-to="1" class="">02</li>
                    <li data-target="#banner1" data-slide-to="2" class="active">03</li>
                </ol>
                <div class="carousel-inner">
                    <!-- first slide -->
                    <div class="carousel-item active">
                        <div class="carousel-caption cuplle">
                            <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="photog">
                                        <h1>Care early<br>Coronavirus</h1>
                                        <a class="read_more" href="javascript:void(0)" >Read More</a>
                                        <a class="read_more" href="about.html" >About Us</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- second slide -->
                    <div class="carousel-item">
                        <div class="carousel-caption cuplle">
                            <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="photog">
                                        <h1>Care early<br>Coronavirus</h1>
                                        <a class="read_more" href="javascript:void(0)" >Read More</a>
                                        <a class="read_more" href="about.html" >About Us</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- third slide -->
                    <div class="carousel-item">
                        <div class="carousel-caption cuplle">
                            <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="photog">
                                        <h1>Care early<br>Coronavirus</h1>
                                        <a class="read_more" href="javascript:void(0)" >Read More</a>
                                        <a class="read_more" href="about.html" >About Us</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- controls -->
                <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
                </a>
                </div>
            </div>
        </div>
        <!-- end banner -->
        <!-- about -->
        <div class="about">
            <div class="container_width">
                <div class="row d_flex">
                    <div class="col-md-7">
                    <div class="titlepage text_align_left">
                        <h2>About {{ env('APP_NAME') }} </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda explicabo similique adipisci fuga ea voluptate debitis sit tempore possimus! Repudiandae nihil at voluptates. Hic voluptatem maxime ratione saepe libero doloribus.
                        </p>
                        <a class="read_more" href="about.html">About More</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about_img text_align_center">
                        <figure><img src="{{$web_source}}/images/about.png" alt="#"/></figure>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
        <!-- end about -->
        <!-- coronata -->
        <div class="coronata">
            <div class="container">
                <div class="row d_flex grid">
                <div class="col-md-7">
                    <div class="coronata_img text_align_center">
                        <figure><img src="{{$web_source}}/images/corona.png" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-md-5 oder1">
                    <div class="titlepage text_align_left">
                        <h2>What we do at {{ env('APP_NAME') }}</h2>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad voluptatum numquam officia, deserunt excepturi at qui eius est dicta quo dignissimos aliquid cupiditate aliquam aperiam magni soluta eum corrupti quae!
                        </p>
                        <a class="read_more" href="coronata.html">About More</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- end coronata -->

        <!-- cases -->
        <div class="cases">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center ">
                        <h2>Our Services</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi aspernatur, earum sit quibusdam temporibus ullam id, adipisci quidem doloremque provident voluptatum error deleniti vero natus fugiat amet laborum, itaque dolor.</p>
                    </div>
                </div>
                </div>
                <div class="row d_flex">
                <div class=" col-md-4">
                    <div class="latest text_align_center">
                        <figure><img src="{{$web_source}}/images/cases1.png" alt="#"/></figure>
                        <a class="read_more" href="cases.html">Read More</a>
                        <div class="nostrud">
                            <h3>Cases 01</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="latest text_align_center">
                        <figure><img src="{{$web_source}}/images/cases2.png" alt="#"/></figure>
                        <a class="read_more" href="cases.html">Read More</a>
                        <div class="nostrud">
                            <h3>Cases 02</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="latest text_align_center">
                        <figure><img src="{{$web_source}}/images/cases3.png" alt="#"/></figure>
                        <a class="read_more" href="cases.html">Read More</a>
                        <div class="nostrud">
                            <h3>Cases 03</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- end cases -->

        <!-- doctors -->
        <div class="doctors">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center ">
                        <h2>What doctors say..</h2>
                    </div>
                </div>
                </div>
                <div class="row d_flex">
                <div class=" col-md-6">
                        <div id="ho_efcet" class="reader text_align_center">
                            <i><img src="{{$web_source}}/images/doctor1.png" alt="#"/></i>
                            <h3>Dr.Golap den</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
            <div class="loader"><img src="{{$web_source}}/images/loading.gif" alt="#"/></div>
                            <span><img src="{{$web_source}}/images/do.png" alt="#"/></span>
                        </div>
                    </div>
                            <div class=" col-md-6">
                        <div id="ho_efcet" class="reader text_align_center">
                            <i><img src="{{$web_source}}/images/doctor2.png" alt="#"/></i>
                            <h3>Dr.Golap den</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                            <span><img src="{{$web_source}}/images/do.png" alt="#"/></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end cases -->

        <!-- update -->
        <div class="update">
            <div class="cevery_white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Get Every Update.... </h2>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cevery_bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <form id="colof" class="form_subscri">
                            <input class="newsl" placeholder="Your Email" type="text" name="Email">
                            <button class="subsci_btn">Subscribe Now</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- update -->
</div>
@stop