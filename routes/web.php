<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\ContactController;

Route::get('/',  [PostController::class, 'index']);


Route::middleware(['auth'])->resource('/dashboard', Dashboard::class);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/upload', [CKEditorController::class, 'upload'])->name('ckeditor.upload');

Route::get('/article/{post:slug}', [PostController::class, 'article']);
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');