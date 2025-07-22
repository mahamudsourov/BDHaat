<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Product Details - BDHaat</title>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-details.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="{{ asset('css/darkmode.css') }}">
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

                
            <li>
                <button id="darkModeToggle" class="dark-toggle">🌙</button>
            </li>
            </ul>
    </section>

    <section id="prodetails" class="section-p1">

        <div class="single-pro-image">
            <img id="mainImg" src="" alt="Product Image">
        </div>

        <div class="single-pro-details">
            <h6 id="brand"></h6>
            <h4 id="title"></h4>
            <h2 id="price"></h2>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" value="1" min="1" />
            <br />
            <button class="normal" onclick="addToCart()">Add to Cart</button>
            <button class="normal" onclick="buyNow()">Buy Now</button>

            <h4>Product Details</h4>
            <p>High quality fabric, stylish design, made in Bangladesh.</p>
        </div>
    </section>

    <!-- Footer -->

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="" />
            <h4>Contact</h4>
            <p>
                <strong>Address: </strong>House 273, Road 13, Block C, Mirpur 6, Dhaka
                1216
            </p>
            <p><strong>Phone</strong> +8801787087017 / +8801737611605</p>
            <p><strong>Hours</strong> 8:00 AM - 11:59 PM, Sat - Thu</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Condition</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="" />
                <img src="img/pay/play.jpg" alt="" />
            </div>
            <div class="secured-payment">
                <p class="payment-title">Secured Payment Gateways</p>
                <div class="payment-icons">
                    <img src="{{ asset('images/bkash.png') }}" alt="Bkash">
                    <img src="{{ asset('images/nagad.png') }}" alt="Nagad">
                    <img src="{{ asset('images/visa.png') }}" alt="Visa">
                    <img src="{{ asset('images/american-express.png') }}" alt="American Express">
                </div>
            </div>
        </div>


        <div class="copyright">
            <p>&copy; BDHaat. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/product-details.js') }}"></script>
    <script src="{{ asset('js/darkmode.js') }}"></script>

</body>

</html>
