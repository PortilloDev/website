<?php

use App\Http\Controllers\Public\AboutController;
use App\Http\Controllers\Public\ContactController;
use App\Http\Controllers\Public\CraftersCodeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\ProductController;
use App\Http\Controllers\Public\ProyectController;

Route::view('private-panel', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre-mi', [AboutController::class, 'index'])->name('about');
Route::get('/productos', [ProductController::class, 'index'])->name('product');
Route::get('/blog', [ProyectController::class, 'index'])->name('blog');
Route::get('/contacto', [ContactController::class, 'index'])->name('contact');
Route::get('/podcast', [CraftersCodeController::class, 'index'])->name('podcast');

Route::view('welcome', 'welcome');


require __DIR__.'/auth.php';