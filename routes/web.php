<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ContactController;

// Halaman beranda
Route::get('/', function () {
    return view('home');
});

// Halaman detail layanan (Type A / B / C)
Route::get('/layanan/{slug}', [LayananController::class, 'show']);

// Halaman portfolio (ambil data lewat Controller)
Route::get('/portfolio', [PortfolioController::class, 'index']);
Route::get('/portfolio/{id}', [PortfolioController::class, 'show']);

// Halaman tentang
Route::get('/about', function () {
    return view('about');
});

// Halaman kontak (GET buat nampilin form, POST buat kirim pesan)
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', [ContactController::class, 'store']);
