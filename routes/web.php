<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Services
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');
Route::get('/layanan/{slug}', [LayananController::class, 'show'])->name('layanan.show');

// Testimonials
Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');

// Contact page
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
