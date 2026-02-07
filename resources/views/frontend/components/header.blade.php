<header class="header-light">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ route('home') }}">
                                <img src="logo/care365_light.svg" alt="Care 365">
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
                                    <li><a class="menu-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Care Services</a>
                                        <ul>
                                            <li><a class="menu-item" href="{{ route('services') }}" class="scroll-link">Our Services</a></li>
                                            <li><a class="menu-item" href="{{ route('services') }}#Meal-Plan" class="scroll-link">Meals & Nutrition</a></li>
                                        </ul>
                                    </li>  
                                    <li><a class="menu-item {{ request()->routeIs('wecare') ? 'active' : '' }}" href="{{ route('wecare') }}">Care Options</a>
                                        <ul>
                                            <li><a class="menu-item" href="{{ route('wecare') }}#Packages" class="scroll-link">Packages & Pricing</a></li>
                                            <li><a class="menu-item" href="{{ route('wecare') }}#Admissions-Process" class="scroll-link">Admissions Process</a></li>
                                            <li><a class="menu-item" href="{{ route('wecare') }}#homes" class="scroll-link">Our Homes (Locations)</a></li>
                                        </ul>
                                    </li>    
                                    <li><a class="menu-item {{ request()->routeIs('digitalwellbeing') ? 'active' : '' }}" href="{{ route('digitalwellbeing') }}">Explore</a>
                                        <ul>
                                            <li><a class="menu-item" href="{{ route('gallery') }}" class="scroll-link">Gallery</a></li>
                                            <li><a class="menu-item" href="{{ route('digitalwellbeing') }}#News-Center" class="scroll-link">News & Updates</a></li>
                                            <li><a class="menu-item" href="{{ route('faq') }}" class="scroll-link">FAQ</a></li>
                                            <li><a class="menu-item" href="{{ route('digitalwellbeing') }}#Calander" class="scroll-link">Calander</a></li>
                                        </ul>
                                    </li>                                                                    

                                    <li><a class="menu-item {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>

                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <div class="h-phone xs-hide">
                                        <span>Need Help?</span>
                                        <h5>(+94)77 660 40 40</h5>
                                    </div>    
                                    <a href="{{ route('contact') }}" class="btn-main">Book Service Now</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('#mainmenu a');
    const menuBtn = document.getElementById('menu-btn');
    
    menuItems.forEach(function(item) {
        item.addEventListener('click', function(e) {
            if (window.innerWidth <= 991) {
                // Small delay for smooth scrolling to work
                setTimeout(function() {
                    menuBtn.click(); // Trigger menu close
                }, 100);
            }
        });
    });
});
</script>