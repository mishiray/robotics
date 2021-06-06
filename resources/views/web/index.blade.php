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
                                        <h1>Robots<br>Wants to Learn</h1>
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
                                        <h1>Robots<br>Wants to Learn</h1>
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
                        <figure><img src="{{$web_source}}/images/about2.png" alt="#"/></figure>
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
                        <figure><img src="{{$web_source}}/images/robotlab.png" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-md-5 oder1">
                    <div class="titlepage text_align_left">
                        <h2>What we do at {{ env('APP_NAME') }}</h2>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad voluptatum numquam officia, deserunt excepturi at qui eius est dicta quo dignissimos aliquid cupiditate aliquam aperiam magni soluta eum corrupti quae!
                        </p>
                        <a class="read_more" href="#">About More</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- end about us -->
        
        <!-- tools we use -->
      <div class="protect">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage text_align_center">
                    <h2>Tools we Use</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut cum illo sapiente quia! Numquam, dignissimos neque nam fuga, aspernatur qui sunt corrupti ullam veniam accusamus fugiat ut explicabo commodi facere.</p>
                 </div>
              </div>
           </div>
        </div>
          <div class="">
                <div class="container">
                    <div class="row">
                            <!--  Demos -->
                            <div class="row d_flex">
                                <div class="item col-md-4">
                                <div class="protect_box text_align_center">
                                    <div class="desktop">
                                        <i><img src="{{$web_source}}/images/robotics_icon_small.png" alt="#"/></i>
                                    <h3>Tool 1</h3>
                                    <span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos itaque deserunt tenetur reiciendis? Cumque quae libero laudantium delectus quibusdam. Itaque eveniet quis dolorum molestias commodi nemo corporis optio qui. Provident?</span>
                                    </div>
                                </div>
                                </div>
                                <div class="item col-md-4">
                                    <div class="protect_box text_align_center">
                                    <div class="desktop">
                                        <i><img src="{{$web_source}}/images/robotics_icon_small.png" alt="#"/></i>
                                    <h3>Tool 2</h3>
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita magni minus minima inventore non nisi itaque quaerat repellendus? In ipsum expedita possimus laboriosam exercitationem doloremque ipsa porro perspiciatis vero animi.</span>
                                    </div>
                                </div>
                                </div>
                                <div class="item col-md-4">
                                    <div class="protect_box text_align_center">
                                    <div class="desktop">
                                        <i><img src="{{$web_source}}/images/robotics_icon_small.png" alt="#"/></i>
                                    <h3>Tool 3</h3>
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, molestiae omnis. Eveniet laborum cupiditate expedita, provident recusandae tenetur perspiciatis, explicabo sint iusto nemo ipsa dolorem enim nobis molestias atque officiis.</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
     </div>
     <!-- end protect -->
        <!-- cases -->
        <div class="cases">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center ">
                        <h2>Our Recent Projects</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi aspernatur, earum sit quibusdam temporibus ullam id, adipisci quidem doloremque provident voluptatum error deleniti vero natus fugiat amet laborum, itaque dolor.</p>
                    </div>
                </div>
                </div>
                <div class="row d_flex">
                <div class=" col-md-4">
                <!--
                    template for coming from database 
                    <div class=" col-md-4">
                        <div class="latest text_align_center">
                            <figure><img src="{{$web_source}}/images/cases1.png" alt="#"/></figure>
                            <a class="read_more" href="#">Read More</a>
                            <div class="nostrud">
                                <h3>Project Name</h3>
                                <p>Description</p>
                            </div>
                        </div>
                    </div>
                -->
                    <div class="latest text_align_center">
                        <figure><img src="{{$web_source}}/images/cases1.png" alt="#"/></figure>
                        <a class="read_more" href="cases.html">Read More</a>
                        <div class="nostrud">
                            <h3>Project 01</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="latest text_align_center">
                        <figure><img src="{{$web_source}}/images/cases2.png" alt="#"/></figure>
                        <a class="read_more" href="cases.html">Read More</a>
                        <div class="nostrud">
                            <h3>Project 02</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="latest text_align_center">
                        <figure><img src="{{$web_source}}/images/cases3.png" alt="#"/></figure>
                        <a class="read_more" href="cases.html">Read More</a>
                        <div class="nostrud">
                            <h3>Project 03</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- end cases -->

        <!-- stories -->
        <div class="doctors">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center ">
                        <h2>Our Stories</h2>
                    </div>
                </div>
                </div>
                <div class="row d_flex">
                <div class=" col-md-6">
                        <div id="ho_efcet" class="reader text_align_center">
                            <i><img src="{{$web_source}}/images/robotics_icon_small.png" alt="#"/></i>
                            <h3>Dr.Golap den</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, blanditiis ratione! Provident, labore non dicta veniam aperiam cum consequatur nisi natus nihil? Assumenda repudiandae nostrum recusandae aspernatur id. Fugit, optio.</p>
                        <span><img src="{{$web_source}}/images/do.png" alt="#"/></span>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div id="ho_efcet" class="reader text_align_center">
                            <i><img src="{{$web_source}}/images/robotics_icon_small.png" alt="#"/></i>
                            <h3>Dr.Golap den</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam dicta nesciunt incidunt debitis cumque consectetur, est magni commodi aliquid ab hic quibusdam modi unde obcaecati quaerat earum. Repudiandae, recusandae beatae.</p>
                            <span><img src="{{$web_source}}/images/do.png" alt="#"/></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end stories -->
            
        <!-- our partners -->
        <div class="doctors">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage text_align_center ">
                            <h2>Our Partners</h2>
                        </div>
                    </div>
                </div>
                <div class="row d_flex">
                    <div class=" col-md-12 text_align_center">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                               <div class="protect_box text_align_center">
                                 <div class="desktop">
                                    <i><img src="{{$web_source}}/images/pro1.png" alt="#"/></i>
                                    <h3> Wear Mask</h3>
                                 </div> 
                            </div>
                        </div>
                            <div class="item">
                                 <div class="protect_box text_align_center">
                                 <div class="desktop">
                                    <i><img src="{{$web_source}}/images/pro2.png" alt="#"/></i>
                                  <h3> Wash Your Hands</h3>
                               </div>
                            </div>
                        </div>
                            <div class="item">
                                <div class="protect_box text_align_center">
                                 <div class="desktop">
                                    <i><img src="{{$web_source}}/images/pro3.png" alt="#"/></i>
                                  <h3> Stay at Home</h3>
                               </div>
                            </div>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end our partners -->

        <!-- update -->
        <div class="update">
            <div class="cevery_white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="titlepage">
                            
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