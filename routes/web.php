<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/', [PageController::class, 'login']);
Route::get('/profile', [PageController::class, 'profile']);
Route::get('/daftartugas', [PageController::class, 'daftartugas']);
