<div class="th-menu-wrapper allow-natural-scroll">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ route('home') }}"><img src="assets/img/logo3.png" alt="Care 365"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('about') }}">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">About Us 1</a></li>
                            <li><a href="service-details.html">Bout us 2</a></li>
                        </ul>
                    </li>                   
                    <li><a href="{{route('services')}}">Services</a></li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>


<style>
    .mobile-logo {
    padding: 10px 15px;     /* ← small vertical padding so it doesn't eat space */
    text-align: center;
}

.mobile-logo img {
    height: 48px;           /* base height for most mobiles — adjust 40–55px */
    max-height: 55px;       /* won't grow bigger than this on larger phones */
    width: auto;            /* keeps original proportions */
    max-width: 80%;         /* prevents overflow on very narrow screens */
    object-fit: contain;    /* keeps logo sharp, no distortion */
    display: block;
    margin: 0 auto;
}

/* Extra safety for very small screens (like iPhone SE) */
@media (max-width: 360px) {
    .mobile-logo img {
        height: 40px;       /* even smaller on tiny phones */
        max-height: 45px;
    }
}

/* For medium mobiles / foldables (optional) */
@media (min-width: 500px) and (max-width: 767px) {
    .mobile-logo img {
        height: 52px;       /* slightly bigger on wider mobiles */
    }
}
</style>