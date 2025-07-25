<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;


// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Login Page
Route::get('/login', function () {
    return view('login');
})->name('login');

// Register Page
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/clothes', function () {
    return view('clothes');
})->name('clothes');

Route::get('/food', function () {
    return view('food');
})->name('food');

Route::get('/helpcenter', function () {
    return view('helpcenter');
})->name('helpcenter');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::get('/returnrefund', function () {
    return view('returnrefund');
})->name('returnrefund');

Route::get('/healthy_food', function () {
    return view('healthy_food');
})->name('healthy_food');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/help-center', function () {
    return view('helpcenter');
})->name('helpcenter');

Route::get('/customercare', function () {
    return view('customercare');
})->name('customercare');

Route::get('/clothes', function () {
    return view('clothes');
})->name('clothes');

Route::get('/product-details', function () {
    return view('product-details');
})->name('product.details');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/order', function () {
    return view('order');
})->name('order');




Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

