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
}