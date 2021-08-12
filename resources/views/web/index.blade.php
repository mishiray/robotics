@extends('web.layouts.app2')
@section('title', 'Home')
@section('content')
<div class="main">
        
<section class="text-light jarallax p-0 o-hidden" data-jarallax-video="https://vimeo.com/470554083" data-speed="1">
    <div class="bg-primary-3 bg-image blend-mode-multiply" style="opacity: 0.4;"></div>
    <div class="container layer-2">
        <div class="row min-vh-90 py-6 align-items-center" data-aos="fade-up">
            <div class="col-md-10 col-xl-10 mb-3 mb-md-0 align-self-end">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-11">
                        <h3 class="display-4">
                            We are AIROL
                        </h3>
                        <blockquote class="blockquote lead p-0 mt-3">
                            <p class="mb-0">
                                &ldquo;We are driven by our love for AI and ML. We wish to build up the new generation in such ways to improve their lives and the society&rdquo;
                            </p>
                            <footer class="blockquote-footer p-0 mt-2 text-white-50">John Kamara</footer>
                        </blockquote>
                        <!--                        <a href="/about.html" class="lead hover-arrow">Learn More</a>-->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="divider flip-x">
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
                            <img class="icon icon-logo icon-md" src="{{ $web_source }}/assets/logos/huawei-white.png" alt="icon" />
                        </a>
                    </li>
                    <li class="mr-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                        <a href="#!">
                            <img class="icon icon-logo icon-md" src="{{ $web_source }}/assets/logos/unilag.png" alt="icon" />
                        </a>
                    </li>
                    <li class="mr-4 mb-5" data-aos="fade-up" data-aos-delay="300">
                        <a href="#!">
                            <img class="icon icon-logo icon-md" src="{{ $web_source }}/assets/logos/microsoft.png" alt="icon" />
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
                <h2 class="display-4">What we can do for you and your business</h2>
                <p class="lead">
                    At AI Centre of Excellence, we are passionate about creating value and sustainable solutions through
                    implementation, using three modules:
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
                            Knowledge Sharing
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#saas-tab-2" data-toggle="tab" role="tab" aria-controls="saas-tab-2"
                            aria-selected="false">
                            <div class="icon-round icon-round-sm bg-primary">
                                <img class="icon bg-primary" src="{{ $web_source }}/assets/img/icons/theme/shopping/chart-pie.svg"
                                    alt="chart-pie icon" data-inject-svg />
                            </div>
                            AI Services
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#saas-tab-3" data-toggle="tab" role="tab" aria-controls="saas-tab-3"
                            aria-selected="false">
                            <div class="icon-round icon-round-sm bg-primary">
                                <img class="icon bg-primary" src="{{ $web_source }}/assets/img/icons/theme/design/saturation.svg"
                                    alt="saturation icon" data-inject-svg />
                            </div>
                            Training
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-11" data-aos="fade-up">
                <div class="tab-content text-center">
                    <div class="tab-pane fade show active" id="saas-tab-1" role="tabpanel" aria-labelledby="saas-tab-1">


                        <h4>Knowledge Sharing Centre</h4>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta non voluptate rem cum! Eligendi aspernatur soluta ab ea esse iste delectus quo laborum quibusdam alias cupiditate, mollitia hic consequuntur dolor?
                        </p>
                        <p class="lead">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere harum minus officia quia laborum fugit vitae earum tenetur numquam, suscipit totam hic perferendis. Doloremque in reiciendis fugit dicta tempora. Molestiae?
                        </p>

                    </div>
                    <div class="tab-pane fade" id="saas-tab-2" role="tabpanel" aria-labelledby="saas-tab-2">

                        <h4>AI Services</h4>
                        <blockquote class="blockquote lead p-0 mt-3">
                            <p class="mb-0 lead">
                                &ldquo;Data is the new oil&rdquo;
                            </p>
                            <footer class="blockquote-footer p-0 mt-2">Business Review</footer>
                        </blockquote>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi temporibus eum doloremque error minus hic pariatur, tempora numquam vero, expedita reiciendis sapiente a adipisci illo distinctio natus, molestiae possimus blanditiis!
                        </p>
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut autem tempora cupiditate eaque ut, facere molestias accusantium nostrum ipsa a aspernatur doloremque, perferendis non recusandae libero voluptatum, in voluptate placeat!
                        </p>

                    </div>
                    <div class="tab-pane fade" id="saas-tab-3" role="tabpanel" aria-labelledby="saas-tab-3">

                        <h4>Research and Development (R&D)</h4>
                        <p class="lead">
                           Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias iste repellendus magni accusamus, vero vitae corrupti veritatis, tempora, vel at nesciunt dicta in cum qui officia ipsa atque ratione maiores!
                        <p class="lead">
                           Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus corrupti iusto quibusdam harum? Blanditiis, debitis ullam possimus iusto facilis temporibus necessitatibus harum. Numquam suscipit dolor cupiditate quam deserunt nulla necessitatibus.
                        </p>

                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<section class="d-none">
    <div class="container pt-5">
        <div class="row mb-4">
            <div class="col">
                <h2 class="h1">AI Use Cases</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6">

                <img class="icon icon-md bg-primary-3" src="{{ $web_source }}/assets/img/icons/theme/shopping/chart-line-2.svg" alt="apple-watch icon" data-inject-svg />
                <div class="mt-2">
                    <h5>Finance</h5>
                </div>
                <p>
                    The finance industry interacts with massive amounts of data on a daily basis. This data is however not all structured and hardly used as effectively as it can. The large amount of data is     underused, or there is not enough tools put in place to maximise the same.
                </p>
                <h6>How AI can leverage on the amount of data collected:</h6>

                <dl class="">
                    <dt class="">New account opening and approvals:</dt>
                    <dd class="">
                        <p>
                            Using a well developed AI tool, it is possible to accurately and quickly assess the risk profile of each new client with the help of credible official data.
                        </p>
                    </dd>

                    <dt class="">Sorting through large amounts of unstructured data:</dt>
                    <dd class="">
                        <p>
                            AI tools are able to sort through large amounts of structured and unstructured data and recognise patterns within that data, structure and clean the data as well as perform simple predictions.
                        </p>
                    </dd>

                    <dt class="">Data analytics for asset management, risk management, trading:</dt>
                    <dd class="">
                        <p>
                            The large amounts of data can be analysed and used to improve these processes while leading to much better results.
                        </p>
                    </dd>

                    <dt class="">New account opening and approvals:</dt>
                    <dd class="">
                        <p>
                            It is possible to accurately and quickly assess the risk profile of each new client with the help of credible official data, allowing for quicker processing and therefore more openings and     approvals where applied.
                        </p>
                    </dd>


                    <dt class="">Mining Big Data:</dt>
                    <dd class="">
                        <p>
                            AI based solutions are able to collect, and analyse information that banks and other financial industries have been collecting over the years. Such information includes: How demand affects     products and services, price fluctuations of different investments against others, volatility of prices etc.
                        </p>
                    </dd>


                </dl>

            </div>
            <div class="col-6">
                <img class="icon icon-md bg-primary-3" src="{{ $web_source }}/assets/img/icons/theme/home/home-heart.svg" alt="airpods icon" data-inject-svg />
                <div class="mt-2">
                    <h5>Health</h5>
                </div>
                <h6>Misdiagnosis of diseases:</h6>
                <p>
                    AI systems are not prone to human error and hence result in a reduction in diagnosis, hence lives are saved and faster, accurate and efficient diagnosis which reduces time and money spent.
                    Examples:
                    Path AI helps pathologists come up with accurate cancer diagnosis
                    Freenome is used for early cancer detection
                </p>
                <h6>Customer experience:</h6>
                <p>
                    An overwhelming large majority of all individual complaints in healthcare are often about negative customer experience. It is very important for the healthcare industry to have good       customer care services as this will result in retention, higher conversion rates, better brand reputation and better handling of the customer process flow. AI technology can be used to     improve patient experience through the use of bots
                    Examples:
                    Babylon Health uses a chatbot to personalize healthcare by reviewing patient symptoms.
                </p>

                <h6>Managing medical data:</h6>
                <p>
                    The healthcare industry collects tonnes of data which if properly utilized, can be used to generate useful insights, increase efficiency and accuracy of certain systems, as well as       potentially save lives. It is estimated that lack of proper utilization of these datasets loses the industry $100 billion a year. AI can be used to process and make sense of this data.
                    Examples:
                    Kensci which takes tonnes of data from different sources and then uses it to predict individuals who might get sick
                </p>

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
            <div class="col-xl-8 col-lg-9">
                <h2 class="display-4 mx-xl-6">Ways to be involved</h2>
                <p class="lead">
                    Together, let’s get on a mission to place Africa on the world map for AI and ML.
                </p>
            </div>
        </div>

        <div class="row text-center mt-6">
            <div class="col-md-4 mb-3 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="px-xl-2">
                    <div class="process-circle bg-primary mb-3 d-inline-flex">1</div>
                    <h4>Funding for ARIOL</h4>
                    <p class="lead">
                        Join hands with us as we put AI in Africa on the map. Your funding will help ensure continuity,
                        establish scalability among others.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="px-xl-2">
                    <div class="process-circle bg-primary-2 mb-3 d-inline-flex">
                        2
                    </div>
                    <h4>Provide use cases</h4>
                    <p class="lead">
                        AI Centre of Excellence produces highly trained AI and ML experts who will provide solutions to
                        your organization.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <div class="px-xl-2">
                    <div class="process-circle bg-primary-3 mb-3 d-inline-flex">
                        3
                    </div>
                    <h4>Sponsor a student</h4>
                    <p class="lead">
                        AI Centre of Excellence is in Africa, for Africa. Help sponsor AI/ML engineers to ensure Africa
                        benefits from solutions during this Fourth Industrial Revolution.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                <div class="px-xl-2">
                    <div class="process-circle bg-primary-2 mb-3 d-inline-flex">
                        4
                    </div>
                    <h4>Mentor a cohort</h4>
                    <p class="lead">
                        As an AI/ML expert, AI Centre of Excellence offers you an opportunity to inspire, guide and
                        lead.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                <div class="px-xl-2">
                    <div class="process-circle bg-primary-3 mb-3 d-inline-flex">
                        5
                    </div>
                    <h4>Train an employee</h4>
                    <p class="lead">
                        Being that AI is a revolution, help equip your staff with the right tools to ensure continuity
                        of your organization and to remain up to speed with the development of technology.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                <div class="px-xl-2">
                    <div class="process-circle bg-primary mb-3 d-inline-flex">
                        6
                    </div>
                    <h4>Provide employment</h4>
                    <p class="lead">
                        Need an AI/ML expert in your organisation? AI Centre of Excellence is a hub of AI/ML experts who
                        are equipped with the necessary skills that you need in your organization to take you to the
                        next level. </p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-6 d-none">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div data-flickity='{ "imagesLoaded": true, "wrapAround": true }'>
            <div class="carousel-cell mx-md-4">
                <div class="card card-body flex-row py-4">
                    <img src="files/b64708d5-a86a-476f-b8cc-e36d4acb6d17c7dd.jpg?key=team-image" alt="Avatar" class="avatar avatar-lg">
                    <div class="ml-3">
                        <h4>
                            &ldquo;AiCE in my opinion is a new age, fresh, advanced and hippie! It’s not a workplace rather an advance of Africa in this improved optimized world.&rdquo;
                        </h4>
                        <div class="avatar-author d-block">
                            <h6>Katumbi</h6>
                            <span>Head of Marketing</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell mx-md-4">
                <div class="card card-body flex-row py-4">
                    <img src="files/b64708d5-a86a-476f-b8cc-e36d4acb6d17c7dd.jpg?key=team-image" alt="Avatar" class="avatar avatar-lg">
                    <div class="ml-3">
                        <h4>
                            &ldquo;Nowadays when I think of AI, I think of the AI Centre of Excellence. Reason being AiCE has become a space where people are trained, empowered and upscale their skills. AiCE has gone a step further to create opportunities for individuals to access through collaboration and partnerships with organizations. It’s the first of its kind in Kenya and needs to be adapted.&rdquo;
                        </h4>
                        <div class="avatar-author d-block">
                            <h6>Cece</h6>
                            <span>Marketing Manager</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell mx-md-4">
                <div class="card card-body flex-row py-4">
                    <img src="files/b64708d5-a86a-476f-b8cc-e36d4acb6d17c7dd.jpg?key=team-image" alt="Avatar" class="avatar avatar-lg">
                    <div class="ml-3">
                        <h4>
                            &ldquo;AiCE is a brilliant idea! As Africans, we need it because the world is growing towards exponential technologies. Majority of Africa is made up of the youth and the fact that AiCE is empowering them, means we as Africa, have a brighter and impactful future.&rdquo;
                        </h4>
                        <div class="avatar-author d-block">
                            <h6>Zuhudi</h6>
                            <span>General Manager</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell mx-md-4">
                <div class="card card-body flex-row py-4">
                    <img src="files/b64708d5-a86a-476f-b8cc-e36d4acb6d17c7dd.jpg?key=team-image" alt="Avatar" class="avatar avatar-lg">
                    <div class="ml-3">
                        <h4>
                            &ldquo;Exciting that a good number of AiCE leaders are young females. Knowing that AI is a tough concept, AiCE will soon be global and I’m here to see the infrastructure that will get it up there.&rdquo;
                        </h4>
                        <div class="avatar-author d-block">
                            <h6>Usha</h6>
                            <span>Production Coordinator</span>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
            </div>
        </div>
    </div>

    </div>
</section>

<section class="bg-primary-alt o-hidden">
    <div class="container layer-2">
        <div class="row justify-content-center text-center mb-6">
            <div class="col-xl-8 col-lg-9">
                <h2 class="display-4 mx-xl-6">Grow Your Skills With Us</h2>
                <p class="lead">
                    Aspire to be a part of our wonderful Team? Join us, we are the
                    solutions to democratizing and creating a pool of world class AI and ML engineers in Nigeria.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6">
                <a role="button"
                    href="register.html"
                    class="btn btn-lg btn-primary btn-block mb-2" target="_blank">
                    Apply
                </a>
            </div>
        </div>
    </div>

</section>

</div>
@stop