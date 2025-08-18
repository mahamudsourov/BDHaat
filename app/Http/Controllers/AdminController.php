<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use App\Models\Cloth;
use App\Models\Food;
use App\Models\HealthyFood;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsers    = User::count();
        $totalOrders   = Order::count();
        $totalProducts = Cloth::count() + Food::count() + HealthyFood::count();
        $totalRevenue  = Payment::sum('amount');

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

    public function showUsers()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            $users = User::all();
            return view('admin.user.user', compact('users'));
        }
    }

    public function deleteUser($id)
    {
        $user = User::find($id);

        if ($user && $user->role === 'user') {
            $user->delete();
            return redirect()->back()->with('success', 'User deleted successfully!');
        }

        return redirect()->back()->with('error', 'User not found or not deletable.');
    }
    
    public function showOrders()
    {
        $orders = Order::with(['user', 'orderItems'])->orderBy('created_at', 'desc')->get();
        return view('admin.order.order', compact('orders'));
    }

    public function payments()
    {
        $payments = Payment::with('order.user')->latest()->get();
        return view('admin.payments.index', compact('payments'));
    }

    public function updateOrder(Request $request, $id)
{
    $request->validate([
        'status' => 'required|in:pending,confirmed,out_for_delivery,delivered',
    ]);

    $order = Order::findOrFail($id);
    $order->status = $request->status;
    $order->save();

    return redirect()->back()->with('success', 'Order status updated successfully.');
}

public function deleteOrder($id)
{
    $order = Order::findOrFail($id);

    // Delete related payment first to avoid foreign key issue
    Payment::where('order_id', $order->id)->delete();

    $order->delete();

    return redirect()->back()->with('success', 'Order deleted successfully.');
}

}
