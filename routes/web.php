<?php

use Illuminate\Support\Facades\Route;


// Routes for home pages
Route::view('/', 'home.index', ['title' => 'Home'])
    ->name('home');

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
