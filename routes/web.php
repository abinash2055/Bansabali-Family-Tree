<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerifyController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\PasswordUpdateController;
use App\Http\Controllers\Auth\PasswordConfirmController;



// For User Authebntication
    // FOR LOGIN
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

    // LOGOUT
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // FOR REGISTRATION
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

    // FOR EMAIL ACTION
Route::get('email/verify', [VerifyController::class, 'show'])->name('verification.notice');
Route::post('email/resend', [VerifyController::class, 'resend'])->name('verification.resend');
Route::get('email/verify/{id}/{hash}', [VerifyController::class, 'verify'])->name('verification.verify');


// FOR EMAIL AND PASSWORD
Route::prefix('password')->name('password.')->group(function () {
    // Password reset request route
    Route::get('email', [PasswordResetController::class, 'showLinkRequestForm'])->name('email');
    Route::post('email', [PasswordResetController::class, 'sendResetLinkEmail'])->name('email.send');

    // Password reset form
    Route::get('reset/{token}', [PasswordUpdateController::class, 'showResetForm'])->name('reset.form');
    Route::post('reset', [PasswordUpdateController::class, 'resetPassword'])->name('reset.update');

    // Password confirmation route
    Route::get('confirm', [PasswordConfirmController::class, 'showConfirmForm'])->name('confirm');
    Route::post('confirm', [PasswordConfirmController::class, 'confirm'])->name('confirm.submit');
});