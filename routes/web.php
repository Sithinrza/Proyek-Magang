<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

// Controller untuk Halaman Publik
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactFormController;

// Controller untuk Autentikasi
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Controller untuk Area Admin
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeamMemberController;

// Untuk testing email
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// == RUTE PUBLIK ==
// Rute-rute ini dapat diakses oleh siapa saja.
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/service1', [PageController::class, 'service1'])->name('service1');
Route::get('/service2', [PageController::class, 'service2'])->name('service2');
Route::get('/service3', [PageController::class, 'service3'])->name('service3');
Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');


// == RUTE AUTENTIKASI (MIDDLEWARE GUEST DIHILANGKAN SEMENTARA) ==
// Middleware 'guest' dinonaktifkan agar Anda bisa mengakses halaman /login kapan saja untuk testing.
// Jangan lupa untuk mengaktifkannya kembali nanti dengan menghapus tanda komentar.
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.store');
 });


// == RUTE VERIFIKASI EMAIL ==
// Rute-rute ini diperlukan untuk alur verifikasi email.
Route::get('/email/verify', function () {
    return view('auth.verify-email'); // Anda perlu membuat view ini
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/admin/dashboard')->with('status', 'Email berhasil diverifikasi!');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Link verifikasi baru telah dikirim!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


// == RUTE AREA ADMIN (TERLINDUNGI) ==
// Rute di dalam grup ini hanya bisa diakses jika pengguna sudah login DAN emailnya terverifikasi.
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('components.admin.dashboard');
    })->name('dashboard');

    Route::resource('/team', TeamMemberController::class)->names('team');
    Route::resource('/users', AdminController::class)->names('users');
});


// == RUTE LAINNYA ==
// Logout bisa diletakkan di sini, hanya perlu middleware 'auth'.
// DIUBAH SEMENTARA KE GET UNTUK DEVELOPMENT: Cukup kunjungi /logout di browser untuk keluar.
// Jangan lupa kembalikan ke POST untuk production karena lebih aman.
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout')->middleware('auth');


