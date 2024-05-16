<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route::get('/article', PostController::class, 'index');

Route::get('/login', [LoginController::class, 'index']);

Route::resource('/dashboard', Dashboard::class);