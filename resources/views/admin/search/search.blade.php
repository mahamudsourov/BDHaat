@extends('index')

@section('title', 'Search Results')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

<section id="product1" class="section-p1">
    <h2>Search Results</h2>
    @if($query)
        <p>Showing results for: <strong>{{ $query }}</strong></p>
    @endif
    @if($message)
        <p style="color: red;">{{ $message }}</p>
    @endif

    <div class="pro-container">
        @forelse($results as $item)
            <div class="pro"
                onclick="selectProduct({{ json_encode([
                    'id' => $item['id'],
                    'type' => $item['type'],
                    'title' => $item['name'],
                    'brand' => $item['brand'] ?? 'N/A',
                    'size' => $item['size'] ?? null,
                    'color' => $item['color'] ?? null,
                    'price' => $item['price'],
                    'image' => $item['image']
                ]) }})">
                @if($item['image'])
                    <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}">
                @else
                    <img src="{{ asset('images/placeholder.png') }}" alt="{{ $item['name'] }}">
                @endif
                <div class="des">
                    <h5>{{ $item['name'] }}</h5>
                    @if(!empty($item['brand']))
                        <p>Brand: {{ $item['brand'] }}</p>
                    @endif
                    @if(!empty($item['size']) || !empty($item['color']))
                        <p>
                            @if(!empty($item['size'])) Size: {{ $item['size'] }} @endif
                            @if(!empty($item['color'])) {{ !empty($item['size']) ? '|' : '' }} Color: {{ $item['color'] }} @endif
                        </p>
                    @endif
                    <h4>BDT {{ number_format($item['price'], 2) }}</h4>
                </div>
                <a href="#" onclick="event.stopPropagation(); addToCartFromSearch({{ json_encode([
                    'id' => $item['id'],
                    'type' => $item['type'],
                    'title' => $item['name'],
                    'brand' => $item['brand'] ?? 'N/A',
                    'size' => $item['size'] ?? null,
                    'color' => $item['color'] ?? null,
                    'price' => $item['price'],
                    'image' => $item['image']
                ]) }})"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        @empty
            <p>No products found.</p>
        @endforelse
    </div>

    <div style="margin-top: 16px;">
        {{ $results->links() }}
    </div>
</section>

@push('scripts')
    <script src="{{ asset('js/product-details.js') }}"></script>
    <script>
        // Function to select a product and navigate to details page
        function selectProduct(product) {
            localStorage.setItem('selectedProduct', JSON.stringify(product));
            window.location.href = '/product-details';
        }

        // Function to add product to cart directly from search results
        function addToCartFromSearch(product) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            
            let existingIndex = cart.findIndex(item => item.title === product.title && item.type === product.type);
            if (existingIndex > -1) {
                cart[existingIndex].quantity += 1;
            } else {
                cart.push({
                    ...product,
                    quantity: 1
                });
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount(); // Update navbar count immediately
            showMessage('✅ Added to cart!', 'success');
        }

        // Function to update cart count in navbar (copied from product-details.js)
        function updateCartCount() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            const cartCountElement = document.getElementById('cart-count');
            if (cartCountElement) {
                cartCountElement.innerText = totalItems;
            }
        }

        // Function to show messages (copied from product-details.js)
        function showMessage(msg, type = 'success') {
            let box = document.getElementById('message-box');

            if (!box) {
                box = document.createElement('div');
                box.id = 'message-box';
                box.style.position = 'fixed';
                box.style.top = '20px';
                box.style.right = '20px';
                box.style.padding = '10px 20px';
                box.style.borderRadius = '5px';
                box.style.color = '#fff';
                box.style.zIndex = '9999';
                box.style.display = 'none';
                document.body.appendChild(box);
            }

            box.innerText = msg;

            if (type === 'success') {
                box.style.background = '#28a745';
            } else if (type === 'error') {
                box.style.background = '#dc3545';
            } else {
                box.style.background = '#007bff';
            }

            box.style.display = 'block';

            setTimeout(() => {
                box.style.display = 'none';
            }, 3000);
        }

        // Update cart count on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateCartCount();
        });
    </script>
@endpush

@endsection
