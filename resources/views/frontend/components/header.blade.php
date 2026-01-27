<header class="th-header header-default">
    <div class="sticky-wrapperr">
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
                                <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="menu-item-has-children {{ request()->routeIs('about*') ? 'active' : '' }}">
                                    <a href="{{ route('about') }}">About Us</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('about') }}#who-we-are" class="scroll-link">Who We Are</a></li>
                                        <li><a href="{{ route('about') }}#how-we-work" class="scroll-link">How We Work</a></li>
                                        <li><a href="{{ route('about') }}#our-homes" class="scroll-link">Our Homes</a></li>
                                    </ul>
                                </li>
                                <!--
                                <li class="menu-item-has-children {{ request()->routeIs('services') ? 'active' : '' }}">
                                    <a href="{{route('services')}}">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('services') }}#Packages" class="scroll-link">Packages</a></li>
                                            <li><a href="{{ route('services') }}#Calander" class="scroll-link">Calander</a></li>
                                        </ul>
                                </li>
                                -->
                                <li class="menu-item-has-children {{ request()->routeIs('wecare') ? 'active' : '' }}">
                                    <a href="{{route('wecare')}}">We Care</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('wecare') }}#Packages" class="scroll-link">Packages</a></li>
                                            <li><a href="{{ route('services') }}" class="scroll-link">Services</a></li>
                                            <li><a href="{{ route('wecare') }}#FAQ" class="scroll-link">FAQ</a></li>
                                            <li><a href="{{ route('wecare') }}#Admissions" class="scroll-link">Admissions</a></li>
                                            <li><a href="{{ route('wecare') }}#Meal-Plan" class="scroll-link">Meal-Plan</a></li>
                                        </ul>
                                </li>

                                <li class="menu-item-has-children {{ request()->routeIs('digitalwellbeing') ? 'active' : '' }}">
                                    <a href="{{route('digitalwellbeing')}}">Digital Wellbeing</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('digitalwellbeing') }}#News-Center" class="scroll-link">News-Center</a></li>
                                            <li><a href="{{ route('digitalwellbeing') }}#Calander" class="scroll-link">Calander</a></li>
                                            <li><a href="{{route('gallery')}}" class="scroll-link">Gallery</a></li>
                                            <li><a href="{{ route('digitalwellbeing') }}#Online-Admissions" class="scroll-link">Online-Admissions</a></li>
                                        </ul>
                                </li>
                                <!--
                                <li class="{{ request()->routeIs('gallery') ? 'active' : '' }}">
                                    <a href="{{route('gallery')}}">Gallery</a>
                                </li>
                                -->
                                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>

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

<!-- Mobile Menu -->


<style>
.main-menu > ul > li.active > a {
    color: #3A8DCA !important;
}

.main-menu > ul > li.active.menu-item-has-children > a:after {
    color: #3A8DCA;           
}

.mobile-logo {
    padding: 18px 15px 14px;   
    text-align: center;
}

.mobile-logo img {
    width: auto;
    max-width: 90%;
    object-fit: contain;
    display: block;
    margin: 0 auto;
}

/* Small phones safety net */
@media (max-width: 380px) {
    .mobile-logo img {
        max-height: 100px;
    }
}

/* Larger / wider mobile screens */
@media (min-width: 420px) {
    .mobile-logo img {
        height: 100px;
    }
}

/* Smooth scroll behavior */
html {
    scroll-behavior: smooth;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    
    // Function to close mobile menu
    function closeMobileMenu() {
        const menuWrapper = document.querySelector('.th-menu-wrapper');
        const body = document.body;
        const closeButton = document.querySelector('.th-menu-wrapper .th-menu-toggle');
        
        // Remove classes
        if (menuWrapper) {
            menuWrapper.classList.remove('active');
            menuWrapper.classList.remove('open');
        }
        
        if (body) {
            body.classList.remove('th-body-visible');
            body.classList.remove('mobile-menu-active');
            body.classList.remove('overflow-hidden');
        }
        
        // Trigger click on close button (most reliable)
        if (closeButton) {
            closeButton.click();
        }
    }
    
    // Function to handle smooth scrolling
    function handleSmoothScroll(e, link, isMobile = false) {
        const href = link.getAttribute('href');
        const url = new URL(href, window.location.origin);
        
        // Check if we're on the same page
        if (url.pathname === window.location.pathname) {
            e.preventDefault();
            
            // Close mobile menu if it's a mobile link
            if (isMobile) {
                closeMobileMenu();
            }
            
            // Get the hash/ID
            const targetId = url.hash.substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                // Delay for mobile to let menu close
                const delay = isMobile ? 300 : 0;
                
                setTimeout(() => {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Update URL without triggering scroll
                    history.pushState(null, '', href);
                }, delay);
            }
        } else {
            // If navigating to different page and mobile, close menu
            if (isMobile) {
                closeMobileMenu();
            }
        }
    }
    
    // Handle DESKTOP scroll links
    const desktopScrollLinks = document.querySelectorAll('.main-menu .scroll-link');
    desktopScrollLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            handleSmoothScroll(e, this, false);
        });
    });
    
    // Handle MOBILE scroll links
    const mobileScrollLinks = document.querySelectorAll('.th-mobile-menu .scroll-link');
    mobileScrollLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            handleSmoothScroll(e, this, true);
        });
    });
    
    // Handle scroll on page load if there's a hash in URL
    if (window.location.hash) {
        setTimeout(() => {
            const targetId = window.location.hash.substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }, 500);
    }
});
</script>