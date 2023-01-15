<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NovelController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/detail-posting', function () {
    return view('posting/detail-posting');
})->middleware(['auth', 'verified'])->name('posting/detail-posting');

Route::get('/posting', function () {
    return view('posting/posting');
})->middleware(['auth', 'verified'])->name('posting');

Route::get('/tambah-bab', function () {
    return view('novel/tambah-bab');
})->middleware(['auth', 'verified'])->name('tambah-bab');

Route::get('/detail-novel', function () {
    return view('novel/detail');
})->middleware(['auth', 'verified'])->name('detail-novel');

Route::resource('novels', NovelController::class)->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route User

Route::get('', function () {
    return view('user/dashboard');
})->name('');

Route::get('daftar-novel', function () {
    return view('user/daftar-novel');
})->name('/daftar-novel');

Route::get('detail-postingan', function () {
    return view('user/detail-posting');
})->name('/detail-postingan');

Route::get('info-novel', function () {
    return view('user/detail-novel');
})->name('/info-novel');

require __DIR__.'/auth.php';
