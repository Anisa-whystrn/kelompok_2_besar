<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

Route::get('/', [PageController::class, 'index']);
Route::get('/ciri', [PageController::class, 'ciri']);
Route::get('/penyebab', [PageController::class, 'penyebab']);
Route::get('/pencegahan', [PageController::class, 'pencegahan']);

Route::get('/admin/login', [AdminController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout']);
Route::post('/admin/update', [AdminController::class, 'update'])->name('admin.update');