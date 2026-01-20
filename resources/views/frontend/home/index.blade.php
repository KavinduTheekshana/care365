@extends('layouts.frontend')

@section('content')
    @include('frontend.home.hero')
    @include('frontend.home.about')
    @include('frontend.home.services')
    @include('frontend.home.specialities')

    
    

    


   
        <!--==============================
Video Area  
==============================-->
        <div class="video-area-1 overflow-hidden space-top">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="video-wrap1">
                            <div class="video-thumb1-1" data-cue="slideInUp" data-overlay="title" data-opacity="4">
                                <img src="assets/img/Home-img/happy-nurse-holding-elderly-man-hand-wheelchair-garden-nursing-home-1024x683.jpg" alt="img">
                                <a href="https://www.youtube.com/watch?v=HyZvbVf2SSY" class="video-btn th-popup-video">
                                    <span class="play-btn style2"><i class="fa-sharp fa-solid fa-play"></i></span>
                                    <span class="video-text">Watch Video</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Marquee Area  
==============================-->
    <div class="overflow-hidden space-bottom">
        <div class="container-fluid p-0" data-cue="slideInUp">
            <div class="swiper th-slider marquee-slider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":0,"disableOnInteraction":false},"noSwiping":"true","speed":10000,"spaceBetween":0}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="marquee-icon">
                                <img src="assets/img/icon/marquee-icon3-1.png" alt="img">
                            </div>
                            <a target="_blank" href="#">
                                Comfort </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="marquee-icon">
                                <img src="assets/img/icon/marquee-icon3-1.png" alt="img">
                            </div>
                            <a target="_blank" href="#">
                                Quality of Life </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="marquee-icon">
                                <img src="assets/img/icon/marquee-icon3-1.png" alt="img">
                            </div>
                            <a target="_blank" href="#">
                                Continuum of Care </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="marquee-icon">
                                <img src="assets/img/icon/marquee-icon3-1.png" alt="img">
                            </div>
                            <a target="_blank" href="#">
                                friendly Staff </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="marquee-icon">
                                <img src="assets/img/icon/marquee-icon3-1.png" alt="img">
                            </div>
                            <a target="_blank" href="#">
                                Customized Care Plans </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="marquee-icon">
                                <img src="assets/img/icon/marquee-icon3-1.png" alt="img">
                            </div>
                            <a target="_blank" href="#">
                                Holistic Approach </a>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="marquee-icon hidden">
                                <img src="assets/img/icon/marquee-icon3-1.png" alt="img">
                            </div>
                            <a target="_blank" href="#">
                                Expertise </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--==============================
Process Area  
==============================-->
    <section class="position-relative bg-white overflow-hidden space" >
        <!-- <div class="why-bg-shape1-2 shape-mockup moving d-xxl-block d-none" data-bottom="1%" data-left="-1%">
            <img src="assets/img/shape/shape1-25.png" alt="img">
        </div>
        <div class="why-bg-shape1-2 shape-mockup jump d-xxl-block d-none" data-bottom="0" data-right="1%">
            <img src="assets/img/shape/shape1-26.png" alt="img">
        </div> -->
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title text-anim subtitle-line" data-cue="slideInUp">How We Work</span>
                <h2 class="sec-title text-anim" data-cue="slideInUp">The Process of Admitting to Our
Homes</h2>
                <p class="fs-18 text-anim2" data-cue="slideInUp">How to Proceed</p>
            </div>
            <div class="row gy-40">
                <div class="col-xl-6">
                    <div class="process-slide-image">
                        <div class="img background-img" data-bg-src="assets/img/Home-img/private-duty-caregiver.jpg">
                        </div>
                        <div class="img foreground-img" data-bg-src="assets/img/Home-img/private-duty-caregiver-2.jpeg">
                        </div>
                        <input type="range" min="1" max="100" value="50" class="slider" name='slider' id="slider">
                        <div class='slider-button'></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="process-card" data-cue="slideInUp">
                        <div class="process-bg-mask" data-mask-src="assets/img/shape/process_card_mask1_1.jpg"></div>
                        <div class="box-icon">
                            <img src="assets/img/icon/checkmark2.svg" alt="img">
                        </div>
                        <div class="box-content">
                            <h4 class="box-title">Select Package</h4>
                            <p class="box-text">Pay for the selected package via our website and get the membership.</p>
                        </div>
                        <div class="box-number">01</div>
                    </div>
                    <div class="process-card" data-cue="slideInUp">
                        <div class="process-bg-mask" data-mask-src="assets/img/shape/process_card_mask1_1.jpg"></div>
                        <div class="box-icon">
                            <img src="assets/img/icon/checkmark2.svg" alt="img">
                        </div>
                        <div class="box-content">
                            <h4 class="box-title">Onboard Digital</h4>
                            <p class="box-text">You will have an account in our platform and can check the updated medical records and other things of your elder via our platform.</p>
                        </div>
                        <div class="box-number">02</div>
                    </div>
                    <div class="process-card" data-cue="slideInUp">
                        <div class="process-bg-mask" data-mask-src="assets/img/shape/process_card_mask1_1.jpg"></div>
                        <div class="box-icon">
                            <img src="assets/img/icon/checkmark2.svg" alt="img">
                        </div>
                        <div class="box-content">
                            <h4 class="box-title">Admit your Loved Ones</h4>
                            <p class="box-text">Visit our home and admit your member by yourself or by a guardian.</p>
                        </div>
                        <div class="box-number">03</div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
Gallery Area  
==============================-->
    <div class="overflow-hidden overflow-hidden space z-index-common">


        <div class="container-fluid p-0">
            <div class="title-area text-center">
                <span class="sub-title text-anim subtitle-line" data-cue="slideInUp">Recent stories</span>
                <h2 class="sec-title text-anim" data-cue="slideInUp">Our success stories</h2>
                <p class="fs-18 text-anim2" data-cue="slideInUp">Easily find and book trusted Pet Caregivers near you</p>
            </div>

            <div class="gallery-1-wrap">

                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="assets/img/Home-img/galary-img5.png" alt="img">
                        <a href="assets/img/Home-img/galary-img5.png" class="icon-btn th-popup-image"><i class="fa-regular fa-magnifying-glass"></i></a>
                    </div>
                </div>

                <div class="gallery-card-wrap">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="assets/img/Home-img/galaryimg1.png" alt="img">
                            <a href="assets/img/Home-img/galaryimg1.png" class="icon-btn th-popup-image"><i class="fa-regular fa-magnifying-glass"></i></a>
                        </div>
                    </div>
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="assets/img/Home-img/galary-img2.png" alt="img">
                            <a href="assets/img/Home-img/galary-img2.png" class="icon-btn th-popup-image"><i class="fa-regular fa-magnifying-glass"></i></a>
                        </div>
                    </div>
                </div>

                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="assets/img/Home-img/galary-img6.png" alt="img">
                        <a href="assets/img/Home-img/galary-img6.png" class="icon-btn th-popup-image"><i class="fa-regular fa-magnifying-glass"></i></a>
                    </div>
                </div>

                <div class="gallery-card-wrap">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="assets/img/Home-img/galary-img3.png" alt="img">
                            <a href="assets/img/Home-img/galary-img3.png" class="icon-btn th-popup-image"><i class="fa-regular fa-magnifying-glass"></i></a>
                        </div>
                    </div>
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="assets/img/Home-img/galary-img4.png" alt="img">
                            <a href="assets/img/Home-img/galary-img4.png" class="icon-btn th-popup-image"><i class="fa-regular fa-magnifying-glass"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Testimonial Area  
==============================-->
    @include('frontend.home.testimonial')

    
    <!--==============================
Team Area  
==============================-->
    <!-- <section class="space overflow-hidden team-area-1" data-bg-src="assets/img/bg/team-bg-1.png" data-bg-scr="assets/img/bg/team-bg.png">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xxl-7 col-xl-7 col-md-8">
                    <div class="title-area">
                        <span class="sub-title subtitle-line text-anim" data-cue="slideInUp"><img class="me-2" src="assets/img/icon/subtitle-icon.svg" alt="icon">Team Members</span>
                        <h2 class="sec-title text-anim2" data-cue="slideInUp">Loyal, Passionate, and Driven</h2>
                        <p class="fs-18 text-anim2" data-cue="slideInUp">Our team is made up of dedicated individuals who share a common love for animals.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a class="th-btn style-border3" href="service.html">Explore All Groomers</a>
                    </div>
                </div>
            </div>
            <div class="row gy-40">
                <div class="col-xl-4">
                    <div class="team-nav-wrap">
                        <ul class="nav nav-tabs wow fadeinup" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation" data-cue="slideInUp">
                                <button class="nav-link active" id="team_1-tab" data-bs-toggle="tab" data-bs-target="#team_1" type="button" role="tab" aria-controls="team_1" aria-selected="true">
                                    <span class="team-thumb-sm">
                                        <img src="assets/img/team/team-1-1.png" alt="img">
                                    </span>
                                    <span class="content-wrap">
                                        <span class="box-title">Alina Maisner</span>
                                        <span class="desi">Pet Sitter</span>
                                    </span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation" data-cue="slideInUp">
                                <button class="nav-link" id="team_2-tab" data-bs-toggle="tab" data-bs-target="#team_2" type="button" role="tab" aria-controls="team_2" aria-selected="false">
                                    <span class="team-thumb-sm">
                                        <img src="assets/img/team/team-1-2.png" alt="img">
                                    </span>
                                    <span class="content-wrap">
                                        <span class="box-title">David Smith</span>
                                        <span class="desi">Pet Co-ordinator</span>
                                    </span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation" data-cue="slideInUp">
                                <button class="nav-link" id="team_3-tab" data-bs-toggle="tab" data-bs-target="#team_3" type="button" role="tab" aria-controls="team_3" aria-selected="false">
                                    <span class="team-thumb-sm">
                                        <img src="assets/img/team/team-1-3.png" alt="img">
                                    </span>
                                    <span class="content-wrap">
                                        <span class="box-title">Emma Brown</span>
                                        <span class="desi">Veterinarian</span>
                                    </span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation" data-cue="slideInUp">
                                <button class="nav-link" id="team_4-tab" data-bs-toggle="tab" data-bs-target="#team_4" type="button" role="tab" aria-controls="team_4" aria-selected="false">
                                    <span class="team-thumb-sm">
                                        <img src="assets/img/team/team-1-4.png" alt="img">
                                    </span>
                                    <span class="content-wrap">
                                        <span class="box-title">Mary Douglas</span>
                                        <span class="desi">Groomer</span>
                                    </span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="team-content-wrap">
                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="team_1" role="tabpanel" aria-labelledby="team_1-tab" data-cue="slideInUp">
                                <div class="team-tab-content">
                                    <div class="team-1-bg-mask" data-mask-src="assets/img/shape/team-1_mask.jpg"></div>
                                    <div class="team-thumb">
                                        <img src="assets/img/team/team-big-1-1.png" alt="img">
                                    </div>
                                    <div class="team-content">
                                        <div class="top">
                                            <h3 class="box-title">Alina Maisner</h3>
                                            <p class="desi">Pet Sitter</p>
                                        </div>
                                        <div class="body-text mb-4">
                                            <p class="mb-2">Emma leads our team with a passion for animal welfare and years of experience.</p>
                                            <p class="mb-2">Although expert groomers themselves, lots of cats like being brushed and it’s a great way of bonding with your cat. As well as fewer hairballs and less shedding, grooming your cats will imitate how they groom each other naturally and increase affection for you as a result.</p>
                                        </div>
                                        <div class="button-wrap mb-4">
                                            <a href="team-details.html" class="th-btn th-btn-xl"> <img src="assets/img/icon/phone.svg" alt="icon"> Contact Groomer</a>
                                        </div>
                                        <div class="th-social">
                                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <a class="icon-btn style3" href="team-details.html"><img data-mask-src="assets/img/icon/arrow-right-1.svg" src="assets/img/icon/arrow-right-1.svg" alt="img"></a>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="team_2" role="tabpanel" aria-labelledby="team_2-tab" data-cue="slideInUp">
                                <div class="team-tab-content">
                                    <div class="team-1-bg-mask" data-mask-src="assets/img/shape/team-1_mask.jpg"></div>
                                    <div class="team-thumb">
                                        <img src="assets/img/team/team-big-1-2.png" alt="img">
                                    </div>
                                    <div class="team-content">
                                        <div class="top">
                                            <h3 class="box-title">David Smith</h3>
                                            <p class="desi">Pet Coordinator</p>
                                        </div>
                                        <div class="body-text mb-4">
                                            <p class="mb-2">Emma leads our team with a passion for animal welfare and years of experience.</p>
                                            <p class="mb-2">Although expert groomers themselves, lots of cats like being and it’s a great way of bonding with your cat. As well as fewer hairballs and less shedding, grooming your cats will imitate how they groom each other and increase affection for you as a result.</p>
                                        </div>
                                        <div class="button-wrap mb-4">
                                            <a href="team-details.html" class="th-btn th-btn-xl"> <img src="assets/img/icon/phone.svg" alt="icon"> Contact Groomer</a>
                                        </div>
                                        <div class="th-social">
                                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <a class="icon-btn style3" href="team-details.html"><img data-mask-src="assets/img/icon/arrow-right-1.svg" src="assets/img/icon/arrow-right-1.svg" alt="img"></a>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="team_3" role="tabpanel" aria-labelledby="team_3-tab" data-cue="slideInUp">
                                <div class="team-tab-content">
                                    <div class="team-1-bg-mask" data-mask-src="assets/img/shape/team-1_mask.jpg"></div>
                                    <div class="team-thumb">
                                        <img src="assets/img/team/team-big-1-3.png" alt="img">
                                    </div>
                                    <div class="team-content">
                                        <div class="top">
                                            <h3 class="box-title">Emma Brown</h3>
                                            <p class="desi">Veterinarian</p>
                                        </div>
                                        <div class="body-text mb-4">
                                            <p class="mb-2">Emma leads our team with a passion for animal welfare and years of experience.</p>
                                            <p class="mb-2">Although expert groomers themselves, lots of cats like being brushed and it’s a great way of bonding with your cat. As well as fewer hairballs and less shedding, grooming your cats will imitate how they groom each other naturally and increase affection for you as a result.</p>
                                        </div>
                                        <div class="button-wrap mb-4">
                                            <a href="team-details.html" class="th-btn th-btn-xl"> <img src="assets/img/icon/phone.svg" alt="icon"> Contact Groomer</a>
                                        </div>
                                        <div class="th-social">
                                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <a class="icon-btn style3" href="team-details.html"><img data-mask-src="assets/img/icon/arrow-right-1.svg" src="assets/img/icon/arrow-right-1.svg" alt="img"></a>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="team_4" role="tabpanel" aria-labelledby="team_4-tab" data-cue="slideInUp">
                                <div class="team-tab-content">
                                    <div class="team-1-bg-mask" data-mask-src="assets/img/shape/team-1_mask.jpg"></div>
                                    <div class="team-thumb">
                                        <img src="assets/img/team/team-big-1-4.png" alt="img">
                                    </div>
                                    <div class="team-content">
                                        <div class="top">
                                            <h3 class="box-title">Mary Douglas</h3>
                                            <p class="desi">Groomer</p>
                                        </div>
                                        <div class="body-text mb-4">
                                            <p class="mb-2">Emma leads our team with a passion for animal welfare and years of experience.</p>
                                            <p class="mb-2">Although expert groomers themselves, lots of cats like being brushed and it’s a great way of bonding with your cat. As well as fewer hairballs and less shedding, grooming your cats will imitate how they groom each other naturally and increase affection for you as a result.</p>
                                        </div>
                                        <div class="button-wrap mb-4">
                                            <a href="team-details.html" class="th-btn th-btn-xl"> <img src="assets/img/icon/phone.svg" alt="icon"> Contact Groomer</a>
                                        </div>
                                        <div class="th-social">
                                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <a class="icon-btn style3" href="team-details.html"><img data-mask-src="assets/img/icon/arrow-right-1.svg" src="assets/img/icon/arrow-right-1.svg" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!--==============================
Brand Area  
==============================-->

            <!-- <div class="brand-wrap1 text-center  overflow-hidden">
                <div class="container th-container">
                    <div class="swiper th-slider" data-cue="slideInUp" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"5"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="blog.html" class="brand-box">
                                    <img src="assets/img/brand/brand1-1.svg" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="blog.html" class="brand-box">
                                    <img src="assets/img/brand/brand1-2.svg" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="blog.html" class="brand-box">
                                    <img src="assets/img/brand/brand1-3.svg" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="blog.html" class="brand-box">
                                    <img src="assets/img/brand/brand1-4.svg" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="blog.html" class="brand-box">
                                    <img src="assets/img/brand/brand1-5.svg" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="blog.html" class="brand-box">
                                    <img src="assets/img/brand/brand1-1.svg" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="blog.html" class="brand-box">
                                    <img src="assets/img/brand/brand1-2.svg" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="blog.html" class="brand-box">
                                    <img src="assets/img/brand/brand1-3.svg" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="blog.html" class="brand-box">
                                    <img src="assets/img/brand/brand1-4.svg" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="blog.html" class="brand-box">
                                    <img src="assets/img/brand/brand1-5.svg" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!--==============================
Faq Area
==============================-->
    @include('frontend.home.faq')

    <!--==============================
Appointment Area   
==============================-->
    <div class="space overflow-hidden  bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="title-area">
                        <span class="sub-title text-anim subtitle-line" data-cue="slideInUp">book an Appointment</span>
                        <h2 class="sec-title text-anim" data-cue="slideInUp">Make an Appointment</h2>
                        <p class="fs-18 text-anim2 pe-xl-4" data-cue="slideInUp">Need some advice or have any questions about our services? Contact us in any convenient way.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-40 align-items-center flex-row-reverse">
                <div class="col-xl-7">
                     <form id="contactForm" class="appointment-form ajax-contact">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your name*" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address*" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="number" id="number" placeholder="Phone Number*" required>
                            </div>

                            <div class="form-group col-md-6">
                                <select name="subject" id="subject" class="form-select" required>
                                    <option value="" disabled selected hidden>Select Service*</option>
                                    <option value="Medical Care">Medical Care</option>
                                    <option value="Nutritious Meals">Nutritious Meals</option>
                                    <option value="Social/Recreational Activities">Social/Recreational Activities</option>
                                    <option value="Transportation">Transportation</option>
                                    <option value="24-hour Staff Availability">24-hour Staff Availability</option>
                                    <option value="Religious and Spiritual Support">Religious and Spiritual Support</option>
                                    <option value="Wound Care">Wound Care</option>
                                    <option value="Paralysis Care">Paralysis Care</option>
                                    <option value="Dementia & Parkinson Care">Dementia & Parkinson Care</option>
                                    <option value="Housekeeping/Laundry Services">Housekeeping/Laundry Services</option>
                                    <option value="Physical Therapy and Rehabilitation">Physical Therapy and Rehabilitation</option>
                                    <option value="Video Conferencing Facility">Video Conferencing Facility</option>
                                    <option value="Music, Art Activities/Library Facilities">Music, Art Activities/Library Facilities</option>
                                    <option value="Affordable Packages">Affordable Packages</option>
                                    <option value="Television Room/Lounge">Television Room/Lounge</option>
                                    <option value="Digital Well-being Platform">Digital Well-being Platform</option>
                                    <option value="Post-surgical Care">Post-surgical Care</option>
                                    <option value="Green Environment">Green Environment</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write a message*" required></textarea>
                            </div>
                            <div class="form-btn col-12">
                                <button type="submit" class="th-btn style5" id="submitBtn">
                                    <span class="btn-text">Submit Message</span>
                                    <span class="btn-loader" style="display: none;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10" opacity="0.25"/>
                                            <path d="M12 2a10 10 0 0 1 10 10" opacity="0.75">
                                                <animateTransform attributeName="transform" type="rotate" from="0 12 12" to="360 12 12" dur="1s" repeatCount="indefinite"/>
                                            </path>
                                        </svg>
                                        Sending...
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-5">
                    <div class="appointment-thumb-1-1 pe-xl-5 me-xl-3" data-cue="slideInUp">
                        <img src="assets/img/Home-img/galary-img5.png" alt="img">
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!--==============================
Blog Area  
==============================-->
    @include('frontend.home.blog')

    

    @include('frontend.components.email_alert_modal')

        <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = document.getElementById('submitBtn');
            const btnText = submitBtn.querySelector('.btn-text');
            const btnLoader = submitBtn.querySelector('.btn-loader');
            
            // Disable button and show loader
            submitBtn.disabled = true;
            btnText.style.display = 'none';
            btnLoader.style.display = 'inline-flex';
            
            const formData = new FormData(this);
            
            fetch('/contact/send', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'Accept': 'application/json',
                }
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(err => {
                        throw err;
                    });
                }
                return response.json();
            })
            .then(data => {
                // Re-enable button
                submitBtn.disabled = false;
                btnText.style.display = 'inline';
                btnLoader.style.display = 'none';
                
                if (data.success) {
                    showAlert('success', 'Success!', data.message);
                    document.getElementById('contactForm').reset();
                } else {
                    showAlert('error', 'Error!', data.message);
                }
            })
            .catch(error => {
                // Re-enable button
                submitBtn.disabled = false;
                btnText.style.display = 'inline';
                btnLoader.style.display = 'none';
                
                console.error('Error:', error);
                
                let errorMessage = 'An unexpected error occurred. Please try again.';
                if (error.message) {
                    errorMessage = error.message;
                }
                if (error.error) {
                    errorMessage = error.error;
                }
                
                showAlert('error', 'Error!', errorMessage);
            });
        });

        function showAlert(type, title, message) {
            const modal = document.getElementById('alertModal');
            const icon = document.getElementById('alertIcon');
            const titleEl = document.getElementById('alertTitle');
            const messageEl = document.getElementById('alertMessage');
            
            if (type === 'success') {
                icon.innerHTML = '✓';
                modal.classList.remove('error');
            } else {
                icon.innerHTML = '✕';
                modal.classList.add('error');
            }
            
            titleEl.textContent = title;
            messageEl.textContent = message;
            modal.style.display = 'block';
        }

        function closeAlert() {
            document.getElementById('alertModal').style.display = 'none';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('alertModal');
            if (event.target == modal) {
                closeAlert();
            }
        }
        </script>
 @endsection