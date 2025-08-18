<?php
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function cancelOrder($id)
    {
        $user = Auth::user();

        $order = \App\Models\Order::where('id', $id)
            ->where('user_id', $user->id) // অন্যের অর্ডার cancel না হয়
            ->firstOrFail();

        // শুধু pending/confirmed হলে cancel করতে দিবে
        if (! in_array($order->status, ['pending', 'confirmed'])) {
            return back()->with('error', 'This order cannot be cancelled.');
        }

        $order->status = 'cancelled';
        $order->save();

        return back()->with('success', 'Order cancelled successfully!');
    }

}
