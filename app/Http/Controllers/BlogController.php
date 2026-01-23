<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(): View
    {
        // Get all public blogs, ordered by date
        $blogs = Blog::where('is_public', true)
                    ->orderBy('date', 'desc')
                    ->paginate(9);
        
        return view('frontend.blog.index', compact('blogs'));
    }

    public function blogdetails(Blog $blog): View
    {
        // Eager load relationships to prevent N+1 queries
        $blog->load(['category', 'tags']);
        
        // Get related blogs from same category (excluding current one)
        $relatedBlogs = Blog::where('is_public', true)
                        ->where('id', '!=', $blog->id)
                        ->when($blog->category_id, function($query) use ($blog) {
                            return $query->where('category_id', $blog->category_id);
                        })
                        ->inRandomOrder()
                        ->take(3)
                        ->with('category')
                        ->get();
        
        // Prepare SEO meta data for blog detail page
        $meta_title = $blog->meta_title ?: ($blog->title . ' - Care365');
        $meta_description = $blog->meta_description ?: \Illuminate\Support\Str::limit(strip_tags($blog->description), 160);
        $meta_keywords = $blog->meta_keywords ?: ($blog->tags->pluck('name')->implode(', ') ?: 'care365, elderly care, retirement home');
        
        // IMPORTANT: OG Image uses blog's image_path for blog detail pages
        $og_image = $blog->image_path 
            ? asset('blog_img/' . $blog->image_path) 
            : asset('assets/img/logo.png');
        
        $og_type = 'article';
        
        return view('frontend.blogdetails.index', compact(
            'blog', 
            'relatedBlogs',
            'meta_title',
            'meta_description',
            'meta_keywords',
            'og_image',
            'og_type'
        ));
    }
}