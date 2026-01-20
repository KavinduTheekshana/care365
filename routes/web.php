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
use App\Http\Controllers\HomeController;


// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Us Page
Route::get('about/', [AboutUsController::class, 'index'])->name('about');

// Blog Page
Route::get('blog/', [BlogController::class, 'index'])->name('blog');
//Route::get('/blog/{id}', [BlogController::class, 'blogdetails'])->name('blogdetails');

// Services Page
Route::get('services/', [ServicesController::class, 'index'])->name('services');

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









// Service Details Page
Route::get('/{slug?}', [ServicesController::class, 'servicedetails'])->name('servicedetails');

// You can also have a route that redirects from old URL to new slug-based URL
/*
Route::get('/service-details', function () {
    return redirect()->route('servicedetails');
});
*/


//Blog Page
Route::get('/{blog:title_slug}', [BlogController::class, 'blogdetails'])->name('blogdetails');
