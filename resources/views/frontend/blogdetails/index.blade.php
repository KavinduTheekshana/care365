@extends('layouts.frontend')
@section('content')

<div class="breadcumb-wrapper">
    <div class="breadcumb-bg-thumb" data-overlay="title" data-opacity="5" data-bg-src="assets/img/bg/breadcumb-bg.png"></div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title text-anim" data-cue="slideInUp" data-delay="100">{{ $blog->title }}</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li>{{ Str::limit($blog->title, 30) }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="th-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
        <div class="th-blog blog-single" data-cue="slideInUp">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="title-area text-center">
                        <span class="sub-title style2 text-anim" data-cue="slideInUp">{{ $blog->name }}</span>
                        <h2 class="sec-title text-anim2" data-cue="slideInUp">{{ $blog->title }}</h2>
                    </div>
                </div>
            </div>
            
            @if($blog->image_path)
            <div class="blog-inner-img mb-55">
                <img src="{{ asset('blog_img/' . $blog->image_path) }}" alt="{{ $blog->title }}">
                <div class="blog-meta">
                    <span><i class="fas fa-user"></i>{{ $blog->name }}</span>
                    <span><i class="fas fa-calendar"></i>{{ $blog->date->format('d M, Y') }}</span>
                </div>
            </div>
            @endif
            
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="blog-content">
                        <div class="blog-description">
                            {!! nl2br(e($blog->description)) !!}
                        </div>
                        
                        @if($relatedBlogs->count() > 0)
                        <div class="related-blogs mt-60 pt-5 border-top">
                            <h3 class="mb-4">Related Articles</h3>
                            <div class="row gy-4">
                                @foreach($relatedBlogs as $relatedBlog)
                                <div class="col-md-4">
                                    <div class="related-blog-card">
                                        @if($relatedBlog->image_path)
                                        <img src="{{ asset('blog_img/' . $relatedBlog->image_path) }}" 
                                             alt="{{ $relatedBlog->title }}" 
                                             class="img-fluid mb-3 rounded">
                                        @endif
                                        <h5>
                                            <a href="{{ url('/' . $relatedBlog->title_slug) }}">
                                                {{ $relatedBlog->title }}
                                            </a>
                                        </h5>
                                        <div class="blog-meta small">
                                            <span><i class="fas fa-user"></i>{{ $relatedBlog->name }}</span>
                                            <span><i class="fas fa-calendar"></i>{{ $relatedBlog->date->format('d M, Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection