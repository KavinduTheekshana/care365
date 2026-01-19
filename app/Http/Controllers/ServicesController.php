<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ServicesController extends Controller
{
    public function index(): View
    {
        return view('frontend.services.index');
    }

    public function servicedetails(): View
    {
        return view('frontend.servicedetails.index');
    }
}