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
        
        // Get random 8 FAQs with visibility
        $faqs = Faq::where('visibility', true)
                   ->inRandomOrder()
                   ->take(8)
                   ->get();
        
        // Get random 4 public testimonials for slider (2 slides on desktop)
        $testimonials = Testimonial::where('is_public', true)
                                  ->inRandomOrder()
                                  ->take(4)
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