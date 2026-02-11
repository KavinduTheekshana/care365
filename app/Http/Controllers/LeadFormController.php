<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadFormController extends Controller
{
    public function index()
    {
        return view('frontend.lead-form.index');
    }

}
