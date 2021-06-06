@extends('web.layouts.app')
@section('title', 'About Us')
@section('content')
<div class="main ">
    <!-- mission and vision -->
    <div class="about">
        <div class="row d-flex">
            <div class="col-md-6">
                <div class="titlepage text_align_left">
                    <h2>Mission</h2>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error, debitis dolorum! Repudiandae, voluptates eum. Velit soluta quisquam earum odit tenetur exercitationem voluptatibus reiciendis quod? Iste impedit alias corporis reiciendis dolorum.</p>
            </div>
            <div class="col-md-6">
                <div class="titlepage text_align_left">
                    <h2>Vision</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea reprehenderit voluptatibus natus quaerat facilis possimus aliquid earum magni harum illum distinctio, quas voluptatum, voluptatem vero, incidunt alias hic nesciunt laboriosam!</p>
            </div>
        </div>
    </div>
    <!-- end mission and vision -->
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
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At voluptas soluta odio, quod alias vitae voluptates tenetur cumque earum reprehenderit ad quia explicabo hic natus eos doloremque molestiae corporis. Nulla.</p>
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
            
        <div class="doctors">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center ">
                        <h2>Our Core Values</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem similique officiis ex, magnam amet exercitationem, earum ratione nulla assumenda tempora quasi mollitia vitae. Inventore maxime at aperiam! Ipsa, quos molestias!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, ipsam! Iste vero dolore architecto voluptate sequi, quod at qui harum quis officiis assumenda eius molestiae vel. Architecto ullam quo ipsum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur non magnam sed in illo. Eaque quas ex, qui, nostrum est officiis voluptatum tenetur reprehenderit dolorum, ad ullam aperiam asperiores neque!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores omnis aliquid eveniet magni debitis accusantium quo nobis. Nisi fugit obcaecati quibusdam officiis facere, dicta possimus eligendi excepturi nam quam tempore?

                </p>
                <hr>
                <ol class="list-style">
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid laudantium veniam voluptate sequi eaque eum ea dignissimos, corporis veritatis blanditiis adipisci facilis. Hic quia eligendi quos, iure magnam culpa optio.</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis, labore. Et nisi non voluptas quisquam laudantium iusto dolore quo quam provident aliquid incidunt debitis ex minima, reprehenderit tempora. Doloribus, laborum.</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt quam eos numquam voluptatem quis dolores molestiae illo magnam dolorem deleniti ducimus animi delectus, impedit dolor explicabo necessitatibus in perspiciatis voluptatibus!</li>
                </ol>
            </div>
        </div>
        <!-- drives us -->

        <!-- end drives us -->
</div>
@stop