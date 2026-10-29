<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TipController;
use Illuminate\Support\Facades\Route;

// Beranda (Homepage)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Tentang Kami (About Us)
Route::get('/tentang-kami', [AboutController::class, 'index'])->name('about');

// Layanan Cepat (Services)
Route::get('/layanan', [ServiceController::class, 'index'])->name('services.index');
Route::get('/layanan/{slug}', [ServiceController::class, 'show'])->name('services.show');

// Promo & Paket Hemat (Promotions)
Route::get('/promo', [PromoController::class, 'index'])->name('promos.index');

// Lokasi Bengkel / Outlets (Outlet Locator)
Route::get('/lokasi', [OutletController::class, 'index'])->name('outlets.index');

// Tips Otomotif (Blog/Articles)
Route::get('/tips', [TipController::class, 'index'])->name('tips.index');
Route::get('/tips/{slug}', [TipController::class, 'show'])->name('tips.show');

// Kontak & Bantuan Darurat
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
