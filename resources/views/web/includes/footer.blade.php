<!-- new airol -->

<footer class="pb-4 bg-primary-3 text-light" id="footer">
   <div class="container">
       <div class="row mb-5">
           <div class="col-6 col-lg-3 col-xl-2">
               <h5>Navigate</h5>
               <ul class="nav flex-column">
                   <li class="nav-item">
                       <a href="{{route('home')}}" class="nav-link">Home</a>
                   </li>
                   <li class="nav-item">
                       <a href="{{route('aboutUs')}}" class="nav-link">About</a>
                   </li>
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Resources</a>
                       <div class="dropdown-menu">
                           <a class="dropdown-item" href="{{route('home')}}">News & blog</a>
                           <a class="dropdown-item" href="{{route('home')}}">Gallery</a>
                           <a class="dropdown-item" href="{{route('home')}}">Events</a>
                       </div>
                   </li>
                   <li class="nav-item">
                       <a href="{{route('home')}}" class="nav-link">Research</a>
                   </li>
                   <li class="nav-item">
                       <a href="{{route('home')}}" class="nav-link">Training</a>
                   </li>
                   <li class="nav-item">
                       <a href="{{route('contactUs')}}" class="nav-link">Contact</a>
                   </li>
               </ul>
           </div>

           <div class="col-6 col-lg">
               <h5>Contact</h5>
               <ul class="list-unstyled">
                   <li class="mb-3 d-flex">
                       <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/map/marker-1.svg" alt="marker-1 icon"
                           data-inject-svg />
                       <div class="ml-3">
                           <span>No 13, Address road<br />
                               Address,<br />
                               1st floor</span>
                       </div>
                   </li>
                   <li class="mb-3 d-flex">
                       <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/communication/call-1.svg" alt="call-1 icon"
                           data-inject-svg />
                       <div class="ml-3">
                           <span>Phone here</span>
                           <span class="d-block text-muted text-small">Mon - Fri 9am - 5pm</span>
                       </div>
                   </li>
                   <li class="mb-3 d-flex">
                       <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/communication/mail.svg" alt="mail icon"
                           data-inject-svg />
                       <div class="ml-3">
                           <a href="mailto:contact@aiceafrica.com">contact@airol.com</a>
                       </div>
                   </li>
               </ul>
           </div>
           <div class="col-lg-5 col-xl-4 mt-3 mt-lg-0">
               <h5>Subscribe</h5>
               <p>
                   The latest AIROL news, articles, and resources, sent straight to
                   your inbox every month.
               </p>
               <form action="" method="post" data-form-email novalidate>
                   <div class="form-row">
                       <div class="col-12">
                           <input type="email" class="form-control mb-2" placeholder="Email Address" name="email"
                               required />
                       </div>
                       <div class="col-12">
                           <div class="d-none alert alert-success" role="alert" data-success-message>
                               Thanks, a member of our team will be in touch shortly.
                           </div>
                           <div class="d-none alert alert-danger" role="alert" data-error-message>
                               Please fill all fields correctly.
                           </div>
                           <div data-recaptcha data-sitekey="6LeF-HkaAAAAAGDwNjB6VkvzNSostZedIDNF4NVP"
                               data-size="invisible" data-badge="bottomleft"></div>
                           <button type="submit" class="btn btn-primary btn-loading btn-block"
                               data-loading-text="Sending">
                               <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/code/loading.svg" alt="loading icon"
                                   data-inject-svg />
                               <span>Subscribe</span>
                           </button>
                       </div>
                   </div>
               </form>
               <small class="text-muted form-text">We'll never share any of your details.
               </small>
           </div>
       </div>
       <div class="row justify-content-center mb-2">
           <div class="col-auto">
               <ul class="nav">
                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <img class="icon undefined" src="{{ $web_source }}/assets/img/icons/social/instagram.svg"
                               alt="instagram social icon" data-inject-svg />
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <img class="icon undefined" src="{{ $web_source }}/assets/img/icons/social/twitter.svg"
                               alt="twitter social icon" data-inject-svg />
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <img class="icon undefined" src="{{ $web_source }}/assets/img/icons/social/youtube.svg"
                               alt="youtube social icon" data-inject-svg />
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <img class="icon undefined" src="{{ $web_source }}/assets/img/icons/social/facebook.svg"
                               alt="facebook social icon" data-inject-svg />
                       </a>
                   </li>
               </ul>
           </div>
       </div>
       <div class="row justify-content-center">
           <div class="col col-md-auto text-center">
               <small class="text-muted">&copy;
                   <script>
                       document.write(new Date().getFullYear());
                   </script>
                   AIROL. 
               </small>
           </div>
       </div>
   </div>
</footer>

<!--
<footer>
    <div class="footer">
       <div class="container">
          <div class="row">
                   <div class="col-lg-2 col-md-6 col-sm-6">
                      <div class="hedingh3 text_align_left">
                         <h3>Resources</h3>
                         <ul class="menu_footer">
                            <li><a href="{{route('home')}}">Home</a><li>
                            <li><a href="{{route('aboutUs')}}">What we do</a><li>
                            <li> <a href="{{route('contactUs')}}">Contact Us</a><li>
                            <li> <a href="javascript:void(0)">Services</a><li>
                            <li><a href="javascript:void(0)">Blog</a><li>
                         </ul>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="hedingh3 text_align_left">
                        <h3>About</h3>
                         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis labore esse quia fugiat? Magnam molestias quaerat esse! Alias, dolor et. Mollitia dolorem eum consequatur cumque dolore error ipsum harum? Repudiandae!</p>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="hedingh3  text_align_left">
                         <h3>Contact  Us</h3>
                           <ul class="top_infomation">
                   <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                      Location here 
                   </li>
                   <li><i class="fa fa-phone" aria-hidden="true"></i>
                      Call : Phone here
                   </li>
                   <li><i class="fa fa-envelope" aria-hidden="true"></i>
                      <a href="Javascript:void(0)">Email : example@mail.com</a>
                   </li>
                </ul>
                </div>
             </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="hedingh3 text_align_left">
                        <h3>countrys</h3>
                        <div class="map">
                           <img src="{{$web_source}}/images/map.png" alt="#"/>
                         </div>
                    </div>
                </div>
          </div>
       </div>
       <div class="copyright">
          <div class="container">
             <div class="row">
                <div class="col-md-8 offset-md-2">
                   <p>© 2021 All Rights Reserved. Robotics Lab</a></p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </footer>