@extends('index')
@section('title', 'Clothes')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush
@section('content')

<section id="product1" class="section-p1">
    <h2>Traditional Clothes</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
        @foreach($clothes as $cloth)
            <div class="pro" onclick="goToDetails('{{ $cloth->image }}', '{{ $cloth->brand }}', '{{ $cloth->name }}', {{ $cloth->price }})">
                <img src="{{ asset('storage/' . $cloth->image) }}" alt="{{ $cloth->name }}">
                <div class="des">
                    <span>{{ $cloth->brand }}</span>
                    <h5>{{ $cloth->name }}</h5>
                    <div class="star">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>BDT {{ $cloth->price }}</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        @endforeach
    </div>
</section>

@push('scripts')
    <script src="{{ asset('js/clothes.js') }}"></script>
@endpush

@endsection