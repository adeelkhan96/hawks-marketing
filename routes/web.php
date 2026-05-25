<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\EmailController as AdminEmailController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about-us', function () {
    return view('aboutus');
})->name('about-us');

Route::get('/our-services', function () {
    return view('ourservices');
})->name('our-services');

Route::get('/seo-services', function () {
    return view('seo-services');
})->name('seo-services');

Route::get('/social-media-management', function () {
    return view('social-media');
})->name('social-media');

Route::get('/content-writing', function () {
    return view('content-writing');
})->name('content-writing');

Route::get('/website-development', function () {
    return view('web-development');
})->name('web-development');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Admin panel
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.post');
    Route::middleware('admin.auth')->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('/banner', [AdminDashboardController::class, 'banner'])->name('banner');
        Route::get('/content', [AdminDashboardController::class, 'content'])->name('content');
        Route::get('/submissions', [AdminDashboardController::class, 'submissions'])->name('submissions');
        Route::get('/testimonials', [AdminDashboardController::class, 'testimonials'])->name('testimonials');
        Route::get('/companies', [AdminDashboardController::class, 'companies'])->name('companies');
        Route::middleware('admin')->get('/users', [AdminDashboardController::class, 'users'])->name('users');

        // Email
        Route::get('/email',          [AdminEmailController::class, 'inbox']  )->name('email.inbox');
        Route::get('/email/compose',  [AdminEmailController::class, 'compose'])->name('email.compose');
        Route::post('/email/send',    [AdminEmailController::class, 'send']   )->name('email.send');
        Route::get('/email/{uid}',    [AdminEmailController::class, 'show']   )->name('email.show');
    });
});
