@extends('index')

@section('title', 'My Profile')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endpush

@section('content')
<div class="profile-container">
    <div class="profile-header">My Profile</div>

    <div class="profile-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Phone:</strong> {{ $user->phone ?? 'Not Provided' }}</p>
        <p><strong>Address:</strong> {{ $user->address ?? 'Not Provided' }}</p>
    </div>
</div>

<div class="edit-profile-section">
    <h4 class="edit-heading">Want to update your profile?</h4>
    <div class="edit-btn-wrapper">
        <a href="{{ route('user.profile.edit') }}" class="btn-edit">Edit Profile</a>
    </div>
</div>
@endsection