<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/blog', [PageController::class, 'blog'])->name('blog');

Route::get('/service1', [PageController::class, 'service1'])->name('service1');

Route::get('/service2', [PageController::class, 'service2'])->name('service2');

Route::get('/service3', [PageController::class, 'service3'])->name('service3');

Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');

// Route untuk menampilkan halaman login (GET)
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

// Route untuk memproses data login yang dikirim dari form (POST)
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');

// (Opsional tapi direkomendasikan) Route untuk logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');