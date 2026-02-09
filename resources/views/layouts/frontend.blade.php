<!DOCTYPE html>
<html lang="en">

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
    <meta property="og:image" content="@yield('og_image', asset('assets/img/logo.webp'))">
    <meta property="og:site_name" content="Care365">
    <meta property="og:locale" content="en_US">
    
    {{-- Twitter Card Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Care365 - Luxury Retirement Living in Sri Lanka | Elder Care Homes')">
    <meta name="twitter:description" content="@yield('meta_description', 'CARE 365: Luxury retirement living where seniors thrive with joy, independence, and exceptional care.')">
    <meta name="twitter:image" content="@yield('og_image', asset('assets/img/logo.webp'))">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- For Window Tab Color -->
    <meta name="theme-color" content="#1A4137">
    <meta name="msapplication-navbutton-color" content="#1A4137">
    <meta name="apple-mobile-web-app-status-bar-style" content="#1A4137">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/logo.webp') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/logo.webp') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/logo.webp') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/logo.webp') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/logo.webp') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/logo.webp') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/logo.webp') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/logo.webp') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/logo.webp') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/logo.webp') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/logo.webp') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/logo.webp') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logo.webp') }}">
    <link rel="manifest" href="{{ asset('assets/img/logo.webp') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/logo.webp') }}">
    
    <!--==============================
    Google Fonts
    ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Onest:wght@100..900&display=swap" rel="stylesheet">

    <!--==============================
    New fonts Added
    ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    
    <!-- CSS Files
    ================================================== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" >
    <link href="assets/css/swiper.css" rel="stylesheet" type="text/css" >
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" >
    <link href="assets/css/coloring.css" rel="stylesheet" type="text/css" >
    <!-- color scheme -->
    <link id="colors" href="assets/css/colors/scheme-01.css" rel="stylesheet" type="text/css" >



    @stack('head')
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

<body>
    <div id="wrapper">
        @include('frontend.components.popups')
        <div class="float-text show-on-scroll">
            <span><a href="#">Scroll to top</a></span>
        </div>
        <div class="scrollbar-v show-on-scroll"></div>

        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        @include('frontend.components.header')

        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

                @yield('content')


            
        </div>
        <!-- content close -->

        <!-- footer begin -->
        @include('frontend.components.footer')
        <!-- footer close -->
    </div>


    <!-- Javascript Files
    ================================================== -->
    <script src="assets/js/plugins.js" defer></script>
    <script src="assets/js/designesia.js" defer></script>
    <script src="assets/js/swiper.js" defer></script>
    <script src="assets/js/custom-marquee.js" defer></script>
    <script src="assets/js/custom-swiper-1.js" defer></script>
    <script src="assets/js/jquery.event.move.js" defer></script>
    <script src="assets/js/jquery.twentytwenty.js" defer></script>

    <script>
    $(window).on("load", function(){
      $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.5});
      $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.5, orientation: 'vertical'});
    });
    </script>

</body>



</html>