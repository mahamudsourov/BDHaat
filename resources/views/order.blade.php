<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Orders</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
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

    <!-- Order FAQs -->
    <section class="order-section" aria-labelledby="order-faqs-heading">
        <h2 id="order-faqs-heading">Order FAQs</h2>

        <div class="faq-item">
            <details>
                <summary>How can I track my order?</summary>
                <p>You can track your order by clicking the "Track Delivery" button in your orders section or by
                    visiting the Order Tracking page.</p>
            </details>

            <details>
                <summary>Can I cancel an order after placing it?</summary>
                <p>Orders can be cancelled only if they are not yet shipped. Please visit the Cancel Orders section
                    or contact customer care for assistance.</p>
            </details>

            <details>
                <summary>How do I reorder a product?</summary>
                <p>Simply click the "Reorder" button next to the product in your order history to place the same
                    order again.</p>
            </details>

            <details>
                <summary>What is a pre-order and how does it work?</summary>
                <p>Pre-orders allow you to book products before they are officially released. Once available, they
                    will be shipped to you.</p>
            </details>

            <details>
                <summary>How long does delivery usually take?</summary>
                <p>Delivery times vary depending on your location, but typically orders arrive within 2-5 business
                    days.</p>
            </details>
        </div>
    </section>
    <div class="order-container">

        <h1>My Orders</h1>

        <!-- Ordered Products -->
        <section class="order-section">
            <h2>Ordered Products</h2>
            <div class="order-card">
                <img src="{{ asset('images/sweets1.jpg') }}" alt="Product">
                <div class="order-info">
                    <h3>Premium Honey</h3>
                    <p>Status: <span class="status delivered">Delivered</span></p>
                    <div class="order-actions">
                        <button class="track-btn">Track Delivery</button>
                        <button class="reorder-btn">Reorder</button>
                    </div>

                    <!-- Hidden timeline container -->
                    <div class="delivery-timeline" style="display:none; margin-top: 15px;">
                        <ul class="timeline-steps">
                            <li class="step completed">Order received</li>
                            <li class="step completed">In transit</li>
                            <li class="step completed">Out for delivery</li>
                            <li class="step completed">Delivered</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cancelled Orders -->
        <section class="order-section">
            <h2>Cancelled Orders</h2>
            <div class="order-card cancelled">
                <img src="{{ asset('images/khejur1.jpg') }}" alt="Product">
                <div class="order-info">
                    <h3>Dry Dates</h3>
                    <p>Status: <span class="status cancelled">Cancelled</span></p>
                    <div class="order-actions">
                        <button class="reorder-btn">Reorder</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Purchased Orders -->
        <section class="order-section">
            <h2>Purchased Products</h2>

            <div class="order-card" data-current-status="In transit">
                <img src="{{ asset('images/tea.jpg') }}" alt="Product">
                <div class="order-info">
                    <h3>Organic Tea</h3>
                    <p>Status: <span class="status purchased">Purchased</span></p>
                    <div class="order-actions">
                        <button class="track-btn">Track Delivery</button>
                    </div>

                    <!-- Hidden timeline container -->
                    <div class="delivery-timeline" style="display:none; margin-top: 15px;">
                        <ul class="timeline-steps">
                            <li class="step">Order received</li>
                            <li class="step">In transit</li>
                            <li class="step">Out for delivery</li>
                            <li class="step">Delivered</li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>


        <!-- Pre-Orders -->
        <section class="order-section" aria-labelledby="pre-orders-heading">
            <h2 id="pre-orders-heading">Pre-Orders</h2>
            <div class="order-card pre-order" role="article" aria-label="Pre-ordered product Premium Green Tea">
                <img src="{{ asset('images/ilish1.jpeg') }}" alt="Premium Green Tea" />
                <div class="order-info">
                    <h3>Padda River Fresh Ilish</h3>
                    <p>Status: <span class="status preordered">Pre-Ordered</span></p>
                    <div class="order-actions">
                        <button class="cancel-preorder-btn" aria-label="Cancel pre-order for Premium Green Tea">Cancel
                            Pre-Order</button>
                        <button class="info-preorder-btn"
                            aria-label="More info about Premium Green Tea pre-order">More
                            Info</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="{{ asset('js/order.js') }}"></script>
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
