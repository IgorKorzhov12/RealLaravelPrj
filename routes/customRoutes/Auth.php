<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('user.login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('user.auth');
Route::get('/register', [AuthController::class, 'register'])->name('user.register');
Route::post('/createUser', [AuthController::class, 'createUser'])->name('user.create');
Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');
