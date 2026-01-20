<header class="th-header header-default" 
        style="background: transparent !important; position: fixed !important; top: 0 !important; left: 0 !important; width: 100% !important; z-index: 1000 !important;">    <div class="sticky-wrapper" style="background: transparent !important;">
        <div class="menu-area" style="background: transparent !important;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ route('home') }}">
                                    <img src="assets/img/logo.png" alt="Care 365">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto me-xxl-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{route('services')}}">Services</a></li>
                                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                                    <li><a href="{{route('testimonial')}}">Testimonial</a></li>
                                    <li><a href="{{route('faq')}}">FAQ'S</a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </nav>
                            <div class="header-button d-flex d-lg-none">
                                <button type="button" class="th-menu-toggle icon-btn"><i
                                        class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-xl-block d-none">
                            <div class="header-button">
                                <div class="info-card">
                                    <div class="box-icon">
                                        <img src="assets/img/icon/phone-white.svg" alt="phon-icon">
                                    </div>
                                    <div class="box-content">
                                        <h4 class="box-title text-white">Call us: </h4>
                                        <p class="box-text"><a class="text-white" href="tel:94776604040">(+94)77 660
                                                40 40</a></p>
                                    </div>
                                </div>
                                {{-- <a href="{{ route('contact') }}" class="th-btn style-border">Book Now</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <script>
document.addEventListener("DOMContentLoaded", function() {
    const header = document.querySelector("header.th-header");
    if (!header) {
        console.log("Header element not found");
        return;
    }

    let prevScrollpos = window.scrollY;

    window.onscroll = function() {
        const currentScrollPos = window.scrollY;

        // Show when scrolling up, or when near top (< 100px)
        if (prevScrollpos > currentScrollpos || currentScrollPos < 100) {
            header.style.top = "0px";
        } else {
            header.style.top = "-120px"; // ← adjust this to your header's height
        }

        prevScrollpos = currentScrollPos;
    };
});
</script>