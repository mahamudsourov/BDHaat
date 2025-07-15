<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Product Details - BDHaat</title>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-details.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>

    <section id="header">
        <!-- Left: Logo + Name -->
        <div id="logo-area">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" height="40" width="40" alt="Logo" />
            </a>
            <span class="brand-name">BDHaat</span>
        </div>


        <!-- Center: Search Bar + Search Icon + Cart -->
        <div id="search-cart" style="display: flex; align-items: center; gap: 20px;">
            <div class="search-box">
                <input type="text" placeholder="Search products..." id="search-bar" />
                <button id="search-button"><i class="fas fa-search"></i></button>
            </div>

            <!-- Cart icon with count -->
            <a href="{{ route('cart') }}" id="cart-icon" style="position: relative; font-size: 24px; color: #333;">
                <i class="fas fa-shopping-cart"></i>
                <span id="cart-count"
                    style="
            position: absolute;
            top: -8px;
            right: -10px;
            background-color: red;
            color: white;
            font-size: 12px;
            border-radius: 50%;
            padding: 2px 6px;
        ">0</span>
            </a>

            <!-- Right: Navigation -->
            <ul id="navbar">
                <li><a href="{{ route('home') }}">Home</a></li>

                <li class="dropdown">
                    <a href="#">Traditional Products</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('clothes') }}">Clothes</a></li>
                        <li><a href="{{ route('food') }}">Foods</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Help & Support</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('helpcenter') }}">Help Center</a></li>
                        <li><a href="{{ route('order') }}">Order</a></li>
                        <li><a href="{{ route('payment') }}">Payment</a></li>
                        <li><a href="{{ route('returnrefund') }}">Return & Refunds</a></li>
                    </ul>
                </li>

                <li><a href="{{ route('healthy_food') }}">Healthy Foods</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
    </section>

    



    <script src="{{ asset('js/product-details.js') }}"></script>

</body>
</html>
