<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LogInController;

// Public Routes
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [UserController::class, 'showLogin'])->name('login');
    Route::post('/user/login', [LogInController::class, 'login'])->name('user.login');

    Route::get('/signup', [UserController::class, 'showSignUp'])->name('signup');
    Route::post('/user/create', [UserController::class, 'createUser'])->name('user.create');
});

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    // Property Creation Flow
    Route::prefix('property/create')->group(function () {
        Route::get('/step1', [PropertyController::class, 'createProperty'])->name('property.create');
        Route::get('/step2', [PropertyController::class, 'createPropertyStep2'])->name('property.step2');
        Route::get('/step3', [PropertyController::class, 'createPropertyStep3'])->name('property.step3');
        Route::get('/step4', [PropertyController::class, 'createPropertyStep4'])->name('property.step4');
    });

    // Booking Routes
    Route::post('/property/{id}/book', [BookingController::class, 'book'])->name('bookings.book');
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::get('/bookings/{id}', [BookingController::class, 'show'])->name('bookings.show');
    Route::post('/bookings/{id}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');

// Adding properties
Route::get('/property/create/step1', [PropertyController::class, 'createProperty_step1'])->name('property.create.step1');
Route::get('/property/create/step2', [PropertyController::class, 'createProperty_step2'])->name('property.create.step2');
Route::get('/property/create/step3', [PropertyController::class, 'createProperty_step3'])->name('property.create.step3');
Route::get('/property/create/step4', [PropertyController::class, 'createProperty_step4'])->name('property.create.step4');
Route::get('/property/create/step5', [PropertyController::class, 'createProperty_step5'])->name('property.create.step5');
Route::get('/property/create/step6', [PropertyController::class, 'createProperty_step6'])->name('property.create.step6');
    // Logout
    Route::post('/logout', [LogInController::class, 'logout'])->name('logout');
});

// Public Property Views
Route::get('/', [PropertyController::class, 'index'])->name('home');
Route::get('/property/{id}', [PropertyController::class, 'show'])->name('property.show');

// Fallback route
Route::fallback(function () {
    return view('pages.404');
});
