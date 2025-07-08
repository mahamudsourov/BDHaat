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

Route::get('/healthy_food', function () {
    return view('healthy_food');
})->name('healthy_food');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');