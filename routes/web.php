<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PackagesController;


Route::get('/', function () {
    return view('frontend.home.index');
})->name('home');

// About Us Page
Route::get('about/', [AboutUsController::class, 'index'])->name('about');

// Services Page
Route::get('services/', [ServicesController::class, 'index'])->name('services');
Route::get('service-details', [ServicesController::class, 'servicedetails'])->name('servicedetails');

// Blog Page
Route::get('blog/', [BlogController::class, 'index'])->name('blog');
Route::get('blog-details', [BlogController::class, 'blogdetails'])->name('blogdetails');

// Contact Page
Route::get('contact/', [ContactController::class, 'index'])->name('contact');

// Gallery Page
Route::get('gallery/', [GalleryController::class, 'index'])->name('gallery');

// Testimonials Page
Route::get('testimonials/', [TestimonialsController::class, 'index'])->name('testimonial');

// FAQ Page
Route::get('faq/', [FaqController::class, 'index'])->name('faq');

// Team Page
Route::get('team/', [TeamController::class, 'index'])->name('team');

// Packages Page
Route::get('packages/', [PackagesController::class, 'index'])->name('packages');

//Send Contact Mail
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
