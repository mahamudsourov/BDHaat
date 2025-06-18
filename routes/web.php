<?php

use Illuminate\Support\Facades\Route;

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

// ✅ Register Page
Route::get('/register', function () {
    return view('register');
})->name('register');
