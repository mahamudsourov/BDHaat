<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=vz, initial-scale=1.0" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

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
            <li><a class="active" href="index.html">Home</a></li>

            <li class="dropdown">
                <a href="#">Traditional Products</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Clothes</a></li>
                    <li><a href="#">Foods</a></li>
                </ul>
            </li>

            <li><a href="#">Healthy Foods</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Sign Up</a></li>
        </ul>
    </section>

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

    <!-- Trending Product -->
    <section id="product1" class="section-p1">
        <h2>Trending Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/f1.jpg" alt="" />
                <div class="des">
                    <span>Punjab-1</span>
                    <h5>BDHaat-Authentic</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 890</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="img/products/f2.jpg" alt="" />
                <div class="des">
                    <span>Saree</span>
                    <h5>Tangail</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 790</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="img/products/f3.jpg" alt="" />
                <div class="des">
                    <span>adidas</span>
                    <h5>T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 1050</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="img/products/f4.jpg" alt="" />
                <div class="des">
                    <span>Punjabi-2</span>
                    <h5>Dhaka</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 990</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="img/products/f5.jpg" alt="" />
                <div class="des">
                    <span>Honey</span>
                    <h5>Healthy Food</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 840</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="img/products/f6.jpg" alt="" />
                <div class="des">
                    <span>adidas</span>
                    <h5>T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 1280</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="img/products/f7.jpg" alt="" />
                <div class="des">
                    <span>adidas</span>
                    <h5>Ladies paint</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 1950</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="img/products/f8.jpg" alt="" />
                <div class="des">
                    <span>adidas</span>
                    <h5>Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT 3150</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>

    <!-- BD mart -->

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
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" height="80" width="350" alt="" />
        </div>

        <div class="copyright">
            <p>&copy; BDHaat. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
