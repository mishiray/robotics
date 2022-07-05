@extends('web.layouts.app2')
@section('title', 'Home')
@section('content')
<div class="main">
    {{-- https://vimeo.com/470554083 --}}
<section class="text-light jarallax p-0 o-hidden" data-jarallax-video="mp4:{{ $web_source }}/assets/videos/banner.mp4" data-speed="1">
    <div class="bg-primary-3 bg-image blend-mode-multiply" style="opacity: 0.4;"></div>
    <div class="container layer-2">
        <div class="row min-vh-60 py-4 align-items-center" data-aos="fade-up">
            <div class="col-md-10 col-xl-10 mb-3 mb-md-0 align-self-end">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-11">
                        <h1 class="display-4">
                            We are AIROL
                        </h1>
                        <blockquote class="blockquote lead p-0 mt-3">
                            <p class="mb-0">
                                &ldquo;We are driven by our love for AI, ML and Robotics. We wish to build up the new generation in such ways to improve their lives and the society&rdquo;
                            </p>
                        </blockquote>
                        <!--                        <a href="/about.html" class="lead hover-arrow">Learn More</a>-->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="divider ">
        <img class="bg-primary-3" src="{{ $web_source }}/assets/img/dividers/divider-3.svg" alt="divider graphic" data-inject-svg />
    </div>
</section>

<section class="bg-primary-3 text-light has-divider">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 mb-3 mb-md-0">
                <h2 class="h1">
                   Our Partners in Artificial Intelligence
                </h2>
            </div>
            <div class="col-md-5">
                <small class="text-uppercase mb-4">In partnership with</small>
                <ul class="d-flex flex-wrap list-unstyled">
                    <li class="mr-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <a href="#!">
                            <img class="icon icon-logo icon-md" src="https://coderina.org/wp-content/uploads/2021/03/Coderina-Logo-JPEG.jpg-2-1-1.jpeg" alt="icon" />
                        </a>
                    </li>
                    <li class="mr-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                        <a href="#!">
                            <img class="icon icon-logo icon-md" src="{{ $web_source }}/assets/logos/unilag.png" alt="icon" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="divider">
        <img class="bg-white" src="{{ $web_source }}/assets/img/dividers/divider-3.svg" alt="divider graphic" data-inject-svg />
    </div>
</section>

<section>
    <div class="container">
        <div class="row mb-4 justify-content-center text-center">
            <div class="col-xl-8 col-lg-9">
                <h2 class="display-4">
                    From Us To You
                </h2>
                <p class="lead">                   
                     The vision for the AI and robotics Lab is to serve as a world class renowned institution that provides an environment for fostering research and development in AI and Robotics. 
                </p>
            </div>
        </div>


        <div class="row justify-content-center mb-5">
            <div class="col-xl-11">
                <ul class="nav justify-content-center" role="tablist">
                    <li class="nav-item mx-1">
                        <a class="nav-link active" href="#saas-tab-1" data-toggle="tab" role="tab"
                            aria-controls="saas-tab-1" aria-selected="true">
                            <div class="icon-round icon-round-sm bg-primary">
                                <img class="icon bg-primary" src="{{ $web_source }}/assets/img/icons/theme/shopping/box-2.svg"
                                    alt="box-2 icon" data-inject-svg />
                            </div>
                            Training
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#saas-tab-2" data-toggle="tab" role="tab" aria-controls="saas-tab-2"
                            aria-selected="false">
                            <div class="icon-round icon-round-sm bg-primary">
                                <img class="icon bg-primary" src="{{ $web_source }}/assets/img/icons/theme/code/loading.svg"
                                    alt="loading icon" data-inject-svg />
                            </div>
                            Research and Development
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#saas-tab-3" data-toggle="tab" role="tab" aria-controls="saas-tab-3"
                            aria-selected="false">
                            <div class="icon-round icon-round-sm bg-primary">
                                <img class="icon bg-primary" src="{{ $web_source }}/assets/img/icons/theme/design/saturation.svg"
                                    alt="saturation icon" data-inject-svg />
                            </div>
                            Challenges and Competition
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-11" data-aos="fade-up">
                <div class="tab-content text-center">
                    <div class="tab-pane fade show active" id="saas-tab-1" role="tabpanel" aria-labelledby="saas-tab-1">


                        <h4>Training</h4>
                        <p class="lead">
                            
                            We train at all levels, from grass root to adult hood. 
                       
                        </p>
                    </div>
                    <div class="tab-pane fade" id="saas-tab-2" role="tabpanel" aria-labelledby="saas-tab-2">

                        <h4>Research and Development</h4>
                        <p class="lead">
                            
                            We focus on solving your problems through research in collaboration with industries and individuals
                        </p>
                    </div>
                    <div class="tab-pane fade" id="saas-tab-3" role="tabpanel" aria-labelledby="saas-tab-3">

                        <h4>Challenges and Competition</h4>

                        <p class="lead">
                            We harnes innovative ideas that can solve problems within our community, through through challenges and competitions
                        </p>

                    </div>
                </div>
            </div>
        </div>


    </div>
</section>


<section class="bg-primary-alt has-divider">
    <div class="divider flip-y">
        <img src="{{ $web_source }}/assets/img/dividers/divider-3.svg" alt="graphical divider" data-inject-svg />
    </div>
    <div class="container">
        <div class="row justify-content-center text-center mb-6">
            <div class="col-xl-10 col-lg-12">
                <h2 class="display-4 mx-xl-6">Sponsors and Acknowledgements</h2>
                
                <div class="row">
                    <div class="col m-2 text-centre">
                            <div class="image">
                                <img src="https://fhf.org.ng/images/logo.png" width="150em" alt="FunmiAyinke Humanitarian Foundtion" srcset="">
                            </div>
                    </div>
                    <div class="col m-2">
                            <div class="image">
                                <img src="{{$web_source}}/images/sponsors/reach.png" width="150em" alt="Reach Robotics" srcset="">
                            </div>
                    </div>
                    <div class="col m-2">
                            <div class="image">
                                <img src="https://nibss-plc.com.ng/img/nibss-logo.png" width="150em" alt="Nibss PLC" srcset="">
                            </div>
                    </div>
                    <div class="col m-2">
                            <div class="image">
                                <img src="https://cwg-plc.com/wp-content/uploads/2021/07/cwglogo-web-min.png" width="150em"  alt="CWG PLC" srcset="">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-danger-alt has-divider">
    <div class="divider flip-y">
        <img src="{{ $web_source }}/assets/img/dividers/divider-3.svg" alt="graphical divider" data-inject-svg />
    </div>
    <div class="container">
        <div class="row justify-content-center text-center mb-6">
            <div class="col-xl-8 col-lg-9">
                <h2 class="display-4 mx-xl-6">Ways to be involved</h2>
                <p class="lead">
                    Join Us On AiRol, together we will reshape the world
                </p>
            </div>
        </div>

        <div class="row text-center mt-6">
            <div class="col-md-4 mb-3 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="px-xl-2">
                    <div class="process-circle bg-primary mb-3 d-inline-flex">1</div>
                    <h4>Sponsorship</h4>
                    <p class="lead">
                        We need sponsorship to develop and run the lab.
                        Your organization will be recognized in all the information disseminated about the Lab in all news media
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="px-xl-2">
                    <div class="process-circle bg-primary-2 mb-3 d-inline-flex">
                        2
                    </div>
                    <h4>AI & Robotics Research Team</h4>
                    <p class="lead">
                        We do R and D, and thus We need volunteers for research and development in this space. 
                        This helps us to solve problems within our community and beyond.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <div class="px-xl-2">
                    <div class="process-circle bg-primary-3 mb-3 d-inline-flex">
                        3
                    </div>
                    <h4>Challenges/Competitions Team</h4>
                    <p class="lead">
                        We harness innovative ideas from students and staff. 
                        Your ideas are welcome in our space
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                <div class="px-xl-2">
                    <div class="process-circle bg-primary-2 mb-3 d-inline-flex">
                        4
                    </div>
                    <h4>Unilag Corporate Social Responsibility (CSR)</h4>
                    <p class="lead">
                        University of Lagos is particular about its environment, thereby we trin the less privelege within pour ommunity in this space yearly.
                        Sponsors are highly needed and  appreciated.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                <div class="px-xl-2">
                    <div class="process-circle bg-primary-3 mb-3 d-inline-flex">
                        5
                    </div>
                    <h4>Grass Root Participation</h4>
                    <p class="lead">
                        We encourage the little ones to develop themselves from their young age in this space
                    </p>
                </div>
            </div>
        </div>

        <div class="row pt-5 justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6">
                <a role="button"
                    href="{{route('contactUs')}}"
                    class="btn btn-lg btn-primary btn-block mb-2" target="_blank">
                    Join Us
                </a>
            </div>
        </div>
    </div>

    </div>
</section>

</div>
@stop