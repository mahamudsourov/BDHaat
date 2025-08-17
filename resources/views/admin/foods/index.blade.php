@extends('admin.layouts.admin')
@section('content')
<div class="container">
    <h2>Foods Management</h2>

    <div class="d-flex justify-content-between mb-3">
        {{-- Back Button --}}
        <a href="{{ url()->previous() }}" class="btn btn-secondary">
            ⬅ Back
        </a>

        {{-- Add Food Button --}}
        <a href="{{ route('admin.foods.create') }}" class="btn btn-success">
            ➕ Add Food
        </a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($foods as $food)
                <tr>
                    <td>{{ $food->name }}</td>
                    <td>৳{{ $food->price }}</td>
                    <td>
                        @if($food->image)
                            <img src="{{ asset('storage/' . $food->image) }}" width="80">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.foods.edit', $food->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.foods.destroy', $food->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this food?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
