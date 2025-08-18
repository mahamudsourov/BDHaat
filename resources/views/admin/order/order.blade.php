@extends('admin.layouts.admin')

@section('title',)
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/order_admin.css') }}">
@endpush

@section('content')
<h1 class="page-heading">Order Management</h1>


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
                <td>{{ $order->order_details }}</td>
                <td>
                    <!-- Update Status Dropdown -->
                    <form action="{{ route('admin.orders.update', $order->id) }}" method="POST"
                        style="display:inline-block;">
                        @csrf
                        @method('PUT')
                        <select name="status" onchange="this.form.submit()" class="form-select form-select-sm">
                            <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending
                            </option>
                            <option value="confirmed" {{ $order->status == 'confirmed' ? 'selected' : '' }}>Confirmed
                            </option>
                            <option value="out_for_delivery"
                                {{ $order->status == 'out_for_delivery' ? 'selected' : '' }}>Out for Delivery
                            </option>
                            <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Delivered
                            </option>
                        </select>
                    </form>

                    <!-- Delete Order Button -->
                    <form class="delete-order-form" action="{{ route('admin.orders.delete', $order->id) }}"
                        method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
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

<!-- Dynamic Confirmation Box -->
<div id="confirm-box" style="
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9999;
">
    <div style="
        background: #fff;
        padding: 20px 30px;
        border-radius: 8px;
        text-align: center;
        max-width: 400px;
        width: 90%;
    ">
        <p id="confirm-message" style="margin-bottom: 20px; font-size: 16px;">Are you sure?</p>
        <button id="confirm-yes" class="btn btn-danger me-2">Yes</button>
        <button id="confirm-no" class="btn btn-secondary">No</button>
    </div>
</div>

<script>
window.addEventListener('load', function () {
    const confirmBox = document.getElementById('confirm-box');
    const confirmMessage = document.getElementById('confirm-message');
    const confirmYes = document.getElementById('confirm-yes');
    const confirmNo = document.getElementById('confirm-no');

    let formToSubmit = null;

    // Attach event to all delete forms
    document.querySelectorAll('.delete-order-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Stop default submit
            formToSubmit = this;

            // Show dynamic confirmation
            confirmMessage.innerText = 'Are you sure you want to delete this order?';
            confirmBox.style.display = 'flex';
        });
    });

    // Cancel delete
    confirmNo.addEventListener('click', function() {
        formToSubmit = null;
        confirmBox.style.display = 'none';
    });

    // Confirm delete
    confirmYes.addEventListener('click', function() {
        if(formToSubmit) {
            formToSubmit.submit(); // Original form submit
        }
        confirmBox.style.display = 'none';
    });
});
</script>
@endsection
