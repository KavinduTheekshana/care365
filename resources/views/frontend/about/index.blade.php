@extends('layouts.frontend')

<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">


<body class="">

    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->


    <!--********************************
   		Code Start From Here 
	******************************** -->
    <div class="cursor-follower"></div>

    <!-- slider drag cursor -->
    <!-- <div class="slider-drag-cursor"> DRAG </div> -->

    <!--==============================
    Mobile Menu
  ============================== -->
    
    <!--==============================
	Header Area
==============================-->
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper ">
        <div class="breadcumb-bg-thumb" data-overlay="title" data-opacity="5" data-bg-src="assets/img/bg/breadcumb-bg.png"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title text-anim" data-cue="slideInUp" data-delay="100">About Us</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
About Area  
==============================-->
    <div class="overflow-hidden space overflow-hidden" id="about-sec">
        <div class="container">
            <div class="about-wrap1">
                <div class="row gy-40 gx-60 align-items-center flex-row-reverse">
                    <div class="col-xxl-7 align-self-center">
                        <div class="img-box1" data-cue="slideInUp" data-delay="300">
                            <div class="img1" data-mask-src="assets/img/normal/about-thumb-mask1-1.1.png">
                                <img src="assets/img/normal/about-thumb1-1.1.jpg" alt="About">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5">
                        <div class="title-area mb-40">
                            <span class="sub-title subtitle-line text-anim" data-cue="slideInUp"> Our Story</span>
                            <h2 class="sec-title text-anim2" data-cue="slideInLeft" data-delay="300">Understanding Life's Journey with Care 365</h2>
                            <p class="fs-18 mt-4" data-cue="slideInUp">At Care 365, we understand the intricate needs that arise through life's journey. Whether you need post-surgical care, support for mobility, or a nurturing environment for dementia and Parkinson's, our compassionate team embraces your unique story.</p>
                        </div>
                        <div class="about1-list-wrap" data-cue="slideInUp">
                            <div class="checklist list-two-column style2">
                                <ul>
                                    <li>Post-Surgical Care</li>
                                    <li>Mobility Support</li>
                                    <li>Dementia Care</li>
                                    <li>Wound Care</li>
                                    <li>Physical Therapy</li>
                                    <li>24/7 Staff Support</li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-wrap mt-50" data-cue="slideInUp">
                            <a class="th-btn" href="{{ route('contact') }}">Join Now</a>
                            <div class="info-card">
                                <div class="box-icon style2">
                                    <img src="assets/img/icon/phone-black.svg" alt="phon-icon">
                                </div>
                                <div class="box-content">
                                    <h4 class="box-title">Call us: </h4>
                                    <p class="box-text"><a class="text-title" href="tel:+94776604040">(+94)77 660 40 40</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><!--==============================
Why Choose Us Area  
==============================-->
    <div class="why-sec-2 overflow-hidden space-bottom overflow-hidden">
        <div class="container">
            <div class="row gy-40 gx-80 justify-content-center">
                <div class="col-xxl-12">
                    <div class="title-area text-center">
                        <span class="sub-title text-anim subtitle-line" data-cue="slideInUp"> Who We Are</span>
                        <h2 class="sec-title text-anim" data-cue="slideInUp">Navigating Life's Journey with Care 365</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area why-slider1_2">
                <div class="swiper th-slider" id="whySlider1_2" data-slider-options='{"autoHeight":true,"autoplay":false,"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-cue="slideInUp">
                            <div class="why-inner-card">
                                <div class="top">
                                    <h4 class="box-title">Sanctuary</h4>
                                    <div class="icon">
                                        <img src="assets/img/shape/why-shape-inner.png" alt="img">
                                    </div>
                                </div>
                                <div class="box-img">
                                    <img src="assets/img/normal/why-1.1-1.jpg" alt="img">
                                </div>
                                <div class="box-content">
                                    <p class="box-text">Imagine a sanctuary where nutritious meals nourish the body while engaging activities ignite the spirit. Our social and recreational programs foster community and growth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-cue="slideInUp">
                            <div class="why-inner-card">
                                <div class="top">
                                    <h4 class="box-title">24/7 Care</h4>
                                    <div class="icon">
                                        <img src="assets/img/shape/why-shape-inner.png" alt="img">
                                    </div>
                                </div>
                                <div class="box-img">
                                    <img src="assets/img/normal/why-1.1-2.jpg" alt="img">
                                </div>
                                <div class="box-content">
                                    <p class="box-text">With 24/7 staff, your needs are met with unwavering care – from wound care and paralysis management to physical therapy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-cue="slideInUp">
                            <div class="why-inner-card">
                                <div class="top">
                                    <h4 class="box-title">Technology</h4>
                                    <div class="icon">
                                        <img src="assets/img/shape/why-shape-inner.png" alt="img">
                                    </div>
                                </div>
                                <div class="box-img">
                                    <img src="assets/img/normal/why-1.1-3.jpg" alt="img">
                                </div>
                                <div class="box-content">
                                    <p class="box-text">Embracing technology, we offer video conferencing and a digital well-being platform. Step into an affordable world of quality care, housekeeping, lounges, and TVs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-cue="slideInUp">
                            <div class="why-inner-card">
                                <div class="top">
                                    <h4 class="box-title">Journey</h4>
                                    <div class="icon">
                                        <img src="assets/img/shape/why-shape-inner.png" alt="img">
                                    </div>
                                </div>
                                <div class="box-img">
                                    <img src="assets/img/normal/why-1.1-4.jpg" alt="img">
                                </div>
                                <div class="box-content">
                                    <p class="box-text">Join Care 365's extraordinary odyssey, infused with compassion and dignity, pursuing a life well-lived.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-cue="slideInUp">
                            <div class="why-inner-card">
                                <div class="top">
                                    <h4 class="box-title">Our Vision</h4>
                                    <div class="icon">
                                        <img src="assets/img/shape/why-shape-inner.png" alt="img">
                                    </div>
                                </div>
                                <div class="box-img">
                                    <img src="assets/img/normal/why-1.1-1.jpg" alt="img">
                                </div>
                                <div class="box-content">
                                    <p class="box-text">To be the No. 1 care home in Sri Lanka, pioneering innovative care solutions that seamlessly integrate modern comforts and digital services for unparalleled experiences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-cue="slideInUp">
                            <div class="why-inner-card">
                                <div class="top">
                                    <h4 class="box-title">Our Mission</h4>
                                    <div class="icon">
                                        <img src="assets/img/shape/why-shape-inner.png" alt="img">
                                    </div>
                                </div>
                                <div class="box-img">
                                    <img src="assets/img/normal/why-1.1-2.jpg" alt="img">
                                </div>
                                <div class="box-content">
                                    <p class="box-text">At Care365, we are committed to redefining care by blending contemporary living standards with personalized digital services. Through constant innovation and dedication, we strive to exceed expectations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-cue="slideInUp">
                            <div class="why-inner-card">
                                <div class="top">
                                    <h4 class="box-title">Negombo</h4>
                                    <div class="icon">
                                        <img src="assets/img/shape/why-shape-inner.png" alt="img">
                                    </div>
                                </div>
                                <div class="box-img">
                                    <img src="assets/img/normal/why-1.1-3.jpg" alt="img">
                                </div>
                                <div class="box-content">
                                    <p class="box-text">Care Home | Negombo | Pinnacle 365 (Our Luxury Care Home - Individual Rooms Only). Designed with modern comforts and amenities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-cue="slideInUp">
                            <div class="why-inner-card">
                                <div class="top">
                                    <h4 class="box-title">Colombo</h4>
                                    <div class="icon">
                                        <img src="assets/img/shape/why-shape-inner.png" alt="img">
                                    </div>
                                </div>
                                <div class="box-img">
                                    <img src="assets/img/normal/why-1.1-4.jpg" alt="img">
                                </div>
                                <div class="box-content">
                                    <p class="box-text">Care Home | Colombo - Admissions Open. Currently operating from Thalawathugoda, Hokandara, providing exceptional care in a warm, welcoming environment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-cue="slideInUp">
                            <div class="why-inner-card">
                                <div class="top">
                                    <h4 class="box-title">Kandy</h4>
                                    <div class="icon">
                                        <img src="assets/img/shape/why-shape-inner.png" alt="img">
                                    </div>
                                </div>
                                <div class="box-img">
                                    <img src="assets/img/normal/why-1.1-1.jpg" alt="img">
                                </div>
                                <div class="box-content">
                                    <p class="box-text">Care Home | Kandy | Constructions in progress. Exciting times are ahead as Care365 prepares to open our brand-new, state-of-the-art facility in Sri Lanka.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="pagination-wrap">
                        <button data-slider-prev="#whySlider1_2" class="slider-arrow default style-border2 slider-prev"><img data-mask-src="assets/img/icon/arrow-left.svg" src="assets/img/icon/arrow-left.svg" alt="img"></button>
                        <div class="slider-pagination"></div>
                        <button data-slider-next="#whySlider1_2" class="slider-arrow default style-border2 slider-next"><img data-mask-src="assets/img/icon/arrow-right.svg" src="assets/img/icon/arrow-right.svg" alt="img"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Service Area  
==============================-->
    <section class="bg-smoke2 space overflow-hidden" id="service-sec">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xxl-5 col-xl-7 col-md-8">
                    <div class="title-area">
                        <span class="sub-title subtitle-line text-anim" data-cue="slideInUp"> Our Services</span>
                        <h2 class="sec-title text-anim2" data-cue="slideInUp">Our Comprehensive Care Services</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a class="th-btn style-border3" href="{{ route('services') }}">Browse All Services</a>
                    </div>
                </div>
            </div>
            <div class="slider-area service-slider1">
                <div class="swiper th-slider" id="serviceSlider1" data-slider-options='{"autoHeight":true,"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-cue="slideInUp">
                            <div class="service-card">
                                <a class="icon-btn style3" href="{{ route('servicedetails') }}"><img data-mask-src="assets/img/icon/arrow-right.svg" src="assets/img/icon/arrow-right.svg" alt="img"></a>
                                <div class="box-img" data-mask-src="assets/img/shape/service_card_mask1_1.jpg">
                                    <img src="assets/img/Home-img/Medical Care.png" alt="img">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="{{ route('servicedetails') }}">Medical Care</a></h3>
                                    <p class="box-text">Comprehensive medical support tailored to your unique needs with dedicated professionals committed to compassionate care.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-cue="slideInUp">
                            <div class="service-card">
                                <a class="icon-btn style3" href="{{ route('servicedetails') }}"><img data-mask-src="assets/img/icon/arrow-right.svg" src="assets/img/icon/arrow-right.svg" alt="img"></a>
                                <div class="box-img" data-mask-src="assets/img/shape/service_card_mask1_1.jpg">
                                    <img src="assets/img/Home-img/Nutritious Meals.webp" alt="img">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="{{ route('servicedetails') }}">Nutritious Meals</a></h3>
                                    <p class="box-text">Meticulously crafted meals with wholesome ingredients and culinary excellence for optimal health.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-cue="slideInUp">
                            <div class="service-card">
                                <a class="icon-btn style3" href="{{ route('servicedetails') }}"><img data-mask-src="assets/img/icon/arrow-right.svg" src="assets/img/icon/arrow-right.svg" alt="img"></a>
                                <div class="box-img" data-mask-src="assets/img/shape/service_card_mask1_1.jpg">
                                    <img src="assets/img/Home-img/Recreational Activities.webp" alt="img">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="{{ route('servicedetails') }}">Social/Recreational Activities</a></h3>
                                    <p class="box-text">Engaging programs designed to ignite passions, foster meaningful connections, and enrich life.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-cue="slideInUp">
                            <div class="service-card">
                                <a class="icon-btn style3" href="{{ route('servicedetails') }}"><img data-mask-src="assets/img/icon/arrow-right.svg" src="assets/img/icon/arrow-right.svg" alt="img"></a>
                                <div class="box-img" data-mask-src="assets/img/shape/service_card_mask1_1.jpg">
                                    <img src="assets/img/service/service_card_1_4.jpg" alt="img">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="{{ route('servicedetails') }}">24-hour Staff Availability</a></h3>
                                    <p class="box-text">Dedicated team available around the clock providing attentive care and unwavering support.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-cue="slideInUp">
                            <div class="service-card">
                                <a class="icon-btn style3" href="{{ route('servicedetails') }}"><img data-mask-src="assets/img/icon/arrow-right.svg" src="assets/img/icon/arrow-right.svg" alt="img"></a>
                                <div class="box-img" data-mask-src="assets/img/shape/service_card_mask1_1.jpg">
                                    <img src="assets/img/Home-img/Dementia-Parkinson-Care.webp" alt="img">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="{{ route('servicedetails') }}">Dementia & Parkinson Care</a></h3>
                                    <p class="box-text">Specialized care ensuring a safe and supportive environment for comfort and quality of life.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-cue="slideInUp">
                            <div class="service-card">
                                <a class="icon-btn style3" href="{{ route('servicedetails') }}"><img data-mask-src="assets/img/icon/arrow-right.svg" src="assets/img/icon/arrow-right.svg" alt="img"></a>
                                <div class="box-img" data-mask-src="assets/img/shape/service_card_mask1_1.jpg">
                                    <img src="assets/img/service/service_card_1_6.jpg" alt="img">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="{{ route('servicedetails') }}">Physical Therapy</a></h3>
                                    <p class="box-text">State-of-the-art therapy and rehabilitation services to regain strength, mobility, and independence.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-cue="slideInUp">
                            <div class="service-card">
                                <a class="icon-btn style3" href="{{ route('servicedetails') }}"><img data-mask-src="assets/img/icon/arrow-right.svg" src="assets/img/icon/arrow-right.svg" alt="img"></a>
                                <div class="box-img" data-mask-src="assets/img/shape/service_card_mask1_1.jpg">
                                    <img src="assets/img/service/service_card_1_7.jpg" alt="img">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="{{ route('servicedetails') }}">Wound Care</a></h3>
                                    <p class="box-text">Expert wound care services promoting healing and restoring your overall well-being.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-cue="slideInUp">
                            <div class="service-card">
                                <a class="icon-btn style3" href="{{ route('servicedetails') }}"><img data-mask-src="assets/img/icon/arrow-right.svg" src="assets/img/icon/arrow-right.svg" alt="img"></a>
                                <div class="box-img" data-mask-src="assets/img/shape/service_card_mask1_1.jpg">
                                    <img src="assets/img/service/service_card_2_2.jpg" alt="img">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="{{ route('servicedetails') }}">Post-surgical Care</a></h3>
                                    <p class="box-text">Personalized post-surgical care ensuring smooth transition and focused healing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrap">
                        <button data-slider-prev="#serviceSlider1" class="slider-arrow default style-border2 slider-prev"><img data-mask-src="assets/img/icon/arrow-left.svg" src="assets/img/icon/arrow-left.svg" alt="img"></button>
                        <div class="slider-pagination"></div>
                        <button data-slider-next="#serviceSlider1" class="slider-arrow default style-border2 slider-next"><img data-mask-src="assets/img/icon/arrow-right.svg" src="assets/img/icon/arrow-right.svg" alt="img"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Process Area  
==============================-->
    <section class="position-relative bg-white overflow-hidden space">
        <!-- <div class="why-bg-shape1-2 shape-mockup jump d-xxl-block d-none" data-bottom="0" data-right="1%">
            <img src="assets/img/shape/shape1-26.png" alt="img">
        </div> -->
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title text-anim subtitle-line" data-cue="slideInUp"> How We Work</span>
                <h2 class="sec-title text-anim" data-cue="slideInUp">How We Care For You</h2>
                <p class="fs-18 text-anim2" data-cue="slideInUp">Experience quality care with our dedicated team of professionals</p>
            </div>
            <div class="row gy-40">
                <div class="col-xl-6 col-lg-6">
                    <div class="process2-1-box pe-xxl-5 me-xl-5">
                        <div class="process2-1-thumb" data-mask-src="assets/img/bg/process-2.1-bg.png">
                            <img class="process-2-1-img" src="assets/img/normal/BLOG15_480x480.webp" alt="img">
                            <!-- <img class="process1-1-shape" src="assets/img/bg/process1.1-shape.png" alt="img"> -->
                        </div>
                        <!-- <div class="process2-2-img">
                            <img src="assets/img/normal/process2-2-img.png" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="process-card" data-cue="slideInUp">
                        <div class="process-bg-mask" data-mask-src="assets/img/shape/process_card_mask1_1.jpg"></div>
                        <div class="box-icon">
                            <img src="assets/img/icon/checkmark2.svg" alt="img">
                        </div>
                        <div class="box-content">
                            <h4 class="box-title">Schedule a Consultation</h4>
                            <p class="box-text">Connect with our caring team to discuss your unique needs. We prioritize understanding your story and requirements for personalized care.</p>
                        </div>
                        <div class="box-number">01</div>
                    </div>
                    <div class="process-card" data-cue="slideInUp">
                        <div class="process-bg-mask" data-mask-src="assets/img/shape/process_card_mask1_1.jpg"></div>
                        <div class="box-icon">
                            <img src="assets/img/icon/checkmark2.svg" alt="img">
                        </div>
                        <div class="box-content">
                            <h4 class="box-title">Personalized Care Plan</h4>
                            <p class="box-text">Our team creates a tailored care plan addressing your specific needs - from medical care to social activities and nutritious meals.</p>
                        </div>
                        <div class="box-number">02</div>
                    </div>
                    <div class="process-card" data-cue="slideInUp">
                        <div class="process-bg-mask" data-mask-src="assets/img/shape/process_card_mask1_1.jpg"></div>
                        <div class="box-icon">
                            <img src="assets/img/icon/checkmark2.svg" alt="img">
                        </div>
                        <div class="box-content">
                            <h4 class="box-title">Compassionate 24/7 Support</h4>
                            <p class="box-text">Experience unwavering care with our dedicated staff available around the clock. Our modern facility ensures comfort, dignity and well-being.</p>
                        </div>
                        <div class="box-number">03</div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
Our Homes Area  
==============================-->
    <section class="bg-smoke2 space overflow-hidden team-area-1" >
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xxl-7 col-xl-7 col-md-8">
                    <div class="title-area">
                        <span class="sub-title subtitle-line text-anim" data-cue="slideInUp"> Our Homes</span>
                        <h2 class="sec-title text-anim2" data-cue="slideInUp">Designed with Modern Comforts and Amenities</h2>
                        <p class="fs-18 text-anim2" data-cue="slideInUp">Exciting times are ahead as Care365 prepares to open our brand-new, state-of-the-art facility in Sri Lanka.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a class="th-btn style-border3" href="{{ route('contact') }}">Contact Us</a>
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
                                        <img src="assets/img/care-home/home-negombo.jpg" alt="img">
                                    </span>
                                    <span class="content-wrap">
                                        <span class="box-title">Care Home | Negombo</span>
                                        <span class="desi">Pinnacle 365</span>
                                    </span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation" data-cue="slideInUp">
                                <button class="nav-link" id="team_2-tab" data-bs-toggle="tab" data-bs-target="#team_2" type="button" role="tab" aria-controls="team_2" aria-selected="false">
                                    <span class="team-thumb-sm" style="width: 100px;">
                                        <img src="assets/img/care-home/Care Home I Colombo.webp" alt="img" style="width: 100px !important;" >
                                    </span>
                                    <span class="content-wrap">
                                        <span class="box-title">Care Home | Colombo</span>
                                        <span class="desi">Admissions Open</span>
                                    </span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation" data-cue="slideInUp">
                                <button class="nav-link" id="team_3-tab" data-bs-toggle="tab" data-bs-target="#team_3" type="button" role="tab" aria-controls="team_3" aria-selected="false">
                                    <span class="team-thumb-sm">
                                        <img src="assets/img/care-home/Care Home Kandy.webp" alt="img" >
                                    </span>
                                    <span class="content-wrap">
                                        <span class="box-title">Care Home | Kandy</span>
                                        <span class="desi">Constructions in Progress</span>
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
                                    <div class="team-thumb" style="max-width: 350px;">
                                        <img src="assets/img/care-home/home-negombo.jpg" alt="img">
                                    </div>
                                    <div class="team-content">
                                        <div class="top">
                                            <h3 class="box-title">Care Home | Negombo</h3>
                                            <p class="desi">Pinnacle 365 - Our Luxury Care Home</p>
                                        </div>
                                        <div class="body-text mb-4">
                                            <p class="mb-2">Our Luxury Care Home featuring Individual Rooms Only.</p>
                                            <p class="mb-2">Designed with modern comforts and amenities, this home will redefine the standard of care, combining thoughtfully planned living spaces, engaging common areas, and seamless integration of cutting-edge technology.</p>
                                        </div>
                                        <div class="button-wrap mb-4">
                                            <a href="{{ route('contact') }}" class="th-btn th-btn-xl"> <img src="assets/img/icon/phone-white.svg" alt="icon"> Contact Us</a>
                                        </div>
                                        <div class="th-social">
                                            <a href="https://www.facebook.com/profile.php?id=61558599706737"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/carethreesixtyfive"><i class="fab fa-instagram"></i></a>
                                            
                                            
                                        </div>
                                    </div>
                                    <a class="icon-btn style3" href="{{ route('contact') }}"><img data-mask-src="assets/img/icon/arrow-right-1.svg" src="assets/img/icon/arrow-right-1.svg" alt="img"></a>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="team_2" role="tabpanel" aria-labelledby="team_2-tab" data-cue="slideInUp">
                                <div class="team-tab-content">
                                    <div class="team-1-bg-mask" data-mask-src="assets/img/shape/team-1_mask.jpg"></div>
                                    <div class="team-thumb" style="max-width: 350px;">
                                        <img src="assets/img/care-home/Care Home I Colombo.webp" alt="img">
                                    </div>
                                    <div class="team-content">
                                        <div class="top">
                                            <h3 class="box-title">Care Home | Colombo</h3>
                                            <p class="desi"><span class="badge bg-success">Admissions Open</span></p>
                                        </div>
                                        <div class="body-text mb-4">
                                            <p class="mb-2">We currently operate from our Thalawathugoda, Hokandara, Colombo location, providing exceptional care in a warm, welcoming environment.</p>
                                            <p class="mb-2">Stay tuned as we bring our vision of elevated senior living to life, setting new standards in Sri Lanka.</p>
                                        </div>
                                        <div class="button-wrap mb-4">
                                            <a href="{{ route('contact') }}" class="th-btn th-btn-xl"> <img src="assets/img/icon/phone-white.svg" alt="icon"> Contact Us</a>
                                        </div>
                                        <div class="th-social">
                                            <a href="https://www.facebook.com/profile.php?id=61558599706737"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/carethreesixtyfive"><i class="fab fa-instagram"></i></a>
                                            
                                            
                                        </div>
                                    </div>
                                    <a class="icon-btn style3" href="{{ route('contact') }}"><img data-mask-src="assets/img/icon/arrow-right-1.svg" src="assets/img/icon/arrow-right-1.svg" alt="img"></a>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="team_3" role="tabpanel" aria-labelledby="team_3-tab" data-cue="slideInUp">
                                <div class="team-tab-content">
                                    <div class="team-1-bg-mask" data-mask-src="assets/img/shape/team-1_mask.jpg"></div>
                                    <div class="team-thumb" style="max-width: 350px;">
                                        <img src="assets/img/care-home/Care Home Kandy.webp" alt="img">
                                    </div>
                                    <div class="team-content">
                                        <div class="top">
                                            <h3 class="box-title">Care Home | Kandy</h3>
                                            <p class="desi"><span class="badge bg-warning text-dark">Constructions in Progress</span></p>
                                        </div>
                                        <div class="body-text mb-4">
                                            <p class="mb-2">Exciting times are ahead as Care365 prepares to open our brand-new, state-of-the-art facility in Sri Lanka.</p>
                                            <p class="mb-2">Designed with modern comforts and amenities, this home will redefine the standard of care, combining thoughtfully planned living spaces, engaging common areas, and seamless integration of cutting-edge technology.</p>
                                        </div>
                                        <div class="button-wrap mb-4">
                                            <a href="{{ route('contact') }}" class="th-btn th-btn-xl"> <img src="assets/img/icon/phone-white.svg" alt="icon"> Contact Us</a>
                                        </div>
                                        <div class="th-social">
                                            <a href="https://www.facebook.com/profile.php?id=61558599706737"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/carethreesixtyfive"><i class="fab fa-instagram"></i></a>
                                            
                                            
                                        </div>
                                    </div>
                                    <a class="icon-btn style3" href="{{ route('contact') }}"><img data-mask-src="assets/img/icon/arrow-right-1.svg" src="assets/img/icon/arrow-right-1.svg" alt="img"></a>
                                </div>
                            </div>

                                    <!-- <div class="team-thumb">
                                        <img src="assets/img/team/team-big-1-4.png" alt="img">
                                    </div>
                                    <div class="team-content">
                                        <div class="top">
                                            <h3 class="box-title">Silvia Peiris</h3>
                                            <p class="desi">Groomer</p>
                                        </div>
                                        <div class="body-text mb-4">
                                            <p class="mb-2">Emma leads our team with a passion for animal welfare and years of experience.</p>
                                            <p class="mb-2">Although expert groomers themselves, lots of cats like being brushed and it’s a great way of bonding with your cat. As well as fewer hairballs and less shedding, grooming your cats will imitate how they groom each other naturally and increase affection for you as a result.</p>
                                        </div>
                                        <div class="button-wrap mb-4">
                                            <a href="contact.html" class="th-btn th-btn-xl"> <img src="assets/img/icon/phone-white.svg" alt="icon"> Contact Us</a>
                                        </div>
                                        <div class="th-social">
                                            <a href="https://www.facebook.com/profile.php?id=61558599706737"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/carethreesixtyfive"><i class="fab fa-instagram"></i></a>
                                            
                                            
                                        </div>
                                    </div> -->
                                    <!-- <a class="icon-btn style3" href="contact.html"><img data-mask-src="assets/img/icon/arrow-right-1.svg" src="assets/img/icon/arrow-right-1.svg" alt="img"></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--==============================
Brand Area  
==============================-->

            <!-- <div class="brand-wrap1 text-center  overflow-hidden">
                <div class="container">
                    <div class="swiper th-slider" data-cue="slideInUp" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"5"}}}'>
                        <div class="swiper-wrapper">
                            <!-- <div class="swiper-slide">
                                <a href="blog.html" class="brand-box">
                                    <img src="assets/img/brand/brand1-1.svg" alt="Brand Logo">
                                </a>
                            </div> -->
                            <!-- <div class="swiper-slide">
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
                        </div> -->
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!--==============================
Careers Area  
==============================-->
    <section class="overflow-hidden space bg-smoke2" id="careers-sec">
        <div class="container">
            <div class="about-wrap1">
                <div class="row gy-40 gx-60 align-items-center">
                    <div class="col-xl-6">
                        <div class="about-thumb1" data-cue="slideInUp">
                            <div class="img1">
                                <img src="assets/img/normal/440414325-122109984758286656-9076875144893731399-n-6642f09db2f4b.webp" alt="Join Our Team">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="title-area mb-35">
                            <span class="sub-title subtitle-line text-anim" data-cue="slideInUp">Careers</span>
                            <h2 class="sec-title text-anim2" data-cue="slideInUp">Join Our Team of Compassionate Professionals</h2>
                        </div>
                        <p class="fs-18 mb-35 text-anim2" data-cue="slideInUp">Join our team of passionate professionals dedicated to enriching lives. At Care365, we offer rewarding career opportunities for those driven to make a meaningful difference through compassionate care. Explore roles that align with your expertise and values.</p>
                        <div class="btn-wrap" data-cue="slideInUp">
                            <a href="{{ route('contact') }}" class="th-btn">Join Now <span class="th-btn-icon"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    <div class="swiper th-slider has-shadow" id="testiSlide1" data-slider-options='{"autoHeight": "true","breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"2"},"1600":{"slidesPerView":"2"}}}'>
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
                                    <p class="box-text">“Although expert groomers themselves, lots of cats like being brushed and it’s a great way of bonding with your cat. As well as fewer hairballs and less shedding, grooming your cats will imitate how they groom each other naturally and for you as a result.”</p>
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
                                    <p class="box-text">“Regular brushing doesn’t just keep your cat’s coat clean it also mimics natural grooming behavior and builds a deeper sense of trust you and your furry friend. Even though cats groom themselves daily, they often enjoy the sensation of a brush. It’s not just good for.”</p>
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
                                            <p class="box-desig">Senior Software Engineer</p>
                                        </div>
                                    </div>

                                    <div class="testi-card_review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">“Brushing your cat helps reduce shedding and while giving them the same comfort and feel when being by another cat. Cats are natural self-cleaners, but they still love the extra attention. time can become a peaceful moment of between owner and pet.”</p>
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
                                            <p class="box-desig">Bank Officer</p>
                                        </div>
                                    </div>

                                    <div class="testi-card_review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">“Helping your cat stay clean through regular brushing keeps their coat healthy, and it also mimics the social receive in the wild — making you part of their “family. While your cat may be skilled at self-grooming, your touch adds boosting the between you both.”</p>
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


    

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Swiper Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Cue Js -->
    <script src="assets/js/scrollCue.min.js"></script>
    <!-- Gsap -->
    <script src="assets/js/gsap.min.js"></script>
    <!-- Scroll Trigger -->
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!-- Split Text -->
    <script src="assets/js/SplitText.min.js"></script>
    <!-- Lenis Js -->
    <script src="assets/js/lenis.min.js"></script>

    <!-- Perticle Js -->
    <script src="assets/js/particles.min.js"></script>
    <script src="assets/js/particles-config.js"></script>

    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>
</body>

</html>

