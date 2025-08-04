<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Return & Refund Policy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap, Google Fonts, FontAwesome --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/returnrefund.css') }}">
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

    <div class="return-container">
        <h2><i class="fas fa-undo-alt me-2"></i>Return & Refund Policy</h2>
        <p class="mt-3">Your satisfaction is our priority. If you’re not happy with your purchase, we’re here to help.</p>

        {{-- Accordion --}}
        <div class="accordion mt-4" id="faqAccordion">

            {{-- Return Eligibility --}}
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                        <i class="fas fa-box-open me-2"></i> Return Eligibility
                    </button>
                </h4>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-check-circle"></i> Return within 7 days of delivery</li>
                            <li class="list-group-item"><i class="fas fa-check-circle"></i> Unused items in original packaging</li>
                            <li class="list-group-item"><i class="fas fa-check-circle"></i> Valid receipt or order number required</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Non-returnable Items --}}
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                        <i class="fas fa-ban me-2"></i> Non-returnable Items
                    </button>
                </h4>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-times-circle"></i> Perishable goods (e.g., food)</li>
                            <li class="list-group-item"><i class="fas fa-times-circle"></i> Digital products or downloads</li>
                            <li class="list-group-item"><i class="fas fa-times-circle"></i> Gift cards or free items</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Refund Process --}}
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                        <i class="fas fa-credit-card me-2"></i> Refund Process
                    </button>
                </h4>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>Once your return is received and inspected, we’ll notify you. If approved, your refund will be processed to your original payment method within 5–7 business days.</p>
                    </div>
                </div>
            </div>

            {{-- Need Help --}}
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                        <i class="fas fa-headset me-2"></i> Need Help?
                    </button>
                </h4>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>If you need assistance with your return, please contact our <a href="{{ route('customercare') }}">Customer Care</a> team. We’re happy to assist you.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Bootstrap JS + Custom JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/returnrefund.js') }}"></script>
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
