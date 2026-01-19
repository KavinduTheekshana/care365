<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('frontend.blog.index');
    }

    public function blogdetails(): View
    {
        return view('frontend.blogdetails.index');
    }
}