<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/portfolio', [IndexController::class, 'portfolio'])->name('portfolio');
Route::get('/termsandcondition', [IndexController::class, 'termsandcondition'])->name('termsandcondition');
Route::get('/privacypolicy', [IndexController::class, 'privacypolicy'])->name('privacypolicy');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
