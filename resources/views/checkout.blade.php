@extends('index')
@section('title', 'Checkout')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
@endpush

@section('content')

    <div class="checkout-container">
        <h2>Checkout</h2>

        <form id="checkout-form" onsubmit="return submitOrder()">
            <label for="name">Name:</label>
            <input type="text" id="name" required />

            <label for="email">Email:</label>
            <input type="email" id="email" required />

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" required />

            <label for="address">Address:</label>
            <textarea id="address" rows="4" required></textarea>

            <button type="submit" class="submit-btn">Place Order</button>
        </form>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('js/checkout.js') }}"></script>
@endpush
