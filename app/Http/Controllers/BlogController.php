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

    public function blogdetails($id): View
    {
        // Find blog by ID
        $blog = Blog::where('id', $id)
                   ->where('is_public', true)
                   ->firstOrFail();
        
        // Get related blogs (excluding current one)
        $relatedBlogs = Blog::where('is_public', true)
                           ->where('id', '!=', $id)
                           ->inRandomOrder()
                           ->take(3)
                           ->get();
        
        return view('frontend.blogdetails.index', compact('blog', 'relatedBlogs'));
    }
}