@extends('index')

@section('title', 'My Orders')

@push('styles')
    <style>
    
        .orders-container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
        }

        .orders-container h3 {
            margin-bottom: 25px;
            font-size: 22px;
            font-weight: bold;
            color: #0a5e58;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
        }

        table th {
            background-color: #007bff;
            color: #fff;
            font-weight: 500;
        }

        table tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        table tr:hover {
            background-color: #e9ecef;
        }

        @media (max-width: 768px) {
            table th, table td {
                padding: 10px;
            }
        }
      
    </style>
@endpush

@section('content')
<div class="orders-container">
    <h3>Your Orders</h3>

    @if($orders->isEmpty())
        <p>No orders found.</p>
    @else
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Total</th>
                        <th>Address</th>
                        <th>Order Details</th>
                        <th>Status</th>
                        <th>Payment Status</th>
                        <th>Placed At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>BDT {{ number_format($order->total_price, 2) }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->order_details }}</td>
                            <td>{{ ucfirst($order->status) }}</td>
                            <td>{{ ucfirst($order->payment_status ?? 'unpaid') }}</td>
                            <td>{{ $order->created_at->format('d M Y, h:i A') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
