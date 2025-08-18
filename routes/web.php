<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Public Controllers
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;
// Admin Controllers
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ProductManagement\HealthyFoodController;
use App\Http\Controllers\Admin\ProductManagement\ClothController;
use App\Http\Controllers\Admin\ProductManagement\FoodController;




// ─────────────────────────────────────────────────────────────
// 🌐 PUBLIC ROUTES
// ─────────────────────────────────────────────────────────────
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

// ─────────────────────────────────────────────────────────────
// 🔐 AUTH ROUTES
// ─────────────────────────────────────────────────────────────
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// 🔄 Redirect After Login
Route::get('/redirect', [RedirectController::class, 'handle'])->name('redirect');

// ─────────────────────────────────────────────────────────────
// 👤 USER PROFILE
// ─────────────────────────────────────────────────────────────
Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('/user/profile/edit', [UserController::class, 'edit'])->name('user.profile.edit');
Route::post('/user/profile/update', [UserController::class, 'update'])->name('user.profile.update');
// User Profile Orders
Route::get('/user/orders', [App\Http\Controllers\UserController::class, 'orders'])->name('user.orders');


// ─────────────────────────────────────────────────────────────
// 👤 ORDER Management
// ─────────────────────────────────────────────────────────────

Route::middleware(['auth'])->group(function () {
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('place.order');
});

Route::get('/admin/orders', [AdminController::class, 'showOrders'])->name('admin.orders');



// ─────────────────────────────────────────────────────────────
// ✉️ CONTACT FORM SUBMIT
// ─────────────────────────────────────────────────────────────
Route::post('/submit-contact', [ContactController::class, 'store'])->name('contact.submit');

// ─────────────────────────────────────────────────────────────
// 🛡️ ADMIN ROUTES (Protect with role check)
// ─────────────────────────────────────────────────────────────
Route::middleware(['auth'])->group(function () {

    // ✅ Admin Dashboard
    Route::get('/admin/dashboard', function () {
        if (Auth::user()->role !== 'admin') return redirect('/');
        return app(AdminController::class)->dashboard();
    })->name('admin.dashboard');

    // 📨 Admin Messages
    Route::get('/admin/messages', [AdminController::class, 'showMessages'])->name('admin.messages');

    // 👥 Admin Users
    Route::get('/admin/user', [AdminController::class, 'showUsers'])->name('admin.users');
    Route::delete('/admin/user/{id}/delete', [AdminController::class, 'deleteUser'])->name('admin.user.delete');

    // 📦 Admin Product Management Landing
    Route::get('/admin/ProductManagement', function () {
        return view('admin.ProductManagement.index');
    })->name('product.management');

    // 🧮 Grouped Product Management (Healthy Foods, Cloths, Foods)
    Route::prefix('admin/ProductManagement')->name('admin.')->group(function () {

        // 🥗 Healthy Foods
        Route::resource('healthyfoods', HealthyFoodController::class)->names([
            'index' => 'healthyfoods.index',
            'create' => 'healthyfoods.create',
            'store' => 'healthyfoods.store',
            'edit' => 'healthyfoods.edit',
            'update' => 'healthyfoods.update',
            'destroy' => 'healthyfoods.destroy',
            'show' => 'healthyfoods.show'
        ]);

        // 👕 Cloths
        Route::resource('cloths', ClothController::class)->names([
            'index' => 'cloths.index',
            'create' => 'cloths.create',
            'store' => 'cloths.store',
            'show' => 'cloths.show',
            'edit' => 'cloths.edit',
            'update' => 'cloths.update',
            'destroy' => 'cloths.destroy',
        ]);

        // 🍔 Foods
        Route::resource('foods', FoodController::class)->names([
            'index' => 'foods.index',
            'create' => 'foods.create',
            'store' => 'foods.store',
            'edit' => 'foods.edit',
            'update' => 'foods.update',
            'destroy' => 'foods.destroy',
            'show' => 'foods.show'
        ]);
    });
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('healthyfoods/create', [HealthyFoodController::class, 'create'])->name('healthyfoods.create');
    Route::post('healthyfoods', [HealthyFoodController::class, 'store'])->name('healthyfoods.store');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('healthyfoods', [HealthyFoodController::class, 'index'])->name('healthyfoods.index');
    Route::get('healthyfoods/create', [HealthyFoodController::class, 'create'])->name('healthyfoods.create');
    Route::post('healthyfoods', [HealthyFoodController::class, 'store'])->name('healthyfoods.store');
    Route::get('healthyfoods/{id}/edit', [HealthyFoodController::class, 'edit'])->name('healthyfoods.edit');
    Route::put('healthyfoods/{id}', [HealthyFoodController::class, 'update'])->name('healthyfoods.update');
    Route::delete('healthyfoods/{id}', [HealthyFoodController::class, 'destroy'])->name('healthyfoods.destroy');
});

Route::get('/food', [FoodController::class, 'showFrontendFoods'])->name('food');
Route::get('/healthy_food', [HealthyFoodController::class, 'publicIndex'])->name('healthy_food');
Route::get('/clothes', [ClothController::class, 'frontendIndex'])->name('clothes');

Route::get('/', [HomeController::class, 'index'])->name('home');

