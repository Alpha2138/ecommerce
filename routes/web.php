<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;

// Home Route
Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');

// Additional Pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');
Route::get('/shop', [ProductController::class, 'shop'])->name('shop');
Route::get('/single-product/{id}', [ProductController::class, 'show'])->name('single-product');


// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Cart Routes (No longer require authentication)
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::put('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

// Order Route (No longer require authentication)
Route::post('order', [OrderController::class, 'placeOrder'])->name('order.place'); // Place an order

Route::middleware('auth')->group(function () {
    Route::get('/add-product', [ProductController::class, 'create'])->name('add.product');
    Route::post('/store-product', [ProductController::class, 'store'])->name('store.product');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('edit.product');
    Route::patch('/product/update/{id}', [ProductController::class, 'update'])->name('update.product');
    Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('delete.product');
});

// Category Routes
Route::middleware('auth')->group(function () {
    Route::get('/add-category', [CategoryController::class, 'create'])->name('add.category');
    Route::post('/store-category', [CategoryController::class, 'store'])->name('store.category');
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('edit.category');
    Route::patch('/category/update/{id}', [CategoryController::class, 'update'])->name('update.category');
    Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('delete.category');
});


// Authentication Routes
require __DIR__ . '/auth.php'; // Include authentication routes