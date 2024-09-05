<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('home', function()
{
    return view('home');
})->name('home');

Route::get('/user/create', [UserController::class, 'create'])->name('create');
Route::get('/login', [UserController::class, 'create'])->name('create');

Route::post('/user', [UserController::class, 'store'])->name('user.store');




