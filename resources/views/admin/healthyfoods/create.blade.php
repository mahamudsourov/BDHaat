@extends('admin.layouts.admin')
@section('title', 'Add Healthy Food')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-center">➕ Add New Healthy Food</h2>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

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

    <form action="{{ route('admin.healthyfoods.store') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="image" class="form-label">Product Image</label>
            <input class="form-control" type="file" name="image" accept="image/*" required>
        </div>

        <div class="mb-3">
            <label for="brand" class="form-label">Brand Name</label>
            <input type="text" name="brand" class="form-control" value="{{ old('brand') }}" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price (৳)</label>
            <input type="number" name="price" step="0.01" class="form-control" value="{{ old('price') }}" required>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-success">Save Product</button>
            <a href="{{ route('admin.healthyfoods.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
