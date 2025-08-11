@extends('admin.layouts.admin')
@section('title', 'Edit Clothing Item')

@section('content')
<div class="container mt-4" style="max-width:900px;">
    <h2 class="mb-4 text-center"><b>Edit Clothing Item</b></h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
        </div>
    @endif

    <form action="{{ route('admin.cloths.update', $clothing->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Brand</label>
                <input type="text" name="brand" class="form-control" value="{{ old('brand', $clothing->brand) }}">
            </div>

            <div class="col-md-6">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $clothing->name) }}" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Size</label>
                <input type="text" name="size" class="form-control" value="{{ old('size', $clothing->size) }}">
            </div>

            <div class="col-md-4">
                <label class="form-label">Color</label>
                <input type="text" name="color" class="form-control" value="{{ old('color', $clothing->color) }}">
            </div>

            <div class="col-md-4">
                <label class="form-label">Quantity</label>
                <input type="number" name="quantity" class="form-control" value="{{ old('quantity', $clothing->quantity) }}">
            </div>

            <div class="col-md-6">
                <label class="form-label">Price (৳)</label>
                <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', $clothing->price) }}" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Status</label>
                <select name="status" class="form-select">
                    <option value="active" {{ $clothing->status === 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $clothing->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <div class="col-12">
                <label class="form-label">Product Image</label>
                @if ($clothing->image)
                    <div class="mb-2">
                        <img id="preview" src="{{ asset('storage/' . $clothing->image) }}" alt="Image" style="max-height:140px;">
                    </div>
                @else
                    <img id="preview" style="display:none;max-height:140px;">
                @endif
                <input type="file" name="image" class="form-control" accept="image/*" onchange="previewImage(event)">
            </div>
        </div>

        <div class="text-end mt-3">
            <a href="{{ route('admin.cloths.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-warning">Update</button>
        </div>
    </form>
</div>

<script>
function previewImage(e) {
    const file = e.target.files[0];
    const img = document.getElementById('preview');
    if (!file) return;
    img.src = URL.createObjectURL(file);
    img.style.display = 'block';
}
</script>
@endsection
