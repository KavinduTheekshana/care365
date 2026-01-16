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
                                <img src="assets/img/icon/marquee-icon1-1.svg" alt="img">
                            </div>
                            <a target="_blank" href="#">
                                Comfort </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="marquee-icon">
                                <img src="assets/img/icon/marquee-icon1-1.svg" alt="img">
                            </div>
                            <a target="_blank" href="#">
                                Quality of Life </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="marquee-icon">
                                <img src="assets/img/icon/marquee-icon1-1.svg" alt="img">
                            </div>
                            <a target="_blank" href="#">
                                Continuum of Care </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="marquee-icon">
                                <img src="assets/img/icon/marquee-icon1-1.svg" alt="img">
                            </div>
                            <a target="_blank" href="#">
                                friendly Staff </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="marquee-icon">
                                <img src="assets/img/icon/marquee-icon1-1.svg" alt="img">
                            </div>
                            <a target="_blank" href="#">
                                Customized Care Plans </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="marquee-icon">
                                <img src="assets/img/icon/marquee-icon1-1.svg" alt="img">
                            </div>
                            <a target="_blank" href="#">
                                Holistic Approach </a>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="marquee-icon">
                                <img src="assets/img/icon/marquee-icon1-1.svg" alt="img">
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
        <div class="shape-mockup gallery-bg-shape1-1 d-xxl-block d-none jump" data-left="4%" data-top="20%">
            <img src="assets/img/shape/shape1-16.png" alt="img">
        </div>
        <div class="shape-mockup gallery-bg-shape1-1 d-xxl-block d-none shake " data-right="4%" data-top="20%">
            <img src="assets/img/shape/shape1-17.png" alt="img">
        </div>
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
    <section class="testi-area-1 space overflow-hidden bg-white" id="testi-sec">
        <!-- <div class="service-bg-shape1-1 shape-mockup shake d-xxl-block d-none" data-top="20%" data-left="5%">
            <img src="assets/img/shape/shape1-18.png" alt="img">
        </div>
        <div class="service-bg-shape1-2 shape-mockup shake d-xxl-block d-none" data-top="20%" data-right="5%">
            <img src="assets/img/shape/shape1-19.png" alt="img">
        </div>
        <div class="service-bg-shape1-3 shape-mockup heartbeat d-xxl-block d-none" data-bottom="27%" data-left="5%">
            <img src="assets/img/shape/shape1-20.png" alt="img">
        </div>
        <div class="service-bg-shape1-3 shape-mockup jump d-xxl-block d-none" data-top="65%" data-right="5%">
            <img src="assets/img/shape/shape1-21.png" alt="img">
        </div>
        <div class="service-bg-shape1-3 shape-mockup moving d-xxl-block d-none" data-bottom="0%" data-left="5%">
            <img src="assets/img/shape/shape1-22.png" alt="img">
        </div> -->
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title text-anim subtitle-line" data-cue="slideInUp">Testimonials</span>
                <h2 class="sec-title text-anim" data-cue="slideInUp">What Families Say About Us</h2>
                <p class="fs-18 text-anim2" data-cue="slideInUp">Read the heartwarming stories from families who entrusted their loved ones to our care.</p>
            </div>
            <div class="row gy-50 flex-row-reverse">
                <div class="slider-area testi-slider1" data-cue="slideInUp">
                    <div class="swiper th-slider has-shadow" id="testiSlide1" data-slider-options='{"autoHeight": false,"breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"2"},"1600":{"slidesPerView":"2"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-1-quote">
                                        <img src="assets/img/icon/quote_icon.svg" alt="icon">
                                    </div>
                                    <div class="testi-bg-mask" data-mask-src="assets/img/shape/testi_card_mask1_1.jpg"></div>
                                    <div class="testi-card-profile">
                                        <div class="testi-card-avater">
                                            <img src="assets/img/testimonial/testi1-1.jpg" alt="img" width="80" height="80">
                                        </div>
                                        <div class="testi-card-profile-detaile">
                                            <h3 class="box-title">Ruwan de Silva</h3>
                                            <p class="box-desig">Senior Software Engineer</p>
                                        </div>
                                    </div>

                                    <div class="testi-card_review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">"Elder Care Home's compassionate team understood my mom's needs, giving me confidence in my decision for her care."</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-1-quote">
                                        <img src="assets/img/icon/quote_icon.svg" alt="icon">
                                    </div>
                                    <div class="testi-bg-mask" data-mask-src="assets/img/shape/testi_card_mask1_1.jpg"></div>
                                    <div class="testi-card-profile">
                                        <div class="testi-card-avater">
                                            <img src="assets/img/testimonial/testi1-2.jpg" alt="img" width="80" height="80">
                                        </div>
                                        <div class="testi-card-profile-detaile">
                                            <h3 class="box-title">Silvia Peiris</h3>
                                            <p class="box-desig">Bank Officer</p>
                                        </div>
                                    </div>

                                    <div class="testi-card_review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">"Moving my dad to ElderCare Home was easy thanks to their personalized approach and welcoming environment."</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-1-quote">
                                        <img src="assets/img/icon/quote_icon.svg" alt="icon">
                                    </div>
                                    <div class="testi-bg-mask" data-mask-src="assets/img/shape/testi_card_mask1_1.jpg"></div>
                                    <div class="testi-card-profile">
                                        <div class="testi-card-avater">
                                            <img src="assets/img/testimonial/testi1-3.jpg" alt="img" width="80" height="80">
                                        </div>
                                        <div class="testi-card-profile-detaile">
                                            <h3 class="box-title">Jeewan Mahanama</h3>
                                            <p class="box-desig">Accountant</p>
                                        </div>
                                    </div>

                                    <div class="testi-card_review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">“Eager to explore options for my loved one's care, I stumbled upon ElderCare's digital platform. Little did I know, this virtual portal would become my lifeline, offering a wealth of information and support as I navigated the journey ahead.”</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-1-quote">
                                        <img src="assets/img/icon/quote_icon.svg" alt="icon">
                                    </div>
                                    <div class="testi-bg-mask" data-mask-src="assets/img/shape/testi_card_mask1_1.jpg"></div>
                                    <div class="testi-card-profile">
                                        <div class="testi-card-avater">
                                            <img src="assets/img/testimonial/testi1-4.jpg" alt="img" width="80" height="80">
                                        </div>
                                        <div class="testi-card-profile-detaile">
                                            <h3 class="box-title">Arjuna Perera</h3>
                                            <p class="box-desig">Business Owner</p>
                                        </div>
                                    </div>

                                    <div class="testi-card_review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">"The staff at ElderCare Home treats my mother with dignity and respect. Their attention to detail and genuine care has made all the difference in her quality of life."</p>
                                </div>
                            </div>
                        </div>
                        <div class="slider-pagination-wrap mt-30">
                            <button data-slider-prev="#testiSlide1" class="slider-arrow default"><i class="far fa-arrow-left"></i></button>
                            <div class="slider-pagination"></div>
                            <button data-slider-next="#testiSlide1" class="slider-arrow default"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
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
Price Area  
==============================-->
    <section class="overflow-hidden bg-white space">

        <!-- <div class="why-bg-shape1-3 shape-mockup shake d-xxl-block d-none" data-top="49%" data-left="7%">
            <img src="assets/img/shape/shape1-7.png" alt="img">
        </div>
        <div class="why-bg-shape1-6 shape-mockup shake d-xxl-block d-none" data-top="26%" data-left="6%">
            <img src="assets/img/shape/shape1-5.png" alt="img">
        </div>
        <div class="why-bg-shape1-4 shape-mockup shake d-xxl-block d-none" data-top="71%" data-left="4%">
            <img src="assets/img/shape/shape1-23.png" alt="img">
        </div>

        <div class="why-bg-shape1-2 shape-mockup heartbeat d-xxl-block d-none" data-top="46%" data-right="5%">
            <img src="assets/img/shape/shape1-6.png" alt="img">
        </div>
        <div class="why-bg-shape1-2 shape-mockup moving d-xxl-block d-none" data-bottom="0" data-left="-1%">
            <img src="assets/img/shape/shape1-24.png" alt="img">
        </div> -->

        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title text-anim subtitle-line" data-cue="slideInUp">pricing Plan</span>
                <h2 class="sec-title text-anim" data-cue="slideInUp">Our Best Package</h2>
                <p class="fs-18 text-anim2" data-cue="slideInUp">Discover our premium care package designed to provide the highest level of comfort and support for your loved ones.</p>
            </div>
            <div class="row gy-30 justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="pricing-card-grid style-2" data-cue="slideInUp">
                        <div class="pricing-1-bg_mask" data-mask-src="assets/img/shape/pricing-1-2_mask.jpg"></div>
                        <div class="content">
                            <div class="text-center mb-40">
                                <h3 class="box-title">Private Heaven</h3>
                                <h5 class="text-theme">Monthly Package</h5>
                                <div class="price-box mt-30">
                                    <h2 class="price">175,000 LKR <span class="fs-18">($575)</span></h2>
                                    <p class="box-text">Upwards Monthly</p>
                                </div>
                            </div>
                            
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="checklist mb-40">
                                        <ul class="list-two-column">
                                            <li><i class="fa-solid fa-check text-theme"></i> Individual Room</li>
                                            <li><i class="fa-solid fa-check text-theme"></i> Birthday Surprise service with Pik Bokz</li>
                                            <li><i class="fa-solid fa-check text-theme"></i> Wardrobe/ Mirror/Chair with Mini Table</li>
                                            <li><i class="fa-solid fa-check text-theme"></i> Mini Fridge</li>
                                            <li><i class="fa-solid fa-check text-theme"></i> In Suit Bathroom</li>
                                            <li><i class="fa-solid fa-check text-theme"></i> Air Conditioning (T&C Apply)</li>
                                            <li><i class="fa-solid fa-check text-theme"></i> Separate Double Bed with double layer Mattress + Pillow + Bedding</li>
                                            <li><i class="fa-solid fa-check text-theme"></i> Door Bell Communication System</li>
                                            <li><i class="fa-solid fa-check text-theme"></i> PEO TV Facility</li>
                                            <li><i class="fa-solid fa-check text-theme"></i> Common Library/ TV Lobby / Garden</li>
                                            <li><i class="fa-solid fa-check text-theme"></i> Additional Medication Management (T&C Apply)</li>
                                            <li><i class="fa-solid fa-check text-theme"></i> Weekend News Papers</li>
                                            <li><i class="fa-solid fa-check text-theme"></i> Extra Meal Package & Switch Menu x 2 (T&C Apply)</li>
                                            <li><i class="fa-solid fa-check text-theme"></i> Monthly activity plans & access to our "Fun Time Club"</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="th-btn" href="contact.html">Enquire Now</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-12 text-center" data-cue="slideInUp">
                    <a class="th-btn style-border3" href="contact.html">Contact Us for More Details <img src="assets/img/icon/arrow-right-black.svg" alt="icon"></a>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Faq Area
==============================-->
    <div class=" space overflow-hidden">
        <div class="container">
            <div class="row gy-40 gx-60">
                <div class="col-xxl-7 col-xl-7">
                    <div class="title-area">
                        <span class="sub-title text-anim subtitle-line" data-cue="slideInUp">quick answers</span>
                        <h2 class="sec-title text-anim2" data-cue="slideInLeft">Frequently Ask Questions</h2>
                    </div>


                    <!--==============================
Faq Area
==============================-->
                    <div class="faq-wrap1 pe-xl-4">
                        <div class="accordion" id="faqAccordion">


                            <div class="accordion-card" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"><span class="count">1.</span> What types of care services are provided?</button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">We offer a range of care services including assistance with activities of daily living, medication management, and specialized memory care.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"><span class="count">2.</span> Is there 24/7 staff available for assistance?</button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Yes, our facility has 24/7 staff available to assist residents whenever needed.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"><span class="count">3.</span> How are medical needs handled? Is there a nurse on-site?</button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">We have trained staff who can handle basic medical needs, and a nurse is available onsite for more specialized care.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4"><span class="count">4.</span> What are the living arrangements like (private or shared rooms)?</button>
                                </div>
                                <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Residents have the option for both private and shared rooms, depending on their package preference and budget.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5"><span class="count">5.</span> Are meals provided, and can dietary restrictions be accommodated?</button>
                                </div>
                                <div id="collapse-5" class="accordion-collapse collapse " aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Nutritious meals are provided, and we can accommodate various dietary restrictions and preferences.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6"><span class="count">6.</span> What kinds of activities and amenities are available for residents?</button>
                                </div>
                                <div id="collapse-6" class="accordion-collapse collapse " aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">We offer a variety of activities and amenities such as exercise classes, social events, and recreational outings.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7"><span class="count">7.</span> How is safety and security handled within the facility?</button>
                                </div>
                                <div id="collapse-7" class="accordion-collapse collapse " aria-labelledby="collapse-item-7" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Safety and security are top priorities; our facility is equipped with security systems and staff are trained in emergency procedures.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-8">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8"><span class="count">8.</span> What is the staff-to-resident ratio?</button>
                                </div>
                                <div id="collapse-8" class="accordion-collapse collapse " aria-labelledby="collapse-item-8" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Our staff-to-resident ratio is designed to ensure personalized care and attention for each resident.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xxl-5 col-xl-5 align-self-center" data-cue="slideInUp">
                    <div class="faq-img-box1 global-img" data-cue="slideInUp">
                        <img src="assets/img/Home-img/galary-img6.png" alt="faq_img">
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
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
                    <form action="mail.php" method="POST" class="appointment-form ajax-contact">
                        <div class="row">
                            <div class="form-group style-border col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name*">
                            </div>
                            <div class="form-group style-border col-md-6">
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone number*">
                            </div>
                            <div class="form-group style-border col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email address*">
                            </div>

                            <div class="form-group col-md-6 style-border3">
                                <select name="subject" id="subject" class="form-select">
                                    <option value="" disabled selected hidden>Select service*</option>
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
                                <i class="fal fa-chevron-down"></i>
                            </div>

                            <div class="form-group style-border col-md-12">
                                <input type="date" class="form-control" value="2025-11-16" name="date" id="date">
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn">Submit Now</button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
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
    <section class="bg-smoke2 space overflow-hidden" id="blog-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title text-anim subtitle-line" data-cue="slideInUp">Articles & Tips</span>
                <h2 class="sec-title text-anim" data-cue="slideInUp">Latest Articles & Blog</h2>
            </div>
            <div class="row gy-40 justify-content-center">
                <div class="col-xl-4 col-lg-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog-s-1-1.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i>Jordan Park</a>
                                <a href="blog.html"><i class="fas fa-calendar"></i>24 Jun, 2025</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">How to Keep Your Loved Ones Healthy Year-Round </a></h3>
                            <div class="btn-wrap">
                                <a href="blog-details.html" class="link-btn th-btn-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog-s-1-2.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i>Jordan Park</a>
                                <a href="blog.html"><i class="fas fa-calendar"></i>24 Jun, 2025</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">How to Look After Dogs Loved Ones Healthy Year-Round</a></h3>
                            <div class="btn-wrap">
                                <a href="blog-details.html" class="link-btn th-btn-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog-s-1-3.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i>Jordan Park</a>
                                <a href="blog.html"><i class="fas fa-calendar"></i>24 Jun, 2025</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">Signs Your Cat is Stressed Your Loved Ones </a></h3>
                            <div class="btn-wrap">
                                <a href="blog-details.html" class="link-btn th-btn-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
 @endsection