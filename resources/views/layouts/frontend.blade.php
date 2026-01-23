<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <!-- Dynamic Meta Tags -->
    <title>{{ $pageTitle ?? 'Care365 - The Best Elderly Retirement Home For You' }}</title>
    <meta name="author" content="{{ $metaAuthor ?? 'Babet' }}">
    <meta name="description" content="{{ $metaDescription ?? 'The Best Elderly Retirement Home For You' }}">
    <meta name="keywords" content="{{ $metaKeywords ?? 'elderly care, retirement home, senior living, elderly retirement home' }}">
    <meta name="robots" content="{{ $metaRobots ?? 'INDEX,FOLLOW' }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="{{ $ogType ?? 'website' }}">
    <meta property="og:url" content="{{ $ogUrl ?? url()->current() }}">
    <meta property="og:title" content="{{ $ogTitle ?? $pageTitle ?? 'Care365 - The Best Elderly Retirement Home For You' }}">
    <meta property="og:description" content="{{ $ogDescription ?? $metaDescription ?? 'The Best Elderly Retirement Home For You' }}">
    
    <!-- Dynamic OG Image: Use blog image for blog pages, logo for others -->
    @isset($ogImage)
        <meta property="og:image" content="{{ $ogImage }}">
    @elseif(isset($blog) && $blog->image_path)
        <!-- For blog detail pages, use blog image -->
        <meta property="og:image" content="{{ asset('blog_img/' . $blog->image_path) }}">
    @else
        <!-- For all other pages, use logo -->
        <meta property="og:image" content="{{ asset('assets/img/logo.png') }}">
    @endisset
    
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Care365">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $twitterTitle ?? $pageTitle ?? 'Care365 - The Best Elderly Retirement Home For You' }}">
    <meta name="twitter:description" content="{{ $twitterDescription ?? $metaDescription ?? 'The Best Elderly Retirement Home For You' }}">
    
    <!-- Dynamic Twitter Image -->
    @isset($twitterImage)
        <meta name="twitter:image" content="{{ $twitterImage }}">
    @elseif(isset($blog) && $blog->image_path)
        <meta name="twitter:image" content="{{ asset('blog_img/' . $blog->image_path) }}">
    @else
        <meta name="twitter:image" content="{{ asset('assets/img/logo.png') }}">
    @endisset
    
    <meta name="twitter:site" content="@care365">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
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
    <meta name="theme-color" content="#ffffff">
    
    {{-- @vite(['', 'resources/js/app.js']) --}}
    
    <!--==============================
    Google Fonts
    ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Onest:wght@100..900&display=swap"
        rel="stylesheet">

    <!--==============================
    All CSS File
    ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!-- Preloader CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/preloader.css') }}">
    @stack('styles')

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

    <!-- slider drag cursor -->
    <!-- <div class="slider-drag-cursor"> DRAG </div> -->

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
    <!-- Particle Js -->
    <script src="{{ asset('assets/js/particles.min.js') }}"></script>
    <script src="{{ asset('assets/js/particles-config.js') }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Preloader Js -->
    <script src="{{ asset('assets/js/preloader.js') }}"></script>
    @stack('scripts')
</body>

</html>