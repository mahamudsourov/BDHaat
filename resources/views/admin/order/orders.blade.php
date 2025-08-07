@extends('admin.admin')

@section('title', 'Order Management')

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#ID</th>
                    <th>User</th>
                    <th>Total</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Payment</th>
                    <th>Items</th>
                    <th>Placed At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>BDT {{ $order->total_price }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ ucfirst($order->status) }}</td>
                        <td>
                            {{ $order->payment->method ?? 'N/A' }}<br>
                            {{ ucfirst($order->payment->status ?? '-') }}
                        </td>
                        <td>
                            <ul>
                                @foreach($order->orderItems as $item)
                                    <li>{{ $item->product->title }} (x{{ $item->quantity }})</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{ $order->created_at->format('d M Y, h:i A') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
