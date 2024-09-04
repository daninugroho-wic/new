<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddproController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\DashadminController;

// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route resource untuk AddproController
Route::resource('addpro', AddproController::class);

// Route untuk dashboard user, menggunakan middleware auth dan verified
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk profile user
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route khusus untuk admin, menggunakan prefix dan middleware auth
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/kontak', [KontakController::class, 'index'])->name('admin.kontak.index');
    Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');
    Route::get('/create', [KontakController::class, 'create'])->name('admin.kontak.create');

    Route::get('/dashadmin', [DashadminController::class, 'index'])->name('admin.dashadmin');
});

// Include route untuk autentikasi
require __DIR__.'/auth.php';