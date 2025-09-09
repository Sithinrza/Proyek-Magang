<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/blog', [PageController::class, 'blog'])->name('blog');

Route::get('/service1', [PageController::class, 'service1'])->name('service1');