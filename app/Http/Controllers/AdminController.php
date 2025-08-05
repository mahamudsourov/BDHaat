<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Payment;
use App\Models\Users;
use App\Models\Message;
use Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsers = User::count();
        $totalOrders = Order::count();
        $totalProducts = Product::count();
        $totalRevenue = Payment::sum('amount');

        return view('admin.dashboard', compact('totalUsers', 'totalOrders', 'totalProducts', 'totalRevenue'));
    }

    public function showMessages()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            $messages = Message::all();
            return view('admin.message.message', compact('messages'));
        } 
        return redirect('/login');
    }
}


