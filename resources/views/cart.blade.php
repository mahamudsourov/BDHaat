<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Cart - BDHaat</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/darkmode.css') }}">
    <script>
        const IMAGE_PATH = "{{ asset('images') }}";
    </script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

</head>

<body>

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

    <script src="{{ asset('js/cart.js') }}"></script>
    <script src="{{ asset('js/darkmode.js') }}"></script>

</body>

</html>