@extends('admin.layouts.admin')
@section('content')
<div class="container">
    <h2>Edit Food</h2>
    <form action="{{ route('admin.foods.update', $food->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $food->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $food->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" value="{{ $food->price }}" class="form-control" step="0.01" required>
        </div>
        <div class="mb-3">
            <label>Image</label>
            @if($food->image)
                <img src="{{ asset('storage/' . $food->image) }}" width="100" class="mb-2">
            @endif
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection