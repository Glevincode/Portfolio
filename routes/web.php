<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Portfolio home page
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');

// Contact form submission
Route::post('/contact', [PortfolioController::class, 'sendContact'])->name('contact.send');