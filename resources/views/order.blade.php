@extends('index')
@section('title', 'Order Management')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')



    <!-- Order FAQs -->
    <section class="order-section" aria-labelledby="order-faqs-heading">
        <h2 id="order-faqs-heading">Order FAQs</h2>

        <div class="faq-item">
            <details>
                <summary>How can I track my order?</summary>
                <p>You can track your order by clicking the "Track Delivery" button in your orders section or by
                    visiting the Order Tracking page.</p>
            </details>

            <details>
                <summary>Can I cancel an order after placing it?</summary>
                <p>Orders can be cancelled only if they are not yet shipped. Please visit the Cancel Orders section
                    or contact customer care for assistance.</p>
            </details>

            <details>
                <summary>How do I reorder a product?</summary>
                <p>Simply click the "Reorder" button next to the product in your order history to place the same
                    order again.</p>
            </details>

            <details>
                <summary>What is a pre-order and how does it work?</summary>
                <p>Pre-orders allow you to book products before they are officially released. Once available, they
                    will be shipped to you.</p>
            </details>

            <details>
                <summary>How long does delivery usually take?</summary>
                <p>Delivery times vary depending on your location, but typically orders arrive within 2-5 business
                    days.</p>
            </details>
        </div>
    </section>
    <div class="order-container">

        <h1>My Orders</h1>

        <!-- Ordered Products -->
        <section class="order-section">
            <h2>Ordered Products</h2>
            <div class="order-card">
                <img src="{{ asset('images/sweets1.jpg') }}" alt="Product">
                <div class="order-info">
                    <h3>Premium Honey</h3>
                    <p>Status: <span class="status delivered">Delivered</span></p>
                    <div class="order-actions">
                        <button class="track-btn">Track Delivery</button>
                        <button class="reorder-btn">Reorder</button>
                    </div>

                    <!-- Hidden timeline container -->
                    <div class="delivery-timeline" style="display:none; margin-top: 15px;">
                        <ul class="timeline-steps">
                            <li class="step completed">Order received</li>
                            <li class="step completed">In transit</li>
                            <li class="step completed">Out for delivery</li>
                            <li class="step completed">Delivered</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cancelled Orders -->
        <section class="order-section">
            <h2>Cancelled Orders</h2>
            <div class="order-card cancelled">
                <img src="{{ asset('images/khejur1.jpg') }}" alt="Product">
                <div class="order-info">
                    <h3>Dry Dates</h3>
                    <p>Status: <span class="status cancelled">Cancelled</span></p>
                    <div class="order-actions">
                        <button class="reorder-btn">Reorder</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Purchased Orders -->
        <section class="order-section">
            <h2>Purchased Products</h2>

            <div class="order-card" data-current-status="In transit">
                <img src="{{ asset('images/tea.jpg') }}" alt="Product">
                <div class="order-info">
                    <h3>Organic Tea</h3>
                    <p>Status: <span class="status purchased">Purchased</span></p>
                    <div class="order-actions">
                        <button class="track-btn">Track Delivery</button>
                    </div>

                    <!-- Hidden timeline container -->
                    <div class="delivery-timeline" style="display:none; margin-top: 15px;">
                        <ul class="timeline-steps">
                            <li class="step">Order received</li>
                            <li class="step">In transit</li>
                            <li class="step">Out for delivery</li>
                            <li class="step">Delivered</li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>


        <!-- Pre-Orders -->
        <section class="order-section" aria-labelledby="pre-orders-heading">
            <h2 id="pre-orders-heading">Pre-Orders</h2>
            <div class="order-card pre-order" role="article" aria-label="Pre-ordered product Premium Green Tea">
                <img src="{{ asset('images/ilish1.jpeg') }}" alt="Premium Green Tea" />
                <div class="order-info">
                    <h3>Padda River Fresh Ilish</h3>
                    <p>Status: <span class="status preordered">Pre-Ordered</span></p>
                    <div class="order-actions">
                        <button class="cancel-preorder-btn" aria-label="Cancel pre-order for Premium Green Tea">Cancel
                            Pre-Order</button>
                        <button class="info-preorder-btn" aria-label="More info about Premium Green Tea pre-order">More
                            Info</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @push('scripts')
        <script src="{{ asset('js/order.js') }}"></script>
    @endpush
@endsection
