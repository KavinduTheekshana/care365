<div class="th-menu-wrapper allow-natural-scroll">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('home') }}"><img src="assets/img/logo3.png" alt="Care 365"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="menu-item-has-children">
                    <a href="{{ route('about') }}">About Us</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('about') }}" class="scroll-link mobile-scroll-link">About Us</a></li>
                        <li><a href="{{ route('about') }}#who-we-are" class="scroll-link mobile-scroll-link">Who We Are</a></li>
                        <li><a href="{{ route('about') }}#how-we-work" class="scroll-link mobile-scroll-link">How We Work</a></li>
                        <li><a href="{{ route('about') }}#our-homes" class="scroll-link mobile-scroll-link">Our Homes</a></li>
                    </ul>
                </li>                   
                <li><a href="{{route('services')}}">Services</a></li>
                <li><a href="{{route('gallery')}}">Gallery</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>