@extends('index')
@section('title', 'Healthy Foods')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush
@section('content')


    <section id="product1" class="section-p1">
        <h2>Healthy Foods</h2>
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
    @push('scripts')
        <script src="{{ asset('js/clothes.js') }}"></script>
    @endpush
@endsection
