<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Service;
use App\Models\Whoweare;
use App\Models\CareHome;
use App\Models\Testimonial;


class AboutUsController extends Controller
{
    public function index(): View
    {
        // Get random 8 services for the slider
        $services = Service::where('is_public', true)
                          ->inRandomOrder()
                          ->take(8)
                          ->get();
        
        // Get all public Who We Are items ordered by display_order
        $whoweares = Whoweare::where('is_public', true)
                            ->orderBy('display_order')
                            ->get();
        

        $testimonials = Testimonial::where('is_public', true)
                            ->inRandomOrder()
                             ->take(4)
                            ->get();
        
        return view('frontend.about.index', compact('services', 'whoweares',  'testimonials'));
    }
}