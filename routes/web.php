<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CKEditorController;

Route::get('/',  [PostController::class, 'index']);

// Route::get('/article', PostController::class, 'index');

Route::get('/login', [LoginController::class, 'index']);

Route::resource('/dashboard', Dashboard::class);

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::resource('post', Dashboard::class)->parameters([
        'post' => 'post:slug'
    ]);
});
Route::post('/upload', [CKEditorController::class, 'upload'])->name('ckeditor.upload');
