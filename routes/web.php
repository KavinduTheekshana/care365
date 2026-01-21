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
use App\Http\Controllers\RouteController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsConditionController;



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

// Careers Page
Route::get('careers/', [CareersController::class, 'index'])->name('careers');

//Send Contact Mail
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// Privacy Policy Page
Route::get('privacy-policy/', [PrivacyPolicyController::class, 'index'])->name('privacy-policy');

// Terms and Conditions Page
Route::get('terms-and-conditions/', [TermsConditionController::class, 'index'])->name('termsconditions');



// Catch-all dynamic routes - MUST BE LAST
Route::get('/{slug}', [RouteController::class, 'resolve']);



