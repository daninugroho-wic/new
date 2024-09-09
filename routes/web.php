<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\DashadminController;
use App\Http\Controllers\ProductController;

// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

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

// Route khusus untuk admin, menggunakan prefix dan middleware auth & admin
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    // Route untuk halaman dashboard admin
    Route::get('/dashadmin', [DashadminController::class, 'index'])->name('admin.dashadmin');

    // KONTAK
    Route::get('/kontak', [KontakController::class, 'index'])->name('admin.kontak.index');
    Route::get('/create', [KontakController::class, 'create'])->name('admin.create');
    Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');
    Route::get('/kontak/edit/{id}', [KontakController::class, 'edit'])->name('admin.kontak.edit');
    Route::put('/kontak/edit/{id}', [KontakController::class, 'update'])->name('admin.kontak.update');
    Route::delete('/kontak/{id}', [KontakController::class, 'destroy'])->name('admin.kontak.destroy');

    // PRODUCTS
    Route::get('/products', [ProductController::class, 'index'])->name('admin.products');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products/save', [ProductController::class, 'save'])->name('admin.products.save');
    Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/products/edit/{id}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::get('/products/delete/{id}', [ProductController::class, 'delete'])->name('admin.products.delete');
});

// Include route untuk autentikasi
require __DIR__.'/auth.php';
