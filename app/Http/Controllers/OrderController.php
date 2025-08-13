<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Order;
use App\Models\Payment;

class OrderController extends Controller
{
    public function checkout()
    {
        return view('checkout'); 
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email',
            'phone'         => 'required|string',
            'address'       => 'required|string',
            'order_details' => 'required|string',  
            'total'         => 'required|numeric',
        ]);

        $user = Auth::user();
        if (!$user) {
            return response()->json(['message' => 'User not authenticated'], 401);
        }

        DB::beginTransaction();

        try {
            $order = Order::create([
                'user_id'       => $user->id,
                'total_price'   => $request->total,
                'address'       => $request->address,
                'order_details' => $request->order_details,
                'status'        => 'pending',
                'payment_status'=> 'unpaid',
            ]);

            Payment::create([
                'order_id'   => $order->id,
                'method'     => 'COD',  
                'amount'     => $request->total,
                'status'     => 'pending',
            ]);

            DB::commit();

            return response()->json(['message' => 'Order placed successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Order placement failed: ' . $e->getMessage());
            return response()->json(['message' => 'Failed to place order: ' . $e->getMessage()], 500);
        }
    }
}
