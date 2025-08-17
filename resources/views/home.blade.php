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
                <i class="fas fa-shipping-fast icon delivery-icon"></i>
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
    
    <!-- Trending Products -->
<section id="product1" class="section-p1">
    <h2>Trending Products</h2>
    <p>Most popular picks from all categories</p>
    <div class="pro-container">
        @foreach ($trending as $item)
            <div class="pro"
                onclick="goToDetails('{{ $item->image }}', '{{ $item->name }}', '{{ $item->description ?? '' }}', {{ $item->price }})">
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
                <div class="des">
                    <span>{{ class_basename($item) }}</span>
                    <h5>{{ $item->name }}</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT {{ $item->price }}</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        @endforeach
    </div>
</section>

    <!-- BD mart -->

    <!-- New Arrival -->

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Authentic Clothes, Fresh Foods & Healthy Foods</p>
        <div class="pro-container">
            @foreach ($newArrivals as $item)
                <div class="pro"
                    onclick="goToDetails('{{ $item->image }}', '{{ $item->name }}', '{{ $item->description ?? '' }}', {{ $item->price }})">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
                    <div class="des">
                        <span>{{ class_basename($item) }}</span>
                        <h5>{{ $item->name }}</h5>
                        <div class="star">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>BDT {{ $item->price }}</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
            @endforeach
        </div>
    </section>


@endsection

@push('scripts')
    <script src="{{ asset('js/clothes.js') }}"></script>
@endpush
