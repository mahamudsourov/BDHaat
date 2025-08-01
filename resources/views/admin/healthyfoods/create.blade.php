@extends('layouts.admin')

@section('title', 'Add Healthy Food Product')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.healthyfoods.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="image" required>
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" name="brand" class="form-control" id="brand" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price (BDT)</label>
                    <input type="number" name="price" class="form-control" id="price" step="0.01" required>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="bi bi-plus-circle me-1"></i> Add Product
                </button>
            </form>
        </div>
    </div>
@endsection
