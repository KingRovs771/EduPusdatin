<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmininistratorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [AdmininistratorController::class, 'index'])->name('dashboard');
Route::get('/profile', [AdmininistratorController::class, 'index'])->name('profile');
Route::get('/sarpras', [AdmininistratorController::class, 'index'])->name('sarpras');

Route::get('/guru', [AdmininistratorController::class, 'index'])->name('gtk.guru');
Route::get('/tendik', [AdmininistratorController::class, 'index'])->name('gtk.tendik');
