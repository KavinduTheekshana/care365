<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index(): View
    {
        $galleries = Gallery::orderBy('id', 'desc')->get();
        
        $categories = Gallery::select('category_name')
            ->distinct()
            ->orderBy('category_name')
            ->pluck('category_name');
        
        return view('frontend.gallery.index', compact('galleries', 'categories'));
    }
}