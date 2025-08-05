<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ProductManagement\HealthyFoodController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// ---------- Public Pages ---------- //
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/clothes', 'clothes')->name('clothes');
Route::view('/food', 'food')->name('food');
Route::view('/healthy_food', 'healthy_food')->name('healthy_food');
Route::view('/helpcenter', 'helpcenter')->name('helpcenter');
Route::view('/customercare', 'customercare')->name('customercare');
Route::view('/product-details', 'product-details')->name('product.details');
Route::view('/cart', 'cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/order', 'order')->name('order');
Route::view('/payment', 'payment')->name('payment');
Route::view('/returnrefund', 'returnrefund')->name('returnrefund');
Route::view('/contact', 'contact')->name('contact');

// ---------- Auth Routes ---------- //
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// ---------- Redirect Logic After Login ---------- //
Route::get('/redirect', [RedirectController::class, 'handle'])->name('redirect');

// ---------- Protected Admin Route ---------- //
Route::get('/admin/dashboard', function () {
    // If not logged in
    if (! Auth::check()) {
        return redirect('/login');
    }

    // If logged in but not admin
    if (Auth::user()->role !== 'admin') {
        return redirect('/'); // or you can show a 403 forbidden page
    }

    // If admin
    return app(AdminController::class)->dashboard();
})->name('admin.dashboard');

Route::get('/admin/messages', [AdminController::class, 'showMessages'])->name('admin.messages');
Route::get('/admin/user', [AdminController::class, 'showUsers'])->name('admin.users');
Route::delete('/admin/user/{id}/delete', [AdminController::class, 'deleteUser'])->name('admin.user.delete');


// use App\Http\Controllers\UserController;

// Route::middleware(['auth'])->group(function () {
//     Route::get('/settings', [UserController::class, 'edit'])->name('user.settings');
//     Route::post('/settings', [UserController::class, 'update'])->name('user.settings.update');
// });

// User Profile
Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('/user/profile/edit', [UserController::class, 'edit'])->name('user.profile.edit');
Route::post('/user/profile/update', [UserController::class, 'update'])->name('user.profile.update');


// Product Management → Healthy Foods
Route::get('/healthyfoods/create', [HealthyFoodController::class, 'create'])->name('healthyfoods.create');
Route::post('/healthyfoods/store', [HealthyFoodController::class, 'store'])->name('healthyfoods.store');

Route::get('/admin/healthyfoods/create', [HealthyFoodController::class, 'create'])->name('admin.healthyfoods.create');
Route::post('/admin/healthyfoods/store', [HealthyFoodController::class, 'store'])->name('admin.healthyfoods.store');

// Contact Us
Route::post('/submit-contact', [ContactController::class, 'store'])->name('contact.submit');
