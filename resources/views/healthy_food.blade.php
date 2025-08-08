@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Healthy Foods</h1>

    <div class="row">
        @forelse($healthyFoods as $food)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img 
                      src="{{ asset('storage/' . $food->image) }}" 
                      class="card-img-top" 
                      alt="{{ $food->name }}" 
                      style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $food->name }}</h5>
                        <p class="card-text"><strong>Brand:</strong> {{ $food->brand }}</p>
                        <p class="card-text"><strong>Price:</strong> BDT {{ number_format($food->price, 2) }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-muted">No healthy food products available right now.</p>
        @endforelse
    </div>
</div>
@endsection
