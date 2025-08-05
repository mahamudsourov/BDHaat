@extends('admin.layouts.admin')

@section('title', 'User Management')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">User Management</h5>
        </div>
        <div class="card-body">

            {{-- Success & Error Messages --}}
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if ($users->isEmpty())
                <p>No user found.</p>
            @else
                <ul class="list-group">
                    @foreach ($users as $user)
                        <li class="list-group-item d-flex justify-content-between align-items-start flex-column flex-md-row">
                            <div>
                                <p><strong>Name:</strong> {{ $user->name }}</p>
                                <p><strong>Email:</strong> {{ $user->email }}</p>
                                <p><strong>Phone:</strong> {{ $user->phone ?? 'No Phone Number' }}</p>
                                <p><strong>Address:</strong> {{ $user->address ?? 'No Address' }}</p>
                            </div>

                            <div>
                                <form action="{{ route('admin.user.delete', $user->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mt-2 mt-md-0">Delete</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection
