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
                    <img class="bg-primary-2" src="{{ $web_source }}/assets/img/decorations/deco-blob-1.svg"
                        alt="deco-blob-1 decoration" data-inject-svg />
                </div>
            </div>
            <div class="divider">
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
                            AiRoL is made up of an academic team from the faculties of Science and Engineering, University
                            of Lagos (UNILAG).
                            The team is passionate about the future of robotics, artificial intelligence and how they can be
                            used to enhance the
                            socio-economic development of Nigeria. The team is young and aspires to expand and grow into
                            what will strengthen our communities, nation, and the world at large
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-2">
          <div class="container">
              <div class="row mb-4">
                  <div class="col">
                      <h2>Our Past Achievements</h2>
                      <p class="lead">
                          The Lab started in 2018 in a small office in the department of computer sciences.
                          We started with about five students and a lecturer. We later expanded into 10 students
                          and a few more lecturers that same year. The Vice-Chancellor Prof. Ogundipe graciously
                          gave us a workspace at the central research lab building (CRL) UNILAG. The following were
                          achieved 2018.
                      </p>
                  </div>
              </div>

              <div class="row my-3">
                  <div class="col-lg-8 col-md-9" data-aos="fade-up">
                      <div id="typed_list" class="text-muted mb-2">
                          <ul>
                              <li>
                                  International Competition (29th June – 5th July 2018) - Ethiopia - 4th place
                              </li>
                              <li>
                                  Robotics Workshop (20th October 2018) - UNILAG
                              </li>
                              <li>
                                  Robotics Exhibition, Nigeria Summit Abuja (May 2018 and November 2018) - Eko Hotel Lagos
                                  and Canada
                              </li>
                              <li>
                                  UNILAG Robotics Competitions (12th December 2018)
                              </li>
                              <li>
                                  UNILAG CSR on empowering the grassroots (October 2018 - December 2018)
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>

      </section>

        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <section class="pb-2">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col">
                            <h2>Our Vision</h2>
                        </div>
                    </div>
      
                    <p class="lead">
                      The vision for the AI and robotics Lab is to serve as a world class renowned institution that provides an environment for fostering research and development in AI and Robotics. 
                    </p>
                </div>
             </section>
            </div>
            <div class="col-md-6 col-sm-12">
              <section class="pb-2">
                  <div class="container">
                      <div class="row mb-4">
                          <div class="col">
                              <h2>Our Mission</h2>
                          </div>
                      </div>
      
                      <p class="lead">
                        <ul>
                            <li>
                                To strengthen Artificial Intelligence(AI) & Robotics learning and application activities,
                                first in UNILAG and then other universities in the country
                            </li>
                            To set the pace and standard for quality research in AI and Robotics within the next 3 years.

                            </li>
                            <li>
                                To ensure the availability of state-of-the-art facilities to researchers thus, empowering
                                them with the tools needed to produce quality research.
                            </li>
                            <li>
                                To imbibe modern practices and an inclusive workspace culture that brings out the best in
                                researchers from all over the world.

                            </li>
                            <li>

                                To drive learning outcomes among primary, secondary & tertiary institutions in Nigeria
                                through competitions and collaborations
                            </li>
                        </ul>
                        </p>
                  </div>
              </section>
            </div>
          </div>
        </div>
      
      
        <section class="pt-2">
            <div class="container pb-6">

                <div class="row mb-4" data-aos="fade-up">
                    <div class="col">
                        <h3>Leading Team</h3>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6 col-lg-4 d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ $web_source }}/images/team/chika.jpeg" alt="Chika Banjo"
                            class="avatar avatar-xlg mr-3" />
                        <div>
                            <h5 class="mb-0">Dr Chika Yinka-Banjo</h5>
                            <span>Team Lead</span><br />
                            <a href="https://www.linkedin.com/in/chika-yinka-banjo/" target="_blank">
                                <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/social/linkedin.svg"
                                    alt="decoration" data-inject-svg />
                                @chika-yinka-banjo
                            </a>
                        </div>
                    </div>
                    {{-- <div class="col-sm-6 col-lg-4 d-flex align-items-center mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ $web_source }}/assets/img/person.png" alt="Claire Matuka"
                            class="avatar avatar-xlg mr-3" />
                        <div>
                            <h5 class="mb-0">Claire Matuka</h5>
                            <span>Co-Founder and AI Head</span><br />
                            <a href="https://www.linkedin.com/in/claire-matuka-10b308152" target="_blank">
                                <img class="icon" src="{{ $web_source }}/assets/img/icons/theme/social/linkedin.svg"
                                    alt="decoration" data-inject-svg />
                                @claire-matuka
                            </a>
                        </div>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col">
                        <span>Interested in joining our team? Forward an email to
                            <a class="text-primary-2"
                                href="mailto:{{ env('MAIL_CONTACT') }}">{{ env('MAIL_CONTACT') }}</a>
                        </span>
                    </div>
                </div>
            </div>
        </section>

    </div>
@stop
