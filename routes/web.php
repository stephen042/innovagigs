<?php

use Illuminate\Support\Facades\Route;


// Routes for home pages
Route::view('/', 'home.index', ['title' => 'Home'])
    ->name('home');
Route::view('/about', 'home.about', ['title' => 'About Us'])
    ->name('about');
Route::view('/contact', 'home.contact', ['title' => 'Contact Us'])
    ->name('contact');
Route::view('/services', 'home.services', ['title' => 'Services Us'])
    ->name('services');
Route::view('/price', 'home.price', ['title' => 'Our prices'])
    ->name('price');

// Routes for admin pages
Route::prefix('admin')->group(function () {

    Route::view('/dashboard', 'admin.dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::view('/profile', 'admin.profile')
        ->middleware(['auth'])
        ->name('profile');
});


// Routes for auth pages
require __DIR__ . '/auth.php';
