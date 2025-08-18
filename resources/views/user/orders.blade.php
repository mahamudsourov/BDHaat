@extends('index')

@section('title', 'My Orders')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/order_user.css') }}">
@endpush

@section('content')
<div class="orders-container">
    <h3>Your Orders</h3>

    @if(session('success'))
        <div class="alert alert-success" id="flashMessage">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger" id="flashMessage">{{ session('error') }}</div>
    @endif

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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>BDT {{ number_format($order->total_price, 2) }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->order_details }}</td>
                            <td>
                                <span class="status-badge status-{{ $order->status }}">
                                    {{ str_replace('_',' ', $order->status) }}
                                </span>
                            </td>
                            <td>{{ ucfirst($order->payment_status ?? 'unpaid') }}</td>
                            <td>{{ $order->created_at->format('d M Y, h:i A') }}</td>
                            <td>
                                @if(in_array($order->status, ['pending','confirmed']))
                                    <button class="cancel-btn" onclick="openModal({{ $order->id }})">
                                        Cancel
                                    </button>
                                @else
                                    —
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>

<!-- Confirm Modal -->
<div id="cancelModal" class="modal">
    <div class="modal-content">
        <h4>Are you sure you want to cancel this order?</h4>
        <form id="cancelForm" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="confirm-btn">Yes, Cancel</button>
            <button type="button" class="cancel-btn-modal" onclick="closeModal()">No</button>
        </form>
    </div>
</div>

@push('scripts')
    <script src="{{ asset('js/order_user.js') }}"></script>
@endpush
@endsection
