@extends('index')

@section('title', 'Healthy Foods')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

<section id="product1" class="section-p1">
    <h2>Healthy Foods</h2>
    <p>Nutritious and Fresh Food for a Healthy Lifestyle</p>
    <div class="pro-container">
        @forelse($healthyFoods as $food)
            <div class="pro"
                onclick="goToDetails('{{ asset('storage/' . $food->image) }}', '{{ $food->name }}', '{{ $food->description }}', {{ $food->price }})">
                @if($food->image)
                    <img src="{{ asset('storage/' . $food->image) }}" alt="{{ $food->name }}">
                @endif
                <div class="des">
                    <h5>{{ $food->name }}</h5>
                    <p>{{ $food->description }}</p>
                    <h4>BDT {{ number_format($food->price, 2) }}</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        @empty
            <p>No healthy foods found.</p>
        @endforelse
    </div>
</section>

@push('scripts')
    <script src="{{ asset('js/foods.js') }}"></script>
@endpush

@endsection
