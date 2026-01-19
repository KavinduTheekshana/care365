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
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper bg-smoke2">
        <div class="breadcumb-bg-thumb" data-overlay="title" data-opacity="5" data-bg-src="assets/img/bg/breadcumb-bg.png"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title text-anim" data-cue="slideInUp" data-delay="100">Customer Testimonials</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Testimonials</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Testimonial Area  
==============================-->
    <section class="testi-area-1 space overflow-hidden bg-smoke2" id="testi-sec">
        <div class="container">
            <div class="row gy-4 flex-row-reverse">
                <div class="col-lg-6">
                    <div class="testi-card style3">
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
                <div class="col-lg-6">
                    <div class="testi-card style3">
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
                <div class="col-lg-6">
                    <div class="testi-card style3">
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
                        <p class="box-text">"Eager to explore options for my loved one's care, I stumbled upon ElderCare's digital platform. Little did I know, this virtual portal would become my lifeline, offering a wealth of information and support as I navigated the journey ahead."</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testi-card style3">
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