<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\BookingController;

// Home page with property listings
Route::get('/', [PropertyController::class, 'index'])->name('home');

// Log In Page
Route::get('/login', [UserController::class, 'showLogin'])->name('login');

// Sign Up Page
Route::get('/signup', [UserController::class, 'showSignUp'])->name('signup');

// Property details page
Route::get('/property/{id}', [PropertyController::class, 'show'])->name('property.show');

// Booking routes
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::get('/bookings/{id}', [BookingController::class, 'show'])->name('bookings.show');
Route::post('/property/{id}/book', [BookingController::class, 'book'])->name('bookings.book');
Route::post('/bookings/{id}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');

// Adding properties
Route::get('/property/create/step1', [PropertyController::class, 'createProperty'])->name('property.create');
Route::get('/property/create/step2', [PropertyController::class, 'createProperty'])->name('property.create');
Route::get('/property/create/step3', [PropertyController::class, 'createProperty'])->name('property.create');
Route::get('/property/create/step4', [PropertyController::class, 'createProperty'])->name('property.create');


// Fallback route
Route::fallback(function () {
    return view('pages.404');
});
