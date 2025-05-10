<?php

use App\Http\Controllers\PropertyCreationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LogInController;

Route::get('/', [PropertyController::class, 'index'])->name('home');

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
//    Route::prefix('property/create')->group(function () {
//        Route::get('/step1', [PropertyController::class, 'createProperty_step1'])->name('property.create');
//        Route::get('/step2', [PropertyController::class, 'createProperty_step2'])->name('property.step2');
//        Route::get('/step3', [PropertyController::class, 'createProperty_step3'])->name('property.step3');
//        Route::get('/step4', [PropertyController::class, 'createProperty_step4'])->name('property.step4');
//    });

    // Booking Routes
    Route::post('/property/{id}/book', [BookingController::class, 'book'])->name('bookings.book');
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::get('/bookings/{id}', [BookingController::class, 'show'])->name('bookings.show');
    Route::post('/bookings/{id}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');

    // Public Property Views
    Route::get('/property/{id}', [PropertyController::class, 'show'])->name('property.show');


    Route::post('/logout', [LogInController::class, 'logout'])->name('logout');
});

Route::prefix('property/create')->middleware(['auth'])->group(function () {
    Route::get('/identify-house', [PropertyCreationController::class, 'createProperty_step1'])
        ->name('property.create');

    Route::post('/identify-house', [PropertyCreationController::class, 'storePropertyType'])
        ->name('property.store.type');

    Route::get('/location', [PropertyCreationController::class, 'createProperty_step2'])
        ->name('property.step2');

    Route::post('/location', [PropertyCreationController::class, 'storeLocation'])
        ->name('property.storeLocation');

    Route::get('/capacity', [PropertyCreationController::class, 'createProperty_step3'])
        ->name('property.step3');

    Route::post('/capacity', [PropertyCreationController::class, 'storeCapacity'])
        ->name('property.storeCapacity');

    Route::get('/description', [PropertyCreationController::class, 'createProperty_step4'])
        ->name('property.step4');

    Route::post('/description', [PropertyCreationController::class, 'storeDescription'])
        ->name('property.storeDescription');

    Route::get('/amenities', [PropertyCreationController::class, 'createProperty_step5'])
        ->name('property.step5');

    Route::post('/amenities', [PropertyCreationController::class, 'storeAmenities'])
        ->name('property.storeAmenities');

    // Route for displaying the pictures form
    Route::get('/pictures', [PropertyCreationController::class, 'createProperty_step6'])
        ->name('property.step6');

// Route for storing uploaded images
    Route::post('/store-pictures', [PropertyCreationController::class, 'storePictures'])
        ->name('property.storePictures');

// Route for removing an image (if needed)
    Route::post('/remove-image', [PropertyCreationController::class, 'removeImage'])
        ->name('property.removeImage');

    Route::get('/price', [PropertyCreationController::class, 'createProperty_step7'])
        ->name('property.step7');

    Route::post('/property/store-price-and-save', [PropertyCreationController::class, 'storePriceAndSaveProperty'])
        ->name('property.storePriceAndSave');
});

// Fallback route
Route::fallback(function () {
    return view('pages.404');
});
