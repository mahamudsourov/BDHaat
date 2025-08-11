@extends('admin.layouts.admin')
@section('title', 'Clothing Item')

@section('content')
<div class="container mt-4" style="max-width:900px;">
    <h2 class="mb-4 text-center"><b>➕ Add New Clothing Item</b></h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
        </div>
    @endif

    <form action="{{ route('admin.cloths.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Brand</label>
                <input type="text" name="brand" class="form-control" value="{{ old('brand') }}">
            </div>

            <div class="col-md-6">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Size</label>
                <input type="text" name="size" class="form-control" value="{{ old('size') }}">
            </div>

            <div class="col-md-4">
                <label class="form-label">Color</label>
                <input type="text" name="color" class="form-control" value="{{ old('color') }}">
            </div>

            <div class="col-md-4">
                <label class="form-label">Quantity</label>
                <input type="number" name="quantity" class="form-control" value="{{ old('quantity', 0) }}">
            </div>

            <div class="col-md-6">
                <label class="form-label">Price (৳)</label>
                <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price') }}" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Status</label>
                <select name="status" class="form-select">
                    <option value="active" selected>Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>

            <div class="col-12">
                <label class="form-label">Product Image</label>
                <input type="file" name="image" class="form-control" accept="image/*" onchange="previewImage(event)">
                <img id="preview" src="#" alt="Preview" style="display:none; max-height:140px; margin-top:10px;">
            </div>
        </div>

        <div class="text-end mt-3">
            <a href="{{ route('admin.cloths.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
</div>

<script>
function previewImage(e) {
    const file = e.target.files[0];
    const img = document.getElementById('preview');
    if (!file) { img.style.display = 'none'; return; }
    img.src = URL.createObjectURL(file);
    img.style.display = 'block';
}
</script>
@endsection
