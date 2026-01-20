<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        // Get public blogs, limit to 6
        $blogs = Blog::where('is_public', true)
                    ->orderBy('date', 'desc')
                    ->take(3)
                    ->get();
        
        // Get FAQs with visibility (adjust condition as needed)
        $faqs = Faq::where('visibility', true) // or your visibility condition
                   ->orderBy('created_at', 'desc')
                   ->get();
        
        // Get public testimonials
        $testimonials = Testimonial::where('is_public', true)
                                  ->orderBy('created_at', 'desc')
                                  ->get();
        
        // Get public services
        $services = Service::where('is_public', true)
                          ->orderBy('created_at', 'desc')
                          ->take(6)
                          ->get();
        
        // Return view with all data
        return view('frontend.home.index', compact('blogs', 'faqs', 'testimonials', 'services'));
    }
}