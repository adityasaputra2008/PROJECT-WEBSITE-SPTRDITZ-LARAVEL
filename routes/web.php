<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;

Route::get('/', function () {
    $products = \App\Models\Product::query()
        ->where('is_active', true)
        ->latest()
        ->take(8)
        ->get();

    return view('home', compact('products'));
})->name('home');

Route::get('/shop', [ProductController::class, 'index'])
    ->name('shop');

Route::get('/product-detail/{slug}', [ProductController::class, 'show'])
    ->name('products.show');

Route::get('/collection', function () {
    $products = \App\Models\Product::where('is_active', true)
        ->latest()
        ->get();

    return view('collection', compact('products'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cart', function () {
    return view('cart');
});

// ==========================================
// SPTRDITZ COLLECTION — ADMIN PANEL
// ==========================================

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->middleware('throttle:5,1')
    ->name('admin.login.submit');

Route::prefix('admin')
    ->name('admin.')
    ->middleware('owner')
    ->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])
            ->name('dashboard');

        Route::post('/logout', [AdminAuthController::class, 'logout'])
            ->name('logout');
    });
