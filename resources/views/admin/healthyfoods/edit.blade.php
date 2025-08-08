@extends('admin.layouts.admin')
@section('title', 'Edit Healthy Food')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-center">Edit Product</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>There were some errors:</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.healthyfoods.update', $food->id) }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Current Image</label><br>
            @if($food->image)
                <img src="{{ asset('storage/' . $food->image) }}" alt="Product Image" width="100">
            @else
                <p>No image</p>
            @endif
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Change Image (optional)</label>
            <input class="form-control" type="file" name="image" accept="image/*">
        </div>

        <div class="mb-3">
            <label class="form-label">Brand Name</label>
            <input type="text" name="brand" class="form-control" value="{{ old('brand', $food->brand) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $food->name) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Price (৳)</label>
            <input type="number" name="price" step="0.01" class="form-control" value="{{ old('price', $food->price) }}" required>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.healthyfoods.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
