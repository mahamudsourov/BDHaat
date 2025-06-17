<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDHaaT</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

    <!-- Navbar -->
    <header class="navbar">
    <div class="navbar-brand">
        <img src="{{ asset('images/logo.png') }}" alt="BDHaaT Logo" /> 
        <span>BDHaaT</span>
    </div>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">District Products</a></li>
            <li><a href="#">Healthy Foods</a></li>
            <li><a href="#">Cart</a></li>
            <li><a href="#">Login</a></li>
        </ul>
    </nav>

    <!-- Hero Banner -->
    <section class="hero">
        <h1>Welcome to DeshBazar</h1>
        <p>Discover Bangladesh's traditional & healthy treasures</p>
        <a href="#" class="btn">Explore Now</a>
    </section>
    
    <!-- Healthy Foods -->
    <section class="section">
        <h2>Healthy Food Picks</h2>
        <div class="card-container">
            <div class="card">Modhu (Honey)</div>
            <div class="card">Badam (Nuts)</div>
            <div class="card">Honeynuts Mix</div>
            <div class="card">Herbal Tea</div>
        </div>
    </section>
</header>

</body>
</html>
