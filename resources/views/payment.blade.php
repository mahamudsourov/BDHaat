@extends('index')
@section('title', 'Payment Management')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
    <div class="container">
        <header>
            <h1>Payment Information</h1>
            <p class="subtitle">Manage your payments and track statuses easily</p>
        </header>

        <!-- Payment Methods -->
        <section class="card payment-methods">
            <h2>Available Payment Methods</h2>
            <ul>
                <li><strong>Cash on Delivery (COD):</strong> Pay when your order arrives.</li>
                <li><strong>Online Payment:</strong> Bkash, Nagad, Rocket, Visa, Mastercard.</li>
                <li><strong>Bank Transfer:</strong> Details sent to your email after order confirmation.</li>
            </ul>
        </section>

        <!-- Transaction History -->
        <section class="card transaction-history">
            <h2>Recent Transactions</h2>
            <table>
                <thead>
                    <tr>
                        <th>Invoice #</th>
                        <th>Amount</th>
                        <th>Payment Method</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1023</td>
                        <td>৳850</td>
                        <td>Bkash</td>
                        <td><span class="status paid">Paid</span></td>
                        <td>2025-07-20</td>
                    </tr>
                    <tr>
                        <td>#1024</td>
                        <td>৳1290</td>
                        <td>COD</td>
                        <td><span class="status pending">Pending</span></td>
                        <td>2025-07-22</td>
                    </tr>
                    <tr>
                        <td>#1020</td>
                        <td>৳450</td>
                        <td>Credit Card</td>
                        <td><span class="status refunded">Refunded</span></td>
                        <td>2025-07-10</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- FAQ Section -->
        <section class="card faq-section">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-item">
                <h4>Is online payment secure?</h4>
                <p>Yes, we use SSL encryption and trusted payment gateways to ensure your payment details are protected.
                </p>
            </div>
            <div class="faq-item">
                <h4>Can I get a refund if I pay online?</h4>
                <p>Refunds are processed within 5-7 business days to your original payment method upon approval.</p>
            </div>
            <div class="faq-item">
                <h4>What if my payment fails?</h4>
                <p>If a payment fails, please try again or contact customer support for assistance.</p>
            </div>
        </section>
    </div>
@endsection
