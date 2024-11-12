<?php

use App\Http\Controllers\Public\AboutController;
use App\Http\Controllers\Public\ContactController;
use App\Http\Controllers\Public\LegalController;
use App\Http\Controllers\Public\PodcastController;
use App\Http\Controllers\Public\PromotionController;
use App\Http\Controllers\Public\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\ProductController;
use App\Http\Controllers\Public\BlogController;
use App\Http\Controllers\Public\NewsletterController;

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
Route::get('/productos/{slug}', [ProductController::class, 'show'])->name('product_show');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contacto', [ContactController::class, 'index'])->name('contact');
Route::post('/contacto/enviar', [ContactController::class, 'register'])->name('contact_register');
Route::get('/podcast', [PodcastController::class, 'index'])->name('podcast');
Route::get('/servicios', [ServiceController::class, 'index'])->name('services');
Route::get('/podcast/episodio/{slug}', [PodcastController::class, 'show'])->name('episode');
Route::post('/newsletter', [NewsletterController::class, 'create'])->name('newsletter');
Route::get('/promocion/{slug}', [PromotionController::class, 'show'])->name('promotions.show.blade.php');
Route::get('/subscriber/{slug}', [NewsletterController::class, 'index'])->name('subscriber');

Route::get('/legal/cookies', [LegalController::class, 'cookies'])->name('cookies');
Route::get('/legal/privacy', [LegalController::class, 'privacy'])->name('privacy');
Route::get('/legal/conditions', [LegalController::class, 'conditions'])->name('conditions');

Route::get('/thankyou', [NewsletterController::class, 'thanks'])->name('thankyou');

Route::view('welcome', 'welcome');


require __DIR__.'/auth.php';
