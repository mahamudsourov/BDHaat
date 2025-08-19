@extends('index')
@section('title', 'Customer Care')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/chatbot.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropdowns.css') }}">
@endpush
@section('content')
    <section id="page-header3" class="about-header">
        <h2>#Let's_Talk</h2>
        <p>We love to hear from you!</p>
    </section>

    {{-- Chatbot Section --}}
    <div class="chatbot-page">
        <div class="chatbot-header">
            <span>Customer Support</span>
        </div>

        <div class="chatbot-body" id="chatbotBody">
            <!-- Info Card -->
            <div class="info-card">


                <!-- Bot Welcome Message -->
                <div class="bot-welcome">
                    <img src="{{ asset('images/chatbot.png') }}" class="bot-avatar" alt="avatar">
                    <div class="bot-msg">
                        Dear Sir! Hope you are having a great day!<br>
                        Ask me anything, I'm here to help.
                    </div>
                </div>

                <!-- Dropdowns -->
                <div class="dropdowns">
                    <details data-color="blue">
                        <summary><i class="fas fa-tags"></i> Offers & Discounts <span class="arrow">▼</span></summary>
                        <p>All current promotions, coupon codes, and seasonal deals are listed here.</p>
                        <p>1. Summer Sale: Up to 50% off select items.</p>
                        <p>2. New Customer Coupon: BDT 200 off on first order.</p>
                        <p>3. Festive Offer: Extra BDT 100 discount on orders above BDT 1000.</p>
                    </details>

                    <details data-color="green">
                        <summary><i class="fas fa-truck"></i> Order Related <span class="arrow">▼</span></summary>
                        <p>Track orders, manage cancellations, and access invoices easily.</p>
                        <p>1. Track your order with the tracking ID sent to email.</p>
                        <p>2. Cancel or modify your order within 2 hours of placement.</p>
                        <p>3. View and download your invoices anytime.</p>
                    </details>

                    <details data-color="orange">
                        <summary><i class="fas fa-shipping-fast"></i> Shipping & Delivery Related <span
                                class="arrow">▼</span></summary>
                        <p>Check delivery times, return policies, and pickup options in detail.</p>
                        <p>1. Standard delivery: 2-4 business days.</p>
                        <p>2. Express delivery: 1-2 business days.</p>
                        <p>3. Return policy: 7 days for unused items in original packaging.</p>
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

            <!-- User Input Field -->
            <div class="chatbot-container">

                <div class="chatbot-messages" id="chatMessages">
                    <!-- All chat messages will go here -->
                </div>

                <div class="chatbot-footer">
                    <input type="text" id="userInput" placeholder="Type your message...">
                    <button id="sendBtn">Send</button>
                </div>
            </div>

        </div>
    </div>

    {{-- Contact Form --}}
    <section id="form-details">
        <form id="contactForm" class="contact-form">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <span class="form-subtitle">Message Us</span>
            <h2 class="form-title">We Love to Hear from You!</h2>

            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" rows="6" placeholder="Your Message" required></textarea>

            <button type="submit" class="submit-btn">Submit</button>
            <div id="form-status"></div>

        </form>
    </section>

    @push('scripts')
        <script src="{{ asset('js/chatbot.js') }}"></script>
        <script src="{{ asset('js/contact.js') }}"></script>
    @endpush

@endsection
