<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin Panel - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .sidebar {
            width: 240px;
            background-color: #343a40;
            color: #fff;
            display: flex;
            flex-direction: column;
        }

        .sidebar .brand {
            padding: 1.5rem;
            font-size: 1.5rem;
            font-weight: 700;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar nav {
            flex-grow: 1;
        }

        .sidebar nav a {
            display: block;
            padding: 12px 20px;
            color: #adb5bd;
            text-decoration: none;
            font-weight: 500;
            border-left: 4px solid transparent;
            transition: background-color 0.2s ease, border-left-color 0.2s ease;
        }

        .sidebar nav a:hover,
        .sidebar nav a.active {
            background-color: #495057;
            color: #fff;
            border-left-color: #0d6efd;
        }

        .sidebar footer {
            padding: 1rem 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #6c757d;
            text-align: center;
        }

        main.content {
            flex-grow: 1;
            padding: 2rem;
            background-color: #f8f9fa;
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

            .sidebar nav a {
                flex: 1 0 auto;
                text-align: center;
                border-left: none;
                border-bottom: 4px solid transparent;
            }

            .sidebar nav a:hover,
            .sidebar nav a.active {
                border-left: none;
                border-bottom-color: #0d6efd;
            }

            main.content {
                padding: 1rem;
            }
        }
    </style>
</head>

<body>
    <aside class="sidebar">
        <div class="brand">Admin Panel</div>
        <nav>
            <a href="{{ route('admin.dashboard') }}"
                class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
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
