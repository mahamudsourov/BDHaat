<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <title>BDHaat</title>
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
        <div id="search-cart">
            <div class="search-box">
                <input type="text" placeholder="Search products..." id="search-bar" />
                <button id="search-button"><i class="fas fa-search"></i></button>
            </div>
            <a href="cart.html" id="cart-icon"><i class="fas fa-shopping-cart"></i></a>
        </div>

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

            <li><a href="{{ route('healthy_food') }}">Healthy Foods</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </section>

    <section id="page-header3" class="about-header">
        <h2>#Let's_Talk</h2>
        <p>We love to hear from you!</p>
    </section>

    <section class="about-section">
        <div class="about-container">
            <h3 class="about-title">About Us</h3>
            <p class="about-text">
                We are dedicated to preserving tradition and delivering quality. Our team works with passion to bring
                you authentic traditional products crafted with care and excellence.
            </p>
        </div>
    </section>


</body>
</html>
