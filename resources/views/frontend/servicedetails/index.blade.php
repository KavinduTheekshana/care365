@extends('layouts.frontend')
@section('content')

    <div class="breadcumb-wrapper bg-smoke2">
        <div class="breadcumb-bg-thumb" data-overlay="title" data-opacity="5" data-bg-src="assets/img/bg/breadcumb-bg.png"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title text-anim" data-cue="slideInUp" data-delay="100">{{ $service->title }}</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li>{{ $service->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-smoke2 space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-60">
                <div class="col-xl-8 col-lg-7">
                    <div class="page-single">
                        @if($service->image_path)
                        <div class="mb-4">
                            <img src="{{ asset('services_img/' . $service->image_path) }}" alt="{{ $service->title }}" class="img-fluid rounded">
                        </div>
                        @endif
                        
                        <h3 class="mb-3">Service Overview</h3>
                        <div class="mb-4">
                            {!! nl2br(e($service->description)) !!}
                        </div>
                        
                        @if($relatedServices->count() > 0)
                        <h4 class="mb-3">Related Services</h4>
                        <div class="row gy-3">
                            @foreach($relatedServices as $relatedService)
                            <div class="col-md-4">
                                <div class="related-service-card">
                                    @if($relatedService->image_path)
                                    <img src="{{ asset('services_img/' . $relatedService->image_path) }}" alt="{{ $relatedService->title }}" class="img-fluid mb-2">
                                    @endif
                                    <h5>
                                        <a href="{{ route('servicedetails', $relatedService->title_slug) }}">
                                            {{ $relatedService->title }}
                                        </a>
                                    </h5>
                                    <p>{{ Str::limit($relatedService->description, 100) }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <aside class="sidebar-area sidebar-sticky rounded-0 p-0 bg-transparent">
                        <div class="widget widget_banner" data-bg-src="assets/img/widget/widget-banner.png">
                            <div class="widget-banner text-center">
                                <h3 class="title">Need Help? We Are Here To Help You</h3>
                                <div class="logo"><img src="assets/img/logo3.png" alt="Care 365"></div>
                                <h4 class="subtitle">You Get Online Support</h4>
                                <h5 class="link"><a href="tel:256214203215">+9477 660 40 40</a></h5>
                                <a href="{{ route('contact') }}" class="th-btn">Get A Quote</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection