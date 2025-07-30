<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about-us', function () {
    return view('aboutus');
})->name('about-us');

Route::get('/our-services', function () {
    return view('ourservices');
})->name('our-services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
