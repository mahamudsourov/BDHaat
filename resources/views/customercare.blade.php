<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Customer Care Chatbot</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="{{ asset('css/chatbot.css') }}">
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
            <li><a href="{{ route('contact') }}">Contact</a></li>
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
        </ul>
    </section>

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

        <!-- Footer -->
        <div class="chatbot-footer">
            <img src="{{ asset('images/chat.png') }}" class="chat-icon" />
            <input type="text" id="userInput" placeholder="Please write your questions here" />
            <button id="sendBtn">Send</button>
        </div>
    </div>

    <script src="{{ asset('js/chatbot.js') }}"></script>
    <script src="{{ asset('js/darkmode.js') }}"></script>
</body>

</html>
