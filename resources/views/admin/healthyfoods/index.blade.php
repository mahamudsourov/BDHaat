@extends('admin.layouts.admin')
@section('title', 'Healthy Foods')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-center">Healthy Foods</h2>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="text-end mb-3">
        <a href="{{ route('admin.healthyfoods.create') }}" class="btn btn-success">
            ➕ Add New Product
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered align-middle text-center">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Brand</th>
                    <th>Name</th>
                    <th>Price (৳)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($foods as $index => $food)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                            @if($food->image)
                                <img src="{{ asset('storage/' . $food->image) }}" alt="Image" width="70">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>{{ $food->brand }}</td>
                        <td>{{ $food->name }}</td>
                        <td>৳{{ number_format($food->price, 2) }}</td>
                        <td>
                            {{-- Placeholder for Edit/Delete --}}
                            {{-- <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form> --}}
                            <span class="text-muted">Coming Soon</span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-muted">No healthy food products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
