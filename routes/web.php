<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/list', function () {
    return view('list-novel/list');
})->middleware(['auth', 'verified'])->name('list');

Route::get('/posting', function () {
    return view('posting/posting');
})->middleware(['auth', 'verified'])->name('posting');

Route::get('/tambah-bab', function () {
    return view('novel/tambah-bab');
})->middleware(['auth', 'verified'])->name('tambah-bab');

Route::get('/tambah-novel', function () {
    return view('novel/tambah-novel');
})->middleware(['auth', 'verified'])->name('tambah-novel');

Route::get('/detail-novel', function () {
    return view('novel/detail');
})->middleware(['auth', 'verified'])->name('detail-novel');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
