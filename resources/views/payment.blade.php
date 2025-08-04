<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Payment Information - BDHaat</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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

            <li class="dropdown">
                <a href="#">Help & Support</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('helpcenter') }}">Help Center</a></li>
                    <li><a href="{{ route('customercare') }}">Contact Customer Care</a></li>
                    <li><a href="{{ route('order') }}">Order</a></li>
                    <li><a href="{{ route('payment') }}">Payment</a></li>
                    <li><a href="{{ route('returnrefund') }}">Return & Refunds</a></li>
                </ul>
            </li>

            <li>
                <button id="darkModeToggle" class="dark-toggle">🌙</button>
            </li>
        </ul>
    </section>
    <div class="container">
        <header>
            <h1>Payment Information</h1>
            <p class="subtitle">Manage your payments and track statuses easily</p>
        </header>

        <!-- Payment Methods -->
        <section class="card payment-methods">
            <h2>Available Payment Methods</h2>
            <ul>
                <li><strong>Cash on Delivery (COD):</strong> Pay when your order arrives.</li>
                <li><strong>Online Payment:</strong> Bkash, Nagad, Rocket, Visa, Mastercard.</li>
                <li><strong>Bank Transfer:</strong> Details sent to your email after order confirmation.</li>
            </ul>
        </section>

        <!-- Transaction History -->
        <section class="card transaction-history">
            <h2>Recent Transactions</h2>
            <table>
                <thead>
                    <tr>
                        <th>Invoice #</th>
                        <th>Amount</th>
                        <th>Payment Method</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1023</td>
                        <td>৳850</td>
                        <td>Bkash</td>
                        <td><span class="status paid">Paid</span></td>
                        <td>2025-07-20</td>
                    </tr>
                    <tr>
                        <td>#1024</td>
                        <td>৳1290</td>
                        <td>COD</td>
                        <td><span class="status pending">Pending</span></td>
                        <td>2025-07-22</td>
                    </tr>
                    <tr>
                        <td>#1020</td>
                        <td>৳450</td>
                        <td>Credit Card</td>
                        <td><span class="status refunded">Refunded</span></td>
                        <td>2025-07-10</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- FAQ Section -->
        <section class="card faq-section">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-item">
                <h4>Is online payment secure?</h4>
                <p>Yes, we use SSL encryption and trusted payment gateways to ensure your payment details are protected.
                </p>
            </div>
            <div class="faq-item">
                <h4>Can I get a refund if I pay online?</h4>
                <p>Refunds are processed within 5-7 business days to your original payment method upon approval.</p>
            </div>
            <div class="faq-item">
                <h4>What if my payment fails?</h4>
                <p>If a payment fails, please try again or contact customer support for assistance.</p>
            </div>
        </section>
    </div>
    <script src="{{ asset('js/darkmode.js') }}"></script>
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
</body>

</html>
