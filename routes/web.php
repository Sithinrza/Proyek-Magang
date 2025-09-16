<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeamMemberController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/blog', [PageController::class, 'blog'])->name('blog');

Route::get('/service1', [PageController::class, 'service1'])->name('service1');

Route::get('/service2', [PageController::class, 'service2'])->name('service2');

Route::get('/service3', [PageController::class, 'service3'])->name('service3');

Route::get('/about', [TeamMemberController::class, 'index'])->name('about');

Route::resource('team', TeamMemberController::class);

