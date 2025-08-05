@extends('index')
@section('title', 'Login')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('content')
    <div class="login-wrapper">
        <h1>Login</h1>

        @if ($errors->any())
            <ul class="error-messages">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
    </div>
@endsection
