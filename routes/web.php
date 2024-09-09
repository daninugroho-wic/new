<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\DashadminController;



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

// Route khusus untuk admin, menggunakan prefix dan middleware auth
Route::middleware(['auth'])->prefix('admin')->group(function () {
    
    // KONTAK
    Route::get('/dashadmin', [DashadminController::class, 'index'])->name('admin.dashadmin'); //bisa
    // Route untuk menampilkan daftar kontak
    Route::get('/kontak', [KontakController::class, 'index'])->name('admin.kontak.index'); //bisa
    // Route untuk menampilkan form create di halaman admin (untuk menambah kontak)
    Route::get('/admin/create', [KontakController::class, 'create'])->name('admin.create');
    // Route untuk menyimpan data kontak baru
    Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');
    // Route untuk menampilkan form edit data kontak
    Route::get('kontak/edit/{id}', [KontakController::class, 'edit'])->name('admin.kontak.edit');
    // Route untuk memperbarui data kontak
    Route::put('kontak/edit/{id}', [KontakController::class, 'update'])->name('admin.kontak.update');
    // Route untuk menghapus data kontak
    Route::delete('/kontak/{id}', [KontakController::class, 'destroy'])->name('admin.kontak.destroy');
});


route::get('admin/dashadmin', [DashadminController::class,'index'])-> middleware(['auth','admin']);
// Include route untuk autentikasi
require __DIR__.'/auth.php';