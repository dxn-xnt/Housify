<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LogInController;

// Home page with property listings
Route::get('/', [PropertyController::class, 'index'])->name('home');

// Log In Page
Route::get('/login', [UserController::class, 'showLogin'])->name('login');

//User Log in
Route::post('/user/login', [LogInController::class, 'login'])->name('user.login');

// Sign Up Page
Route::get('/signup', [UserController::class, 'showSignUp'])->name('signup');

Route::post('/user/create', [UserController::class, 'createUser'])->name('user.create');

// Property details page
Route::get('/property/{id}', [PropertyController::class, 'show'])->name('property.show');

// Booking routes
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::get('/bookings/{id}', [BookingController::class, 'show'])->name('bookings.show');
Route::post('/property/{id}/book', [BookingController::class, 'book'])->name('bookings.book');
Route::post('/bookings/{id}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');

Route::fallback(function () {
    return view('pages.404');
});
