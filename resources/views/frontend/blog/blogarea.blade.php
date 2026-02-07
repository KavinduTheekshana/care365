<section class="th-blog-wrapper space-top space-extra-bottom">
    <div class="container">
        <div class="row gy-40">
            @forelse ($blogs as $blog)
                <div class="col-xl-4 col-md-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="{{ url('/' . $blog->title_slug) }}">
                                <img src="{{ image_url($blog->image_path, 'blog') }}" alt="{{ $blog->title }}">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="{{ route('blog') }}">
                                    <i class="fas fa-user"></i> {{ $blog->author ?? 'Jordan Park' }}
                                </a>
                                <a href="{{ route('blog') }}">
                                    <i class="fas fa-calendar"></i> {{ \Carbon\Carbon::parse($blog->date)->format('d M, Y') }}
                                </a>
                            </div>
                            <h3 class="box-title">
                                <a href="{{ url('/' . $blog->title_slug) }}">
                                    {{ Str::limit($blog->title, 60) }}
                                </a>
                            </h3>
                            <div class="btn-wrap">
                                <a href="{{ url('/' . $blog->title_slug) }}" class="link-btn th-btn-icon">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>No public blogs available at the moment.</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="th-pagination mt-50 text-center" data-cue="slideInUp">
            {{ $blogs->links('pagination::bootstrap-5') }}
        </div>
    </div>
</section>