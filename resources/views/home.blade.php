@extends('index')

@section('title', 'BDHaat - Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

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
        <p>fresh fruits and Traditional Foods</p>
        </p>
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
            <img class="logo" src="{{ asset('images/logo.png') }}" alt="BDHaat Logo" />
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
                <!-- App store and Google Play images need to be added to the images directory -->
                <img src="{{ asset('images/logo.png') }}" alt="App Store" />
                <img src="{{ asset('images/logo.png') }}" alt="Google Play" />
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

@endsection

@push('scripts')
    <script src="{{ asset('js/clothes.js') }}"></script>
    <script src="{{ asset('js/darkmode.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>
@endpush
