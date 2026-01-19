<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('frontend.home.index');
})->name('home');

// About Us Page
Route::get('about/', [AboutUsController::class, 'index'])->name('about');

// Services Page
Route::get('services/', [ServicesController::class, 'index'])->name('services');

// Blog Page
Route::get('blog/', [BlogController::class, 'index'])->name('blog');