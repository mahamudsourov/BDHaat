<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <title>@yield('title', 'BDHaat')</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/darkmode.css') }}">
    @stack('styles')
</head>

<body>
    @include('user.navbar.navbar')
    @yield('content')
    <script src="{{ asset('js/darkmode.js') }}"></script>
    @stack('scripts')
</body>

</html>
