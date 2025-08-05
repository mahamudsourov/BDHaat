<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <title>@yield('title', 'BDHaat')</title>
    @stack('styles')
</head>

<body>
    @yield('content')
    @stack('scripts')
</body>

</html>
