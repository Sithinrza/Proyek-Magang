<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('pages/home');
});



Route::get('/contact', [PagesController::class, 'contact'])->name('contact');