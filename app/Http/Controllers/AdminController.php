<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Payment;
use App\Models\Users;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsers = Users::count();
        $totalOrders = Order::count();
        $totalProducts = Product::count();
        $totalRevenue = Payment::sum('amount');

        return view('admin.dashboard', compact('totalUsers', 'totalOrders', 'totalProducts', 'totalRevenue'));
    }
}


