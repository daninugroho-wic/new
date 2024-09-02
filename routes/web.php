<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddproController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KontakController;

Route::get('/', function () {
    return view('welcome');
});
route::resource('addpro', AddproController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');
route::get('admin/kontak', [KontakController::class, 'index']);