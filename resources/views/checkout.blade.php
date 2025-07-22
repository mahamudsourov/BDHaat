<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Checkout - BDHaat</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/darkmode.css') }}">
</head>
<body>



    <div></div>
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

<script src="{{ asset('js/checkout.js') }}"></script>
<script src="{{ asset('js/darkmode.js') }}"></script>
</body>
</html>
