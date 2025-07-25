<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Customer Care Chatbot</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="{{ asset('css/chatbot.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/darkmode.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
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

    {{-- Hero Section --}}
    <section id="page-header3" class="about-header">
        <h2>#Let's_Talk</h2>
        <p>We love to hear from you!</p>
    </section>

    {{-- Chatbot Section --}}
    <div class="chatbot-page">
        <div class="chatbot-header">
            <span>Customer Support</span>
        </div>

        <div class="chatbot-body" id="chatbotBody">
            <!-- Combined Carousel + Dropdown Card -->
            <div class="info-card">
                <div class="carousel">
                    <div class="carousel-track">
                        <img src="{{ asset('images/sweets1.jpg') }}" alt="Slide 1">
                        <img src="{{ asset('images/tea.jpg') }}" alt="Slide 2">
                        <img src="{{ asset('images/khejur1.jpg') }}" alt="Slide 3">
                    </div>
                </div>
                <!-- Bot welcome message -->
                <div class="bot-welcome">
                    <img src="{{ asset('images/chatbot.png') }}" class="bot-avatar" alt="avatar">
                    <div class="bot-msg">Dear Sir! Hope you are having a great day!<br>Ask me anything, I'm here to
                        help.</div>
                </div>

                <div class="dropdowns">
                    <details>
                        <summary>Offers & Discounts</summary>
                        <p>All current promotions and coupon codes are listed here.</p>
                    </details>
                    <details>
                        <summary>Order Related</summary>
                        <p>Track orders, cancel requests, and manage invoices.</p>
                    </details>
                    <details>
                        <summary>Shipping & Delivery Related</summary>
                        <p>Shipping times, return policies, and pickup options.</p>
                    </details>
                </div>
            </div>

            <!-- Quick Chat Options -->
            <div class="chat-options">
                <button class="chat-btn">Order Information</button>
                <button class="chat-btn">Track Complaints</button>
                <button class="chat-btn">Submit Feedback</button>
                <button class="chat-btn">Explore More</button>
                <button class="chat-btn">বাংলাতে চ্যাট করুন</button>
            </div>
        </div>
    </div>

    {{-- Form --}}
    <section id="form-details">
        <form id="contactForm" class="contact-form">
            <span class="form-subtitle">Message Us</span>
            <h2 class="form-title">We Love to Hear from You!</h2>

            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" rows="6" placeholder="Your Message" required></textarea>

            <button type="submit" class="submit-btn">Submit</button>
            <div id="form-status"></div>
        </form>
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

    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/darkmode.js') }}"></script>

</body>

</html>
