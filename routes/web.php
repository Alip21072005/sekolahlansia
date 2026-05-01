<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');

Route::inertia('/tentang', 'Tentang')->name('tentang');

Route::inertia('/program', 'Program')->name('program');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'admin/Dashboard')->name('dashboard');
});

require __DIR__ . '/settings.php';
