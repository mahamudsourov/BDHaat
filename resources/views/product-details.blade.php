@extends('index')
@section('title', 'Product Details')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-details.css') }}">
@endpush

@section('content')


    <section id="prodetails" class="section-p1">

        <div class="single-pro-image">
            <img id="mainImg" src="" alt="Product Image">
        </div>

        <div class="single-pro-details">
            <h6 id="brand"></h6>
            <h4 id="title"></h4>
            <h2 id="price"></h2>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" value="1" min="1" />
            <br />
            <button class="normal" onclick="addToCart()">Add to Cart</button>
            <button class="normal" onclick="buyNow()">Buy Now</button>

            <h4>Product Details</h4>
            <p>High quality fabric, stylish design, made in Bangladesh.</p>
        </div>
    </section>


    @push('scripts')
        <script src="{{ asset('js/product-details.js') }}"></script>
    @endpush
@endsection
