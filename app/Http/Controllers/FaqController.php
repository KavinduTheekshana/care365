<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index(): View
    {
        // Get all FAQs where visibility is true
        $faqs = Faq::where('visibility', true)
                   ->orderBy('created_at', 'desc')
                   ->get();
        
        return view('frontend.faq.index', compact('faqs'));
    }
}