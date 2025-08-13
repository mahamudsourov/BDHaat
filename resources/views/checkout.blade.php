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

            <h3>Order Summary</h3>
            <ul id="order-summary"></ul>
            <p id="total-amount" style="font-weight:bold;"></p>

            <button type="submit" class="submit-btn">Place Order</button>
        </form>
    </div>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let buyNow = JSON.parse(localStorage.getItem('buynow'));
            let products = [];
            let total = 0;

            if (buyNow) {
                products = [buyNow];
                total = buyNow.price * buyNow.quantity;
            } else if (cart.length > 0) {
                products = cart;
                total = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
            }

            // Show order summary in checkout page
            const orderSummaryEl = document.getElementById('order-summary');
            const totalAmountEl = document.getElementById('total-amount');

            products.forEach(p => {
                // Try different keys for product name fallback
                const productName = p.name ?? p.title ?? p.product_name ?? 'Unknown Product';
                const li = document.createElement('li');
                li.textContent = `${productName} (x${p.quantity}) - BDT ${p.price * p.quantity}`;
                orderSummaryEl.appendChild(li);
            });

           
    </script>
@endpush
