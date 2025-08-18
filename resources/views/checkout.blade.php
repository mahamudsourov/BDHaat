@extends('index')

@section('title', 'Checkout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    
@endpush

@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $user = Auth::user();
    @endphp

    <div class="checkout-container">
        <h2>Checkout</h2>

        <form id="checkout-form">
            <label for="name">Name:</label>
            <input type="text" id="name" value="{{ $user->name }}" required />

            <label for="email">Email:</label>
            <input type="email" id="email" value="{{ $user->email }}" required />

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" required />

            <label for="address">Address:</label>
            <textarea id="address" rows="4" required></textarea>

            <label for="payment_method">Payment Method:</label>
            <select id="payment_method" required>
                <option value="COD">Cash on Delivery</option>
                <option value="Bkash">Bkash</option>
                <option value="Nagad">Nagad</option>
            </select>

            <h3>Order Summary</h3>
            <ul id="order-summary"></ul>
            <p id="total-amount" style="font-weight:bold;"></p>

            <button type="submit" class="submit-btn">Place Order</button>
        </form>
    </div>

    <!-- ✅ Message Box for Dynamic Messages -->
    <div id="checkout-message-box"
        style="
    position: fixed;
    top: 20px;
    right: 20px;
    background: #28a745;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    display: none;
    z-index: 9999;
    ">
    </div>


@endsection

@push('scripts')
    <script src="{{ asset('js/checkout.js')}}"></script>
@endpush



