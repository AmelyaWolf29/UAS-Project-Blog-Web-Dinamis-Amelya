<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\CategoryBlog;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/article/{slug}', [HomeController::class, 'show'])->name('article.show');
Route::get('/category/{category}', [HomeController::class, 'category'])->name('category.show');