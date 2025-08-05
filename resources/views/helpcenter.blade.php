@extends('index')
@section('title', 'Help Center')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/helpcenter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush
@section('content')

    {{-- Hero Section --}}
    <section id="page-header3" class="about-header">
        <h2>#Let's_Talk</h2>
        <p>We love to hear from you!</p>
    </section>

    {{-- About Us --}}
    <section class="about-section">
        <div class="about-container">
            <h2 class="about-title">ABOUT US</h2>
            <p class="about-text">We are dedicated to preserving tradition and delivering quality. Our team works with
                passion to bring
                you authentic traditional products crafted with care and excellence.</p>
        </div>
    </section>

    {{-- Help Center --}}
    <div class="container">
        <h1>Help Center</h1>
        <p style="text-align:center;">Need help? Browse our FAQs or reach out to us directly.</p>

        <h3>Frequently Asked Questions</h3>
        <ul>
            <li><strong>How do I place an order?</strong> – Visit our products page and click “Add to Cart”.</li>
            <li><strong>How can I track my order?</strong> – Go to your dashboard and check “Order Status”.</li>
            <li><strong>How do I request a return or refund?</strong> – Read our Return & Refund Policy and apply via “My
                Orders”.</li>
            <li><strong>How do I update my profile?</strong> – Go to your “Account Settings”.</li>
        </ul>

        <div class="contact">
            <h3>Contact Support</h3>
            <p><strong>Email:</strong> support@bdhaat.com</p>
            <p><strong>Phone:</strong> 0123-456789</p>
            <p><strong>Hours:</strong> 9 AM – 6 PM (Everyday)</p>
        </div>
    </div>

    {{-- Contact Details --}}
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency Locations or Contact us Today!</h2>
            <h3>Haed Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p> House #112, Road No. 8, Mirpur 10, Dhaka 1216 </p>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <p>bdhaat@gmail.com</p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>+8801860035539</p>
                </li>
                <li>
                    <i class="fal fa-clock"></i>
                    <p> Saturday to Thursday: 9:00 AM to 5:00 PM</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58403.6595854141!2d90.32093750505184!3d23.810464378930238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0c1c61277db%3A0xc7d18838730e2e59!2sMirpur%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1697707410437!5m2!1sen!2sbd"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Footer -->


    @push('scripts')
        <script src="{{ asset(path: 'js/contact.js') }}"></script>
    @endpush
@endsection