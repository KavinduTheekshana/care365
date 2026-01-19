<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PackagesController extends Controller
{
    /**
     * Show the Packages / Pricing page
     */
    public function index(): View
    {
        return view('frontend.packages.index');
    }

}