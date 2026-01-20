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
                    ->paginate(5);
        
        return view('frontend.blog.index', compact('blogs'));
    }

    public function blogdetails(Blog $blog): View
    {
        // Laravel automatically finds the blog by title_slug
        // Get related blogs (excluding current one)
        $relatedBlogs = Blog::where('is_public', true)
                           ->where('id', '!=', $blog->id)
                           ->inRandomOrder()
                           ->take(3)
                           ->get();
        
        return view('frontend.blogdetails.index', compact('blog', 'relatedBlogs'));
    }
}