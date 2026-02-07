<div class="th-hero-wrapper hero-7" id="hero" style="height: 70vh;">

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
                        <div class="row gy-4 align-items-center justify-content-center text-center">
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
                        <div class="row gy-4 align-items-center justify-content-center text-center">
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
                        <div class="row gy-4 align-items-center justify-content-center text-center">
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
    background: rgba(0, 0, 0, 0.5);
    z-index: 1;
}

.hero-inner {
    position: relative;
    z-index: 2;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px 0;
}

.th-hero-wrapper.hero-7 .swiper-slide {
    position: relative;
    height: 70vh !important;
}

.th-hero-wrapper.hero-7 .swiper-wrapper,
.th-hero-wrapper.hero-7 .swiper-slide {
    height: 100%;
}

/* Hero titles */
.hero-title {
    font-size: 2.5rem !important;
    line-height: 1.3 !important;
    margin-bottom: 1rem !important;
}

/* Hero text */
.hero-text {
    font-size: 1.1rem !important;
    line-height: 1.6 !important;
    margin-bottom: 1.5rem !important;
}

/* Center alignment enhancements */
.text-center {
    text-align: center !important;
}

/* Ensure container takes full height */
.hero-inner .container {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.hero-inner .row {
    width: 100%;
}

/* Button responsive */
.hero-style7 .th-btn {
    padding: 12px 30px;
    font-size: 1rem;
}

/* Large tablets and small desktops */
@media (max-width: 1199px) {
    .th-hero-wrapper.hero-7 {
        height: 90vh !important;
    }

    .th-hero-wrapper.hero-7 .swiper-slide {
        height: 90vh !important;
    }
}

/* Responsive adjustments for tablets and small laptops */
@media (max-width: 1024px) {
    .hero-title {
        font-size: 2rem !important;
    }

    .hero-text {
        font-size: 1rem !important;
    }
}

/* Tablet devices */
@media (max-width: 768px) {
    .th-hero-wrapper.hero-7 {
        height: 60vh !important;
    }

    .th-hero-wrapper.hero-7 .swiper-slide {
        height: 60vh !important;
    }

    .hero-title {
        font-size: 1.6rem !important;
        margin-bottom: 0.8rem !important;
    }

    .hero-text {
        font-size: 0.95rem !important;
        margin-bottom: 1.2rem !important;
    }

    .hero-style7 .th-btn {
        padding: 10px 25px;
        font-size: 0.9rem;
    }

    .hero-inner {
        padding: 15px 0;
    }
}

/* Mobile devices */
@media (max-width: 576px) {
    .th-hero-wrapper.hero-7 {
        height: 55vh !important;
    }

    .th-hero-wrapper.hero-7 .swiper-slide {
        height: 55vh !important;
    }

    .hero-title {
        font-size: 1.3rem !important;
        line-height: 1.4 !important;
        margin-bottom: 0.6rem !important;
    }

    .hero-text {
        font-size: 0.85rem !important;
        line-height: 1.5 !important;
        margin-bottom: 1rem !important;
    }

    .hero-style7 .th-btn {
        padding: 8px 20px;
        font-size: 0.85rem;
    }

    .hero-inner {
        padding: 10px 0;
    }

    .col-xxl-8, .col-xl-9, .col-lg-10 {
        padding-left: 15px;
        padding-right: 15px;
    }
}

/* Extra small devices (320px and below) */
@media (max-width: 420px) {
    .th-hero-wrapper.hero-7 {
        height: 50vh !important;
    }

    .th-hero-wrapper.hero-7 .swiper-slide {
        height: 50vh !important;
    }

    .hero-title {
        font-size: 1.1rem !important;
        line-height: 1.4 !important;
        margin-bottom: 0.5rem !important;
    }

    .hero-text {
        font-size: 0.8rem !important;
        line-height: 1.4 !important;
        margin-bottom: 0.8rem !important;
    }

    .hero-style7 .th-btn {
        padding: 7px 18px;
        font-size: 0.8rem;
    }

    .hero-inner {
        padding: 8px 0;
    }
}

/* Very small devices (280px - old phones) */
@media (max-width: 320px) {
    .th-hero-wrapper.hero-7 {
        height: 45vh !important;
    }

    .th-hero-wrapper.hero-7 .swiper-slide {
        height: 45vh !important;
    }

    .hero-title {
        font-size: 1rem !important;
        line-height: 1.3 !important;
        margin-bottom: 0.4rem !important;
    }

    .hero-text {
        font-size: 0.75rem !important;
        margin-bottom: 0.7rem !important;
    }

    .hero-style7 .th-btn {
        padding: 6px 15px;
        font-size: 0.75rem;
    }
}

/* Slider arrows responsive */
@media (max-width: 768px) {
    .slider-arrow {
        width: 40px !important;
        height: 40px !important;
    }

    .slider-arrow img {
        width: 18px !important;
    }
}

@media (max-width: 576px) {
    .slider-arrow {
        width: 35px !important;
        height: 35px !important;
    }

    .slider-arrow img {
        width: 15px !important;
    }
}
</style>