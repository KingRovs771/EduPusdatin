<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmininistratorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [AdmininistratorController::class, 'index'])->name('dashboard');


