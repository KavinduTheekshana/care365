<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class WeCareController extends Controller
{
    /**
     * Display the We Care page
     */
    public function index()
    {
        // Get packages with their features
        $packages = Package::with(['features' => function($query) {
            $query->where('is_active', true);
        }])
        ->where('status', 'active')
        ->orderBy('price_lkr', 'asc')
        ->get();


        return view('frontend.wecare.index', compact('packages'));

    }
}
