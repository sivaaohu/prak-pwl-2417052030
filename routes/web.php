<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\UserController;

Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('mata-kuliah.index');
Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])->name('mata-kuliah.create'); // Disamakan menggunakan '-'
Route::post('/matakuliah', [MataKuliahController::class, 'store'])->name('mata-kuliah.store');