<div class="th-hero-wrapper hero-7 " id="hero" style="height: 95vh; ">

        <div class="hero-left-social">
            <ul>
                <li><span class="hero-border"></span></li>
                <li class="follow-text">
                    <h6>FOLLOW US -</h6>
                </li>
                <li><a href="https://www.facebook.com/Care36t5"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>


        <div class="swiper th-slider" id="heroSlider8" data-slider-options='{"effect":"fade", "autoplay":true, "autoHeight": "true"}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="th-hero-bg" data-bg-src="assets/img/Home-img/personalized-care-tailoring-services-to-individual-needs-hero-1.jpg"></div>
                    <div class="hero-overlay"></div>
                    <div class="hero-inner">
                        <div class="container th-container2">
                            <div class="row gy-4 gx-40 align-items-center justify-content-center">
                                <div class="col-xxl-8 col-xl-9 col-lg-10">
                                    <div class="hero-style7">
                                        <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">A Home Away From Home for Your Loved Ones</h1>
                                        <p class="hero-text" data-ani="slideinup" data-ani-delay="0.6s">Safe, comfortable assisted living with personalized senior care</p>
                                        <div data-ani="slideinup" data-ani-delay="0.10">
                                            <a href="{{ route('contact') }}" class="th-btn th-btn-icon2">Get Started <i class="far fa-long-arrow-right ms-3"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="th-hero-bg" data-bg-src="assets/img/Home-img/615b679fef36ca74d291148e_Depositphotos_25178721_L.jpg"></div>
                    <div class="hero-overlay"></div>
                    <div class="hero-inner">
                        <div class="container th-container2">
                            <div class="row gy-4 gx-40 align-items-center justify-content-center">
                                <div class="col-xxl-8 col-xl-9 col-lg-10">
                                    <div class="hero-style7">
                                        <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Where Golden Years Find Peace and Comfort</h1>
                                        <p class="hero-text" data-ani="slideinup" data-ani-delay="0.6s">Compassionate senior living with dignity, respect, and joy</p>
                                        <div data-ani="slideinup" data-ani-delay="0.10">
                                            <a href="{{ route('contact') }}" class="th-btn th-btn-icon2">Get Started <i class="far fa-long-arrow-right ms-3"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="th-hero-bg" data-bg-src="assets/img/Home-img/Personalized-Care-Plans.jpg"></div>
                    <div class="hero-overlay"></div>
                    <div class="hero-inner">
                        <div class="container th-container2">
                            <div class="row gy-4 gx-40 align-items-center justify-content-center">
                                <div class="col-xxl-8 col-xl-9 col-lg-10">
                                    <div class="hero-style7">
                                        <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Personalized Care Tailored to Individual Needs</h1>
                                        <p class="hero-text" data-ani="slideinup" data-ani-delay="0.6s">Comprehensive support for physical, emotional, and social well-being</p>
                                        <div data-ani="slideinup" data-ani-delay="0.10">
                                            <a href="{{ route('contact') }}" class="th-btn th-btn-icon2">Get Started <i class="far fa-long-arrow-right ms-3"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button data-slider-prev="#serviceSlider1" class="slider-arrow style-border2 slider-prev">
                <img data-mask-src="assets/img/icon/arrow-left.svg" src="assets/img/icon/arrow-left.svg" alt="img">
            </button>
            <button data-slider-next="#serviceSlider1" class="slider-arrow style-border2 slider-next">
                <img data-mask-src="assets/img/icon/arrow-right.svg" src="assets/img/icon/arrow-right.svg" alt="img">
            </button>
        </div>
    </div>

<style>
.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Dark overlay with 50% opacity */
    z-index: 1;
}

.hero-inner {
    position: relative;
    z-index: 2; /* Ensures text appears above overlay */
}

.swiper-slide {
    position: relative;
}
</style>