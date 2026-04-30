<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::inertia('/', 'Welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::inertia('/tentang', 'Tentang', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('tentang');

Route::inertia('/program', 'Program', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('program');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
