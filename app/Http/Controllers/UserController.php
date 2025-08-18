<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;


class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('user.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = \App\Models\User::find(Auth::id());

        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|unique:users,email,' . $user->id,
            'phone'   => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        $user->fill($request->only('name', 'email', 'phone', 'address'));
        $user->save();

        return redirect()->route('user.profile')->with('success', 'Profile updated successfully!');
    }

    public function orders()
    {
        $user   = Auth::user();
        $orders = Order::where('user_id', $user->id)->latest()->get();
        return view('user.orders', compact('orders', 'user'));
    }

    public function cancelOrder($orderId)
    {
        $user = Auth::user();

        $order = Order::where('id', $orderId)
                      ->where('user_id', $user->id)
                      ->first();

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found or cannot cancel.');
        }

        $order->delete();

        return redirect()->back()->with('success', 'Order cancelled successfully!');
    }
}
