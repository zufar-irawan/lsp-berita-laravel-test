<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BeritaController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'dashboard']);
Route::get('/berita/detail/{id}', [BeritaController::class, 'detail']);
Route::get('/berita/create', [BeritaController::class, 'create']);
Route::post('/berita/store', [BeritaController::class, 'store']);
Route::get('/berita/delete/{id}', [BeritaController::class, 'delete']);

Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
