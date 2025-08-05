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

@endsection

@push('scripts')
<script src="{{ asset('js/clothes.js') }}"></script>
@endpush
