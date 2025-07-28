<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Admin - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    
</head>
<body>
    <aside class="sidebar">
        <div class="brand">BDHaat Admin</div>
        <nav>
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            <a href="#" class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                <i class="bi bi-person-lines-fill"></i> User Management
            </a>
            <a href="#" class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                <i class="bi bi-box-seam"></i> Product Management
            </a>
            <a href="#" class="{{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">
                <i class="bi bi-cart-check"></i> Order Management
            </a>
            <a href="#" class="{{ request()->routeIs('admin.payments.*') ? 'active' : '' }}">
                <i class="bi bi-credit-card-2-front"></i> Payments
            </a>
            <a href="#" class="{{ request()->routeIs('admin.messages.*') ? 'active' : '' }}">
                <i class="bi bi-chat-text"></i> Messages
            </a>
            <a href="{{ route('logout') }}">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </nav>
    </aside>

    <main class="content">
        <header class="mb-4">
            <h2 class="fw-bold">@yield('title')</h2>
        </header>
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
