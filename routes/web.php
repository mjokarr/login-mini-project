<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/home', [HomeController::class, 'create'])->name('home.create');

Route::get('/user/create', [UserController::class, 'create'])->name('login.create');
Route::get('/login', [UserController::class, 'create'])->name('create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');





