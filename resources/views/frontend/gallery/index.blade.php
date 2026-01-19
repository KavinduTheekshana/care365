@extends('layouts.frontend')


<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">



<body class="bg-smoke2">

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
    <div class="breadcumb-wrapper ">
        <div class="breadcumb-bg-thumb" data-overlay="title" data-opacity="5" data-bg-src="assets/img/bg/breadcumb-bg.png"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title text-anim" data-cue="slideInUp" data-delay="100">Gallery</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Gallery Area  
==============================-->
    <div class="overflow-hidden overflow-hidden space z-index-common">
        <div class="container">
            <div class="gallery-1-wrap style2 mb-4">
                <div class="gallery-card-wrap">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gallery_1_2.jpg" alt="img">
                            <a href="assets/img/gallery/gallery_1_2.jpg" class="icon-btn th-popup-image"><i class="fa-regular fa-magnifying-glass"></i></a>
                        </div>
                    </div>
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gallery_1_3.jpg" alt="img">
                            <a href="assets/img/gallery/gallery_1_3.jpg" class="icon-btn th-popup-image"><i class="fa-regular fa-magnifying-glass"></i></a>
                        </div>
                    </div>
                </div>

                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallery_1_1.jpg" alt="img">
                        <a href="assets/img/gallery/gallery_1_1.jpg" class="icon-btn th-popup-image"><i class="fa-regular fa-magnifying-glass"></i></a>
                    </div>
                </div>
            </div>

            <div class="gallery-1-wrap style2 style1">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallery_1_4.jpg" alt="img">
                        <a href="assets/img/gallery/gallery_1_4.jpg" class="icon-btn th-popup-image"><i class="fa-regular fa-magnifying-glass"></i></a>
                    </div>
                </div>

                <div class="gallery-card-wrap">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gallery_1_5.jpg" alt="img">
                            <a href="assets/img/gallery/gallery_1_5.jpg" class="icon-btn th-popup-image"><i class="fa-regular fa-magnifying-glass"></i></a>
                        </div>
                    </div>
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gallery_1_6.jpg" alt="img">
                            <a href="assets/img/gallery/gallery_1_6.jpg" class="icon-btn th-popup-image"><i class="fa-regular fa-magnifying-glass"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    

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