@extends('web.layouts.app2')
@section('title', 'About Us')
@section('content')
<div class="main ">
    
    <section class="bg-dark text-light header-inner p-0 jarallax o-hidden" data-overlay data-jarallax data-speed="0.2">
        <img src="{{ $web_source }}/assets/img/inner-1.jpg" alt="Image" class="jarallax-img opacity-30" />
        <div class="container py-0 layer-2">
          <div class="row my-3">
            <div class="col">
              <nav aria-label="breadcrumb"></nav>
            </div>
          </div>
    
          <div class="row my-4 my-md-6" data-aos="fade-up">
            <div class="col-xl-7 col-lg-8 col-md-9">
              <h1 class="h3">
                AI And Robotics Laboratory dives into creating sustainable impact
                through sharing knowledge, research, AI product development and
                services.
              </h1>
            </div>
          </div>
        </div>
        <div class="decoration-wrapper">
          <div class="decoration bottom right d-none d-md-block" data-jarallax-element="100 100">
            <img class="bg-primary-2" src="{{ $web_source }}/assets/img/decorations/deco-blob-1.svg" alt="deco-blob-1 decoration"
              data-inject-svg />
          </div>
        </div>
        <div class="divider flip-x">
          <img src="{{ $web_source }}/assets/img/dividers/divider-1.svg" alt="graphical divider" data-inject-svg />
        </div>
      </section>
    
      <section class="pb-0">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-9" data-aos="fade-up">
              <h2 class="h1">
                About Us
              </h2>
              <p class="lead">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci a voluptatibus minima veniam natus deleniti officia! Laboriosam obcaecati iusto porro, corrupti, numquam repellendus necessitatibus perferendis vitae ratione enim, nesciunt cumque!
              </p>
              <p class="lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus harum quis tempora cumque id fugiat dolorum nobis ad accusantium fugit porro, repudiandae delectus cupiditate, vel, veritatis doloribus odio sunt iure!
              </p>
              <p class="lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla officiis minus eaque, quasi molestias esse quia harum repellendus reprehenderit commodi voluptatum aut cupiditate ex repellat quos illum laboriosam minima totam.
              </p>
            </div>
          </div>
        </div>
      </section>
    
      <section class="pb-2">
        <div class="container">
          <div class="row mb-4">
            <div class="col">
              <h2>What AIROL offers </h2>
              <p class="lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni voluptatum deleniti, eum voluptatibus laborum at suscipit molestiae, magnam placeat veniam sed natus? Ipsam vero laudantium impedit omnis, possimus delectus ut!
              </p>
            </div>
          </div>
    
          <div class="row justify-content-start">
            <div class="col-6 mb-3 col-lg-3 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <span class="display-4 text-primary d-block" data-countup data-start="4567" data-end="36524" data-duration="3"
                data-grouping="true"></span>
              <span class="h6">AI Experts worldwide</span>
            </div>
            <div class="col-6 mb-3 col-lg-3 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
              <span class="display-4 text-primary d-block" data-countup data-start="1" data-end="50" data-decimal-places="0"
                data-duration="3" data-grouping="true" data-suffix="%"></span>
              <span class="h6">Reside in USA</span>
            </div>
            <div class="col-6 mb-3 col-lg-3 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
              <span class="display-4 text-primary d-block" data-countup data-start="1" data-end="5" data-decimal-places="0"
                data-duration="3" data-grouping="true" data-suffix="%"></span>
              <span class="h6">and less are in Africa</span>
            </div>
          </div>
    
          <div class="row my-3">
            <div class="col-lg-8 col-md-9" data-aos="fade-up">
              <div class="h3">
                Our focus areas include:
                <div class="highlight">
                  <span id="typed_area"></span>
                </div>
              </div>
    
              <div id="typed_list" class="text-muted mb-4">
                  <ul>
                      <li>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque quod reprehenderit expedita obcaecati minus labore ut excepturi placeat quisquam enim porro maxime cumque beatae culpa commodi, eos quis pariatur velit?
                      </li>
                      <li>
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus reiciendis tenetur cupiditate cum ratione unde dolores cumque dicta recusandae esse, incidunt odio velit quia aliquam autem iure, aut officiis molestiae?
                      </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    
      <section class="p-0">
        <div class="container pb-6">
          <div class="row mb-4">
            <div class="col">
              <h2>Served by the experts</h2>
            </div>
          </div>
    
            <div class="row mb-4" data-aos="fade-up">
                <div class="col">
                    <h3>Leading Team</h3>
                </div>
            </div>
            <div class="row mb-3">
                    <div class="col-sm-6 col-lg-4 d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ $web_source }}/assets/img/person.png" alt="John Kamara" class="avatar avatar-xlg mr-3" />
                        <div>
                            <h5 class="mb-0">John Kamara</h5>
                            <span>Chief Inspiration Officer</span><br />
                            <a href="https://www.linkedin.com/in/johnkamara/" target="_blank">
                            <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/social/linkedin.svg" alt="decoration" data-inject-svg />
                            @johnkamara
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ $web_source }}/assets/img/person.png" alt="Claire Matuka" class="avatar avatar-xlg mr-3" />
                        <div>
                            <h5 class="mb-0">Claire Matuka</h5>
                            <span>Co-Founder and AI Head</span><br />
                            <a href="https://www.linkedin.com/in/claire-matuka-10b308152" target="_blank">
                            <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/social/linkedin.svg" alt="decoration" data-inject-svg />
                            @claire-matuka
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ $web_source }}/assets/img/person.png" alt="Carol Muchemi" class="avatar avatar-xlg mr-3" />
                        <div>
                            <h5 class="mb-0">Carol Muchemi</h5>
                            <span>Co-Founder and Head of Innovation</span><br />
                            <a href="https://www.linkedin.com/in/carol-muchemi-81bbb6ba/" target="_blank">
                            <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/social/linkedin.svg" alt="decoration" data-inject-svg />
                            @carol-muchemi
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ $web_source }}/assets/img/person.png" alt="Natasha Ochiel" class="avatar avatar-xlg mr-3" />
                        <div>
                            <h5 class="mb-0">Natasha Ochiel</h5>
                            <span>Business Lead and Program Manager</span><br />
                            <a href="https://www.linkedin.com/in/natasha-ochiel-53686912b/" target="_blank">
                            <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/social/linkedin.svg" alt="decoration" data-inject-svg />
                            @natasha-ochiel
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ $web_source }}/assets/img/person.png" alt="Jefferson Mkungusi" class="avatar avatar-xlg mr-3" />
                        <div>
                            <h5 class="mb-0">Jefferson Mkungusi</h5>
                            <span>Technology and Software Lead</span><br />
                            <a href="https://www.linkedin.com/in/jeff-m-0b64bb124/" target="_blank">
                            <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/social/linkedin.svg" alt="decoration" data-inject-svg />
                            @jefferson-mkungusi
                            </a>
                        </div>
                    </div>
            </div>        <div class="row mb-4" data-aos="fade-up">
                <div class="col">
                    <h3>Board Advisory</h3>
                </div>
            </div>
            <div class="row mb-3">
                    <div class="col-sm-6 col-lg-4 d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ $web_source }}/assets/img/person.png" alt="Bendon Murgor" class="avatar avatar-xlg mr-3" />
                        <div>
                            <h5 class="mb-0">Bendon Murgor</h5>
                            <span>Chief Technology Officer Ada Lab Africa</span><br />
                            <a href="https://www.linkedin.com/in/bendonmurgor" target="_blank">
                            <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/social/linkedin.svg" alt="decoration" data-inject-svg />
                            @bendonmurgor
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ $web_source }}/assets/img/person.png" alt="Jacques Ludik" class="avatar avatar-xlg mr-3" />
                        <div>
                            <h5 class="mb-0">Jacques Ludik</h5>
                            <span>Founder &amp; CEO Machine Intelligence Institute of Africa</span><br />
                            <a href="https://www.linkedin.com/in/jacquesludik/" target="_blank">
                            <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/social/linkedin.svg" alt="decoration" data-inject-svg />
                            @jacquesludik
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ $web_source }}/assets/img/person.png" alt="Philip Thigo" class="avatar avatar-xlg mr-3" />
                        <div>
                            <h5 class="mb-0">Philip Thigo</h5>
                            <span>Director for Africa Thunderbird School of Global Management</span><br />
                            <a href="https://www.linkedin.com/in/philip-thigo/" target="_blank">
                            <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/social/linkedin.svg" alt="decoration" data-inject-svg />
                            @philip-thigo
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ $web_source }}/assets/img/person.png" alt="Richard Foster-Fletcher" class="avatar avatar-xlg mr-3" />
                        <div>
                            <h5 class="mb-0">Richard Foster-Fletcher</h5>
                            <span>Founder NeuralPath.io</span><br />
                            <a href="https://www.linkedin.com/in/richardfosterfletcher/" target="_blank">
                            <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/social/linkedin.svg" alt="decoration" data-inject-svg />
                            @richardfosterfletcher
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ $web_source }}/assets/img/person.png" alt="Harmen Brenninkmeijer" class="avatar avatar-xlg mr-3" />
                        <div>
                            <h5 class="mb-0">Harmen Brenninkmeijer</h5>
                            <span>co-CEO Tento Health</span><br />
                            <a href="https://www.linkedin.com/in/hbmeijer" target="_blank">
                            <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/social/linkedin.svg" alt="decoration" data-inject-svg />
                            @hbmeijer
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ $web_source }}/assets/img/person.png" alt="Dr Alex Cahana" class="avatar avatar-xlg mr-3" />
                        <div>
                            <h5 class="mb-0">Dr Alex Cahana</h5>
                            <span>Global Strategic Partner Ada Lab Africa</span><br />
                            <a href="https://www.linkedin.com/in/dr-alex-cahana-health-blockchanger" target="_blank">
                            <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/social/linkedin.svg" alt="decoration" data-inject-svg />
                            @dr-alex-cahana
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ $web_source }}/assets/img/person.png" alt="Hartnell Ndungi" class="avatar avatar-xlg mr-3" />
                        <div>
                            <h5 class="mb-0">Hartnell Ndungi</h5>
                            <span>Chief Data Officer, Absa Bank Kenya PLC</span><br />
                            <a href="https://www.linkedin.com/in/hartnellndungi/" target="_blank">
                            <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/social/linkedin.svg" alt="decoration" data-inject-svg />
                            hartnellndungi
                            </a>
                        </div>
                    </div>
            </div>
          <div class="row">
            <div class="col">
              <span>Interested in joining our team? Forward an email to
                <a class="text-primary-2" href="mailto:{{env('MAIL_CONTACT')}}">{{env('MAIL_CONTACT')}}</a>
              </span>
            </div>
          </div>
        </div>
      </section>
       
</div>
@stop