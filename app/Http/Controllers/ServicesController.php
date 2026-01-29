<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Service;
use App\Models\Faq;
use App\Models\Package;
use App\Models\Event;




class ServicesController extends Controller
{
    
    // In your existing controller method, add events
    public function index(): View
    {
        $services = Service::where('is_public', true)
                          ->orderBy('created_at', 'desc')
                          ->get();
        
        // Get packages with their features
        $packages = Package::with(['features' => function($query) {
            $query->where('is_active', true);
        }])
        ->where('status', 'active')
        ->orderBy('price_lkr', 'asc')
        ->get();
        
        // Get random 5 FAQs for services page if needed
        $faqs = Faq::where('visibility', true)
                   ->inRandomOrder()
                   ->take(5)
                   ->get();
        
        // Get all months with their themes for the calendar
        $months = [
            'January' => 'New Beginnings',
            'February' => 'Health & Wellness',
            'March' => 'Spring Activities',
            'April' => 'Easter Celebrations',
            'May' => 'Family Month',
            'June' => 'Charity & Pride',
            'July' => 'Community',
            'August' => 'Spreading Love',
            'September' => 'Autumn Joy',
            'October' => 'The Environment',
            'November' => 'Wellbeing',
            'December' => 'Celebrating'
        ];
        
        return view('frontend.services.index', compact('services', 'faqs', 'packages', 'months'));
    }

    public function servicedetails($slug = null): View
    {
        // If no slug provided, show first service or 404
        if (!$slug) {
            $service = Service::where('is_public', true)->first();
            if (!$service) {
                abort(404);
            }
            return redirect()->route('servicedetails', ['slug' => $service->title_slug]);
        }
        
        // Find service by slug
        $service = Service::where('title_slug', $slug)
                         ->where('is_public', true)
                         ->firstOrFail();
        
        // Get related services (excluding current one)
        $relatedServices = Service::where('is_public', true)
                                 ->where('id', '!=', $service->id)
                                 ->inRandomOrder()
                                 ->take(3)
                                 ->get();
        
        return view('frontend.servicedetails.index', compact('service', 'relatedServices'));
    }



}