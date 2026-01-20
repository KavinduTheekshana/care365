<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Service;

class AboutUsController extends Controller
{
    public function index(): View
    {
        // Get random 8 services for the slider
        $services = Service::where('is_public', true)
                          ->inRandomOrder()
                          ->take(8)
                          ->get();
        
        return view('frontend.about.index', compact('services'));
    }
}