@extends('index')
@section('title', 'Customer Care')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/chatbot.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
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
                <div class="carousel">
                    <div class="carousel-track">
                        <img src="{{ asset('images/sweets1.jpg') }}" alt="Slide 1">
                        <img src="{{ asset('images/tea.jpg') }}" alt="Slide 2">
                        <img src="{{ asset('images/khejur1.jpg') }}" alt="Slide 3">
                    </div>
                </div>

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
                    <details>
                        <summary>Offers & Discounts</summary>
                        <p>All current promotions and coupon codes are listed here.</p>
                    </details>
                    <details>
                        <summary>Order Related</summary>
                        <p>Track orders, cancel requests, and manage invoices.</p>
                    </details>
                    <details>
                        <summary>Shipping & Delivery Related</summary>
                        <p>Shipping times, return policies, and pickup options.</p>
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
