<!-- new airol -->
<div class="navbar-container">
   <nav class="navbar navbar-expand-lg justify-content-between navbar-dark" data-overlay data-sticky="top">
       <div class="container">
           <div class="col-auto flex-fill px-0 d-flex justify-content-between">
               <a class="navbar-brand mr-0 fade-page" href="index.html">
                   <img src="{{ $web_source }}/assets/airol/logo_white.png" alt="AIROL" style="height: 60px;" >
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                   aria-expanded="false" aria-label="Toggle navigation">
                   <img class="icon navbar-toggler-open" src="{{ $web_source }}/assets/img/icons/interface/menu.svg"
                       alt="menu interface icon" data-inject-svg />
                   <img class="icon navbar-toggler-close" src="{{ $web_source }}/assets/img/icons/interface/cross.svg"
                       alt="cross interface icon" data-inject-svg />
               </button>
           </div>
           <div class="collapse navbar-collapse col px-0 px-lg-2 flex-fill mx-auto">
               <div class="py-2 py-lg-0">
                   <ul class="navbar-nav">
                       <li class="nav-item 
                       @if (in_array(Request::path(), array('home','','/')))
                        active
                       @endif 
                       ">
                           <a href="{{route('home')}}" class="nav-link" aria-expanded="false" aria-haspopup="false">Home</a>
                       </li>
                       <li class="nav-item
                       @if (in_array(Request::path(), array('aboutus')))
                       active
                      @endif
                       ">
                           <a href="{{route('aboutUs')}}" class="nav-link" aria-expanded="false" aria-haspopup="false">About
                               us</a>
                       </li>
                       <li class="nav-item 
                       @if (in_array(Request::path(), array('blogs','events')))
                       active
                      @endif
                       dropdown">
                           <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                               Resources
                               <img class="icon bg-white" style="transform: rotateZ(-90deg); margin: 0;" src="{{ $web_source }}/assets/img/icons/interface/arrow-caret.svg" alt="arrow-caret interface icon" data-inject-svg />
                           </a>
                           <div class="dropdown-menu">
                               <a class="dropdown-item" href="{{route('our_blog')}}">News & blog</a>
                               <a class="dropdown-item" href="{{route('our_gallery')}}">Gallery</a>
                               <a class="dropdown-item" href="{{route('events')}}">Events</a>
                           </div>
                       </li>
                       <li class="nav-item">
                           <a href="research" class="nav-link" aria-expanded="false"
                               aria-haspopup="false">Research</a>
                       </li>
                       <li class="nav-item
                       @if (in_array(Request::path(), array('contact')))
                       active
                      @endif
                       ">
                           <a href="{{route('contactUs')}}" class="nav-link" aria-expanded="false"
                               aria-haspopup="false">Contact</a>
                       </li>
                       <li class="nav-item
                       @if (in_array(Request::path(), array('login')))
                       active
                      @endif
                       ">
                           <a href="{{route('login')}}" class="nav-link" aria-expanded="false"
                               aria-haspopup="false">Login</a>
                       </li>
                   </ul>
               </div>
           </div>
           <div class="collapse navbar-collapse justify-content-end col-auto flex-fill px-0">
               <!--<a
                       data-toggle="modal" data-target="#sign-in-modal"
                       href="#!"
                       class="btn btn-primary ml-lg-3">Apply</a>-->
               <a
                       href="register.html"
                       class="btn btn-primary ml-lg-3">Apply</a>
           </div>
       </div>
   </nav>
</div>

<!--
<header class="header-area">
    <div class="left">
       <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
    </div>
    <div class="right">
       <a href="{{route('login')}}"><i class="fa fa-user" aria-hidden="true"></i></a>
    </div>
    <div class="container">
       <div class="row d_flex">
          <div class="col-sm-3 logo_sm">
             <div class="logo">
                <a href="{{route('home')}}"></a>
             </div>
          </div>
          <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
             <div class="navbar-area">
                <nav class="site-navbar">
                   <ul>
                      <li><a class="active" href="{{route('home')}}">Home</a></li>
                      <li><a href="{{route('aboutUs')}}">About</a></li>
                      <li><a href="action.html">Services</a></li>
                      <li><a href="{{route('home')}}" class="logo_midle">Robotics</a></li>
                      <li><a href="{{route('our_blog')}}">Blog</a></li>
                      <li><a href="doctores.html">Events</a></li>
                      <li><a href="{{route('contactUs')}}">Contact </a></li>
                   </ul>
                   <button class="nav-toggler">
                   <span></span>
                   </button>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </header>