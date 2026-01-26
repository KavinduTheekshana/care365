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
                                <li class="{{ request()->routeIs('services') ? 'active' : '' }}">
                                    <a href="{{route('services')}}">Services</a>
                                </li>

                                <li class="{{ request()->routeIs('gallery') ? 'active' : '' }}">
                                    <a href="{{route('gallery')}}">Gallery</a>
                                </li>
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

<style>
.main-menu > ul > li.active > a {
    color: #3A8DCA !important;
}

.main-menu > ul > li.active.menu-item-has-children > a:after {
    color: #3A8DCA;           
}

/* Smooth scroll behavior */
html {
    scroll-behavior: smooth;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all scroll links
    const scrollLinks = document.querySelectorAll('.scroll-link');
    
    scrollLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            const url = new URL(href, window.location.origin);
            
            // Check if we're on the same page
            if (url.pathname === window.location.pathname) {
                e.preventDefault();
                
                // Get the hash/ID
                const targetId = url.hash.substring(1);
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    // Smooth scroll to the element
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Update URL without triggering scroll
                    history.pushState(null, '', href);
                }
            }
            // If not on the same page, allow normal navigation
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
        }, 100);
    }
});
</script>