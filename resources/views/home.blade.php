<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=vz, initial-scale=1.0" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chatbot.css') }}">
    <link rel="stylesheet" href="{{ asset('css/darkmode.css') }}">
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

            <li><a href="#" id="openLoginBtn">Login</a></li>
            <li><a href="#" id="openRegisterBtn">Sign Up</a></li>

            <li>
                <button id="darkModeToggle" class="dark-toggle">🌙</button>
            </li>


        </ul>
    </section>
    {{-- Hero Section --}}

    <section id="hero">
        <h1>Easy way to Shop</h1>
        <h1>Choose your Products</h1>
        <p>Save more with coupons & up to 60% off!</p>
    </section>
    <!-- Why Shop -->

    <section class="why-shop">
        <h2 class="section-title">Why Shop With Us</h2>
        <div class="features">
            <div class="feature-box">
                <i class="fas fa-truck-fast icon"></i>
                <h3>Fast Delivery</h3>
                <p>We deliver your products quickly and safely to your doorstep.</p>
            </div>
            <div class="feature-box">
                <i class="fas fa-box-open icon"></i>
                <h3>Free Shipping</h3>
                <p>
                    Enjoy free shipping on all your orders with no minimum purchase.
                </p>
            </div>
            <div class="feature-box">
                <i class="fas fa-award icon"></i>
                <h3>Best Quality</h3>
                <p>
                    Our products are made with top-quality materials and craftsmanship.
                </p>
            </div>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Trending Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">

            

            <!-- Cards with onclick to product details -->
            <div class="pro" onclick="goToDetails('punjabi1.jpg', 'BDHaat-Authentic', 'Punjabi-1', 890)">
                <img src="{{ asset('images/punjabi1.jpg') }}" alt="">
                <div class="des">
                    <span>BDHaat-Authentic</span>
                    <h5>Punjabi-1</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 890</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="goToDetails('saree1.jpg', 'Tangail', 'Sari-1', 790)">
                <img src="{{ asset('images/saree1.jpg') }}" alt="">
                <div class="des">
                    <span>Tangail</span>
                    <h5>Sari-1</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 790</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="goToDetails('sari2.webp', 'Tangail', 'Sari-2', 1050)">
                <img src="{{ asset('images/sari2.webp') }}" alt="">
                <div class="des">
                    <span>Tangail</span>
                    <h5>Sari-2</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 1050</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="goToDetails('tripori_clothes.jpg', 'Bandarban', 'Tripori', 990)">
                <img src="{{ asset('images/tripori_clothes.jpg') }}" alt="">
                <div class="des">
                    <span>Bandarban</span>
                    <h5>Tripori</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 990</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="goToDetails('sari5.jpeg', 'Dhaka', 'Sari-3', 840)">
                <img src="{{ asset('images/sari5.jpeg') }}" alt="">
                <div class="des">
                    <span>Dhaka</span>
                    <h5>Sari-3</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 840</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="goToDetails('couple.jpg', 'Rangamati', 'Couple', 3080)">
                <img src="{{ asset('images/couple.jpg') }}" alt="">
                <div class="des">
                    <span>Rangamati</span>
                    <h5>Couple</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 3080</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="goToDetails('punjabi2.webp', 'Dhaka', 'Panjabi-2', 1050)">
                <img src="{{ asset('images/punjabi2.webp') }}" alt="">
                <div class="des">
                    <span>Dhaka</span>
                    <h5>Panjabi-2</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 1050</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="goToDetails('Tribal.jpg', 'Rangamati', 'Tribal-1', 1500)">
                <img src="{{ asset('images/Tribal.jpg') }}" alt="">
                <div class="des">
                    <span>Rangamati</span>
                    <h5>Tribal-1</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 1500</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

        </div>
    </section>

    <!-- BD mart -->
    <!-- New Arrival -->

   <section id="product1" class="section-p1">
       <h2>New Arrivals</h2>
        <p>fresh fruits and Traditional Foods</p></p>
        <div class="pro-container">
            <!-- Cards with onclick to product details -->
            <div class="pro" onclick="goToDetails('punjabi1.jpg', 'BDHaat-Authentic', 'Punjabi-1', 890)">
                <img src="{{ asset('images/punjabi1.jpg') }}" alt="">
                <div class="des">
                    <span>BDHaat-Authentic</span>
                    <h5>Punjabi-1</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 890</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="goToDetails('saree1.jpg', 'Tangail', 'Sari-1', 790)">
                <img src="{{ asset('images/saree1.jpg') }}" alt="">
                <div class="des">
                    <span>Tangail</span>
                    <h5>Sari-1</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 790</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="goToDetails('sari2.webp', 'Tangail', 'Sari-2', 1050)">
                <img src="{{ asset('images/sari2.webp') }}" alt="">
                <div class="des">
                    <span>Tangail</span>
                    <h5>Sari-2</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 1050</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="goToDetails('tripori_clothes.jpg', 'Bandarban', 'Tripori', 990)">
                <img src="{{ asset('images/tripori_clothes.jpg') }}" alt="">
                <div class="des">
                    <span>Bandarban</span>
                    <h5>Tripori</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 990</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="goToDetails('sari5.jpeg', 'Dhaka', 'Sari-3', 840)">
                <img src="{{ asset('images/sari5.jpeg') }}" alt="">
                <div class="des">
                    <span>Dhaka</span>
                    <h5>Sari-3</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 840</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="goToDetails('couple.jpg', 'Rangamati', 'Couple', 3080)">
                <img src="{{ asset('images/couple.jpg') }}" alt="">
                <div class="des">
                    <span>Rangamati</span>
                    <h5>Couple</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 3080</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="goToDetails('punjabi2.webp', 'Dhaka', 'Panjabi-2', 1050)">
                <img src="{{ asset('images/punjabi2.webp') }}" alt="">
                <div class="des">
                    <span>Dhaka</span>
                    <h5>Panjabi-2</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 1050</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro" onclick="goToDetails('Tribal.jpg', 'Rangamati', 'Tribal-1', 1500)">
                <img src="{{ asset('images/Tribal.jpg') }}" alt="">
                <div class="des">
                    <span>Rangamati</span>
                    <h5>Tribal-1</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 1500</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

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
    
</body>

<!-- Login Modal -->
<div id="loginModal" class="login-modal">
    <div class="login-modal-content slide-down">
        <span class="close" id="closeLoginBtn">&times;</span>
        <h2>Login</h2>
        <form id="loginForm">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter your password" required>

            <button type="submit">Login</button>

            <p id="errorMsg" class="error-text">All fields are required.</p>
            <p id="registerMsg" class="error-text">Registered First!</p>

            <p class="register-link">
                Don't have an account?
                <a href="signup.html">Register here</a>
            </p>
        </form>
    </div>
</div>

<!-- Register Modal -->
<div id="registerModal" class="login-modal">
    <div class="login-modal-content slide-down">
        <span class="close" id="closeRegisterBtn">&times;</span>
        <h2>Register</h2>
        <form id="registerForm">
            <label for="regName">Name</label>
            <input type="text" id="regName" placeholder="Enter your name" required>

            <label for="regEmail">Email</label>
            <input type="email" id="regEmail" placeholder="Enter your email" required>

            <label for="regPhone">Phone</label>
            <input type="text" id="regPhone" placeholder="Enter your phone number" required>

            <label for="regAddress">Address</label>
            <input type="text" id="regAddress" placeholder="Enter your address" required>

            <button type="submit">Register</button>

            <p class="error-text" id="registerErrorMsg">Please fill all fields.</p>

            <p class="register-link">
                Already have an account?
                <a href="#" id="switchToLogin">Login here</a>
            </p>
        </form>
    </div>
</div>

<script src="{{ asset('js/clothes.js') }}"></script>
    <script src="{{ asset('js/darkmode.js') }}"></script>
<script src="{{ asset('js/login.js') }}"></script>




</html>
