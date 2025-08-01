@extends('layouts.admin')

@section('content')
<h2>Add Healthy Food Product</h2>

@if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif

<form method="POST" action="{{ route('admin.healthyfoods.store') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Image:</label>
        <input type="file" name="image" required>
    </div>
    <div>
        <label>Brand:</label>
        <input type="text" name="brand" required>
    </div>
    <div>
        <label>Name:</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label>Price (BDT):</label>
        <input type="number" name="price" step="0.01" required>
    </div>
    <button type="submit">Add Product</button>
</form>
@endsection
