@extends('admin.layouts.admin')

@section('title', 'Order Management')

@section('content')
    <h1>Order Management</h1>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#ID</th>
                    <th>User</th>
                    <th>Total</th>
                    <th>Address</th>
                    <th>Order Details</th>
                    <th>Status</th>
                    <th>Payment Status</th>
                    <th>Placed At</th>
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user->name ?? 'N/A' }}</td>
                        <td>BDT {{ number_format($order->total_price, 2) }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->order_details }}</td> <!-- show the plain order details string -->
                        <td>{{ ucfirst($order->status) }}</td>
                        <td>{{ ucfirst($order->payment_status ?? 'unpaid') }}</td>
                        <td>{{ $order->created_at->format('d M Y, h:i A') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">No orders found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection