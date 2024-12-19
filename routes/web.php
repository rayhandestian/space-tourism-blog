<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Home Page
Route::get('/', [PageController::class, 'home'])->name('home');

// Blog Listing Page
Route::get('/blog', [PageController::class, 'blog'])->name('blog');

// Single Blog Post Page
Route::get('/blog/{id}', [PageController::class, 'singlePost'])->name('singlePost');

// Contact Page
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// About Page
Route::get('/about', [PageController::class, 'about'])->name('about');
