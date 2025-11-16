<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\forgo ;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\SocialiteController;

// Social Login
Route::get('auth/{provider}/redirect', [SocialiteController::class, 'redirect'])->name('social.redirect');
Route::get('auth/{provider}/callback', [SocialiteController::class, 'callback'])->name('social.callback');

Route::get('/auth/facebook', [SocialiteController::class, 'redirectToFacebook']);
Route::get('/auth/facebook/callback', [SocialiteController::class, 'handleFacebookCallback']);

// ----------------------------- Forget Password --------------------------//
Route::controller(ForgotPasswordController::class)->group(function () {
    Route::post('forget-password', 'sendResetLinkEmail')->name('password.email');
});

// ---------------------------- Reset Password ----------------------------//
Route::controller(ResetPasswordController::class)->group(function () {
    Route::get('reset-password/{token}', 'showResetForm')->name('password.reset');
    Route::post('reset-password', 'reset')->name('password.update');
});