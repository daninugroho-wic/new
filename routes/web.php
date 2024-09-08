<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\DashadminController;
use App\Http\Controllers\AddproController;
use App\Http\Controllers\ProjectsController;
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

// PROJECTS
// Route::get('/projects', [ProjectsController::class, 'index'])->name('projects.user.index');
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects.index'); //bisa
Route::get('/projects/create', [ProjectsController::class, 'create'])->name('user.projects.create');
Route::post('/projects', [ProjectsController::class, 'store'])->name('projects.store');


//PRODUCT
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::resource('/products', \App\Http\Controllers\ProductController::class, 'index');
});

// Route khusus untuk admin, menggunakan prefix dan middleware auth
Route::middleware(['auth'])->prefix('admin')->group(function () {
    // KONTAK
    Route::get('/dashadmin', [DashadminController::class, 'index'])->name('admin.dashadmin'); //bisa
    Route::get('/kontak', [KontakController::class, 'index'])->name('admin.kontak.index'); //bisa

    //ADDPROJECT
    Route::get('/admin/dashadmin', [AddproController::class, 'index'])->name('admin.dashadmin'); //bisa
    // Route untuk menampilkan form tambah data (create.blade) di folder 'pro'
    Route::get('/pro/create', [AddproController::class, 'create'])->name('pro.create');
    // Route untuk menyimpan data baru - POST
    Route::post('/pro', [AddproController::class, 'store'])->name('pro.store');
    // Route untuk menampilkan detail data - GET
    Route::get('/pro/{id}', [AddproController::class, 'show'])->name('pro.show');
    // Route untuk menampilkan form edit data di folder 'pro' - GET
    Route::get('/pro/{id}/edit', [AddproController::class, 'edit'])->name('pro.edit');
    // Route untuk memperbarui data - PUT/PATCH
    Route::put('/pro/{id}', [AddproController::class, 'update'])->name('pro.update');
    // Route untuk menghapus data - DELETE
    Route::delete('/pro/{id}', [AddproController::class, 'destroy'])->name('pro.destroy');

});


route::get('admin/dashadmin', [DashadminController::class,'index'])-> middleware(['auth','admin']);
// Include route untuk autentikasi
require __DIR__.'/auth.php';