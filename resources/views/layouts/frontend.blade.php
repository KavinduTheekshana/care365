<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    {{-- Dynamic Title --}}
    <title>@yield('title', 'Care365 - Luxury Retirement Living in Sri Lanka | Elder Care Homes')</title>
    
    {{-- Basic Meta Tags --}}
    <meta name="author" content="@yield('meta_author', 'Care365')">
    <meta name="description" content="@yield('meta_description', 'CARE 365: Luxury retirement living where seniors thrive with joy, independence, and exceptional care. We provide compassionate and personalized care for seniors in a warm and home-like environment in Sri Lanka.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Elder care homes in Sri Lanka, Elderly homes in Sri Lanka, Best retirement homes for seniors in Sri Lanka, Elder care, senior living facilities Sri Lanka, 24/7 medical elder care in Sri Lanka, Safe and secure elder care homes, Affordable luxury senior care Sri Lanka, Trusted elder care for Sri Lanka, Senior living with luxury amenities Sri Lanka, Senior Care facilities')">
    <meta name="robots" content="INDEX,FOLLOW">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}" />

    {{-- Open Graph Meta Tags --}}
    <meta property="og:title" content="@yield('title', 'Care365 - Luxury Retirement Living in Sri Lanka | Elder Care Homes')">
    <meta property="og:description" content="@yield('meta_description', 'CARE 365: Luxury retirement living where seniors thrive with joy, independence, and exceptional care. We provide compassionate and personalized care for seniors in a warm and home-like environment in Sri Lanka.')">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('assets/img/logo.png'))">
    <meta property="og:site_name" content="Care365">
    <meta property="og:locale" content="en_US">
    
    {{-- Twitter Card Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Care365 - Luxury Retirement Living in Sri Lanka | Elder Care Homes')">
    <meta name="twitter:description" content="@yield('meta_description', 'CARE 365: Luxury retirement living where seniors thrive with joy, independence, and exceptional care.')">
    <meta name="twitter:image" content="@yield('og_image', asset('assets/img/logo.png'))">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- For Window Tab Color -->
    <meta name="theme-color" content="#1A4137">
    <meta name="msapplication-navbutton-color" content="#1A4137">
    <meta name="apple-mobile-web-app-status-bar-style" content="#1A4137">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/logo.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/logo.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/logo.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/logo.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/logo.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/logo.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/logo.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logo.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/logo.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/logo.png') }}">
    
    <!--==============================
    Google Fonts
    ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Onest:wght@100..900&display=swap" rel="stylesheet">

    <!--==============================
    All CSS File
    ============================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/preloader.css') }}">
    @stack('styles')

    {{-- Schema.org Markup for Local Business --}}
    @verbatim
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "NursingHome",
    "name": "Care365",
    "description": "Luxury retirement living where seniors thrive with joy, independence, and exceptional care in Sri Lanka.",
    "url": "{{ url('/') }}",
    "telephone": "0779191818",
    "address": {
        "@type": "PostalAddress",
        "addressCountry": "LK"
    },
    "sameAs": [
        "https://www.facebook.com/Care36t5"
    ]
    }
    </script>
    @endverbatim
</head>

<body class="bg-smoke2">

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Preloader -->
    @include('frontend.components.preloader')

    <!--********************************
    Code Start From Here
    ******************************** -->
    <div class="cursor-follower"></div>

    @include('frontend.components.mobile-header')
    @include('frontend.components.header')
    @yield('content')
    @include('frontend.components.footer')

    <!--********************************
    Code End  Here
    ******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <!--==============================
    All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <!-- Swiper Js -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Cue Js -->
    <script src="{{ asset('assets/js/scrollCue.min.js') }}"></script>
    <!-- Gsap -->
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <!-- Scroll Trigger -->
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- Split Text -->
    <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
    <!-- Lenis Js -->
    <script src="{{ asset('assets/js/lenis.min.js') }}"></script>
    <!-- Perticle Js -->
    <script src="{{ asset('assets/js/particles.min.js') }}"></script>
    <script src="{{ asset('assets/js/particles-config.js') }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Preloader Js -->
    <script src="{{ asset('assets/js/preloader.js') }}"></script>
    @stack('scripts')
</body>

</html>