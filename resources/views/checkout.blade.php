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
                const productName = p.name ?? p.title ?? p.product_name ?? 'Unknown Product';
                const li = document.createElement('li');
                li.textContent = `${productName} (x${p.quantity}) - BDT ${p.price * p.quantity}`;
                orderSummaryEl.appendChild(li);
            });

            totalAmountEl.textContent = `Total: BDT ${total}`;

            // Submit order handler
            document.getElementById('checkout-form').addEventListener('submit', async function(e) {
                e.preventDefault();

                const name = document.getElementById('name').value.trim();
                const email = document.getElementById('email').value.trim();
                const phone = document.getElementById('phone').value.trim();
                const address = document.getElementById('address').value.trim();
                const payment_method = document.getElementById('payment_method').value; // ✅ new

                // Build order details string to send to backend
                const orderDetails = products.map(p => {
                    const productName = p.name ?? p.title ?? p.product_name ??
                    'Unknown Product';
                    return `${productName} (x${p.quantity}) - BDT ${p.price * p.quantity}`;
                }).join('\n');

                try {
                    const response = await fetch("/place-order", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content'),
                        },
                        body: JSON.stringify({
                            name,
                            email,
                            phone,
                            address,
                            order_details: orderDetails,
                            total,
                            payment_method, // ✅ send to backend
                        }),
                    });

                    const result = await response.json();

                    alert(result.message);

                    // Clear localStorage and redirect
                    localStorage.removeItem('cart');
                    localStorage.removeItem('buynow');
                    window.location.href = "/clothes";

                } catch (err) {
                    console.error(err);
                    alert("Order failed!");
                }
            });
        });

        // fixed
    </script>
@endpush
