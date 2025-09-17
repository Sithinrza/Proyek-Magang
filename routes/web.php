<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TeamMemberController;

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
//Route::get('/about', [TeamMemberController::class, 'index'])->name('about');

//Route::resource('team', TeamMemberController::class);

// routes/web.php

Route::get('/admin/dashboard', function () {
    return view('components.admin.dashboard');
})->name('admin.dashboard');


// Route ini akan mengarahkan URL /admin/team ke method index di TeamMemberController
Route::resource('/admin/team', TeamMemberController::class)->names('admin.team');
//Route::get('/admin/team', [TeamMemberController::class, 'index'])->name('admin.team.index');

// Anda juga bisa menggunakan resource controller yang sudah ada
// Route::resource('/admin/team', TeamMemberController::class)->names('admin.team');

// // routes/web.php

// Route::get('/admin/dashboard', function () {
//     // Perintah ini akan mencari dan menampilkan file yang sudah Anda pindahkan:
//     // yaitu di resources/views/admin/dashboard.blade.php
//     return view('admin.dashboard');
// });
