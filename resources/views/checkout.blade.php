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
document.addEventListener("DOMContentLoaded", function () {
    const orderList = document.getElementById("order-summary");
    const totalDisplay = document.getElementById("total-amount");

    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    let buynow = JSON.parse(localStorage.getItem("buynow"));
    let products = [];
    let total = 0;

    if (buynow) {
        products = [buynow];
        total = buynow.price * buynow.quantity;
    } else if (cart.length > 0) {
        products = cart;
        total = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
    } else {
        orderList.innerHTML = "<li>No items to checkout</li>";
        totalDisplay.innerText = "";
        return;
    }

    products.forEach(item => {
        const li = document.createElement("li");
        li.textContent = `${item.title} (x${item.quantity}) - BDT ${item.price * item.quantity}`;
        orderList.appendChild(li);
    });

    totalDisplay.innerText = `Total: BDT ${total}`;
});

document.getElementById('checkout-form').addEventListener('submit', async function (e) {
    e.preventDefault();

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const address = document.getElementById('address').value.trim();

    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let buynow = JSON.parse(localStorage.getItem('buynow'));
    let products = [];
    let total = 0;

    if (buynow) {
        products = [buynow];
        total = buynow.price * buynow.quantity;
    } else if (cart.length > 0) {
        products = cart;
        total = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
    } else {
        alert("No items to checkout.");
        return;
    }

    try {
        const response = await fetch("{{ route('place.order') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                name, email, phone, address, products, total
            })
        });

        const result = await response.json();

        alert(result.message);

        // Clear localStorage
        localStorage.removeItem('cart');
        localStorage.removeItem('buynow');

        window.location.href = "/clothes";
    } catch (err) {
        console.error(err);
        alert("Failed to place order. Try again later.");
    }
});
</script>
@endpush
