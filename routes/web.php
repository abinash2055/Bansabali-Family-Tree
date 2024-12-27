<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerifyController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\PasswordUpdateController;
use App\Http\Controllers\Auth\PasswordConfirmController;
use App\Http\Controllers\Public\WebController;


// FOR PUBLIC VIEW PAGES
   // FOR HOME PAGE
Route::get('/', [WebController::class, 'home'])->name('home'); 

    // FOR ABOUT PAGE
Route::get('/about', [WebController::class, 'about'])->name('about');  

    // FOR OUR MEMBER PAGE
Route::get('/member', [WebController::class, 'member'])->name('member');   

    // FOR OUR CULTURE PAGE
Route::get('/culture', [WebController::class, 'culture'])->name('culture');

     // FOR NEWS AND EVENTS PAGE
Route::get('/blogs', [WebController::class, 'blogs'])->name('blogs');  

    // FOR CONTACT PAGE
Route::get('/contact', [WebController::class, 'contact'])->name('contact');    



// FOR AUTHENTICATION PORTION
    // FOR LOGIN
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

    // LOGOUT
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // FOR REGISTRATION
Route::get('signup', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('signup', [RegisterController::class, 'register']);

    // FOR EMAIL VERIFICATION ACTION
Route::get('email/verify', [VerifyController::class, 'show'])->name('verification.notice');
Route::post('email/resend', [VerifyController::class, 'resend'])->name('verification.resend');
Route::get('email/verify/{id}/{hash}', [VerifyController::class, 'verify'])->name('verification.verify');


// FOR EMAIL AND PASSWORD
Route::prefix('password')->name('password.')->group(function () {
    // PASSWORD RESET REQUEST
    Route::get('email', [PasswordResetController::class, 'showLinkRequestForm'])->name('email');
    Route::post('email', [PasswordResetController::class, 'sendResetLinkEmail'])->name('email.send');

    // PASSWORD RESET FORM 
    Route::get('reset/{token}', [PasswordUpdateController::class, 'showResetForm'])->name('reset.form');
    Route::post('reset', [PasswordUpdateController::class, 'resetPassword'])->name('reset.update');

    // PASSWORD CONFIRMATION 
    Route::get('confirm', [PasswordConfirmController::class, 'showConfirmForm'])->name('confirm');
    Route::post('confirm', [PasswordConfirmController::class, 'confirm'])->name('confirm.submit');
});