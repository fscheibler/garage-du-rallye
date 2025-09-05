<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\GarageController;

Route::get('/', [HomeController::class, 'index'])->name('home'); 

Route::get('/le-garage', [GarageController::class, 'index'])->name('garage');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/vente', [SalesController::class, 'index'])->name('sales');

// Routes du blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

