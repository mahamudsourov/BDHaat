@extends('index')

@section('title', 'Edit Profile')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endpush

@section('content')
<div class="profile-container">
    {{-- Header --}}
    <div class="profile-header">
        Edit Profile
    </div>

    {{-- Body --}}
    <div class="profile-body">
        <form method="POST" action="{{ route('user.profile.update') }}">
            @csrf

            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required>

            <label>Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required>

            <label>Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $user->phone) }}">

            <label>Address</label>
            <input type="text" name="address" value="{{ old('address', $user->address) }}">

            <div class="profile-footer">
                <button type="submit">Save Changes</button>
            </div>
        </form>
    </div>
</div>
@endsection