<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Admin Panel - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
       
    </style>
</head>
<body>
    <aside class="sidebar">
        <div class="brand">Admin Panel</div>
        <nav>
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="#">User Management</a>
            <a href="#">Product Management</a>
            <a href="#">Payments</a>
            <a href="#">Logout</a>
        </nav>
        <footer>
            &copy; {{ date('Y') }} Your Company
        </footer>
    </aside>

    <main class="content">
        <h1>@yield('title')</h1>
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>