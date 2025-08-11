@extends('admin.layouts.admin')
@section('title', 'Clothes Management')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-center"><b>Clothes</b></h2>

    @if (session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <div class="text-end mb-3">
        <a href="{{ route('admin.cloths.create') }}" class="btn btn-success">➕ Add New Product</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered align-middle text-center">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Brand</th>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Price (৳)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($clothes as $index => $cloth)
                    <tr>
                        <td>{{ $clothes->firstItem() + $index }}</td>
                        <td>
                            @if ($cloth->image)
                                <img src="{{ asset('storage/' . $cloth->image) }}" alt="Image" width="70">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>{{ $cloth->brand }}</td>
                        <td>{{ $cloth->name }}</td>
                        <td>{{ $cloth->size }}</td>
                        <td>{{ $cloth->color }}</td>
                        <td>৳{{ number_format($cloth->price, 2) }}</td>
                        <td>
                            <a href="{{ route('admin.cloths.edit', $cloth->id) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('admin.cloths.destroy', $cloth->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this product?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>

                           
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-muted">No clothes products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center mt-3">
        {{ $clothes->links() }}
    </div>
</div>
@endsection
