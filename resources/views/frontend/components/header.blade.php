 <header class="th-header header-default">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
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
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="service.html">Services</a></li>
            
                                    <li><a href="error.html">Error Page</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
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
                                {{-- <a href="contact.html" class="th-btn style-border">Book Now</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>