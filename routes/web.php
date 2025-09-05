<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('pages/home');
});



Route::get('/contact', [PageController::class, 'contact'])->name('contact');