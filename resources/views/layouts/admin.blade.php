<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            min-height: 100vh;
            background-color: #f4f6f9;
            margin: 0;
        }

        .sidebar {
            width: 250px;
            background-color: #1f2a3a;
            color: #fff;
            display: flex;
            flex-direction: column;
            padding: 1rem 0;
        }

        .sidebar .brand {
            font-size: 1.75rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 2rem;
        }

        .sidebar nav a {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: #cfd8dc;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.2s ease;
        }

        .sidebar nav a i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .sidebar nav a:hover,
        .sidebar nav a.active {
            background-color: #273142;
            color: #fff;
        }

        main.content {
            flex-grow: 1;
            padding: 2rem;
            overflow-y: auto;
        }

        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                flex-direction: row;
                overflow-x: auto;
            }

            .sidebar nav {
                display: flex;
                flex-direction: row;
                width: 100%;
                justify-content: space-around;
            }

            .sidebar nav a {
                flex: 1;
                justify-content: center;
                padding: 0.5rem;
            }
        }
    </style>
</head>

<body>
    <aside class="sidebar">
        <div class="brand">BDHaat Admin</div>
        <nav>
            <a href="{{ route('admin.dashboard') }}"
                class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            <a href="#" class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                <i class="bi bi-person-lines-fill"></i> User Management
            </a>
            <a href="{{ route('admin.healthyfoods.create') }}"
                class="{{ request()->routeIs('admin.healthyfoods.*') ? 'active' : '' }}">
                <i class="bi bi-box-seam"></i> Product Management
            </a>
            <a href="#" class="{{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">
                <i class="bi bi-cart-check"></i> Order Management
            </a>
            <a href="#" class="{{ request()->routeIs('admin.payments.*') ? 'active' : '' }}">
                <i class="bi bi-credit-card-2-front"></i> Payments
            </a>
            <a href="{{ route('admin.messages') }}" class="{{ request()->routeIs('admin.messages.*') ? 'active' : '' }}">
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
