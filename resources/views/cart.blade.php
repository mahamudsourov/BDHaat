@extends('index')

@section('title', 'Cart')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endpush
@section('content')

    <div class="cart-container">
        <h2>Your Cart</h2>
        <table id="cart-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Brand</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                <!-- JS will add rows here -->
            </tbody>
        </table>

        <div class="total-price" id="total-price"></div>

        <a href="{{ route('checkout') }}" class="checkout-btn" id="checkout-btn" style="display:none;">Proceed to
            Checkout</a>
    </div>
    @push('scripts')
        <script src="{{ asset('js/cart.js') }}"></script>        
    @endpush

@endsection