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
<<<<<<< HEAD
        <div class="navbar-container">
            <div class="navbar-brand">
                <img src="{{ asset('images/logo.png') }}" alt="BDHaaT Logo">
                <span class="brand-name">BDHaaT</span>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">District Products</a></li>
                    <li><a href="#">Healthy Foods</a></li>
                    <li><a href="#">Cart</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </nav>
=======
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
    
    <!-- District Categories -->
    <section class="section">
        <h2>Explore by District</h2>
        <div class="card-container">
            <div class="card">Jamdani (Narayanganj)</div>
            <div class="card">Sweets (Tangail)</div>
            <div class="card">Clay Crafts (Rajshahi)</div>
            <div class="card">Shataranji (Rangpur)</div>
        </div>
    </section>

    <!-- Healthy Foods -->
    <section class="section">
        <h2>Healthy Food Picks</h2>
        <div class="card-container">
            <div class="card">Modhu (Honey)</div>
            <div class="card">Badam (Nuts)</div>
            <div class="card">Honeynuts Mix</div>
            <div class="card">Herbal Tea</div>
>>>>>>> 3f45e8907d1e5908a2aeb619ebd97ec76143ff69
        </div>
    </header>

    <!-- Banner Section -->
    <section class="banner">
        <div class="overlay">
            <h1>Welcome to BDHaaT</h1>
            <p>Explore Traditional & Healthy Foods from Every District of Bangladesh</p>
        </div>
    </section>

    <!-- Food Cards Section -->
    <section class="section">
        <h2>Top Picks from Our Districts</h2>
        <div class="card-container">
            <div class="card">
                <img src="{{ asset('images/chomchom.jpg') }}" alt="Chomchom">
                <p>Porabari Chomchom</p>
                <p>Tangail</p>

            </div>
            <div class="card">
                <img src="{{ asset('images/bakarkhani.jpg') }}" alt="Bakarkhani">
                <p>Bakarkhani</p>
                <p>Puran Dhaka</p>
            </div>
            <div class="card">
                <img src="{{ asset('images/doi.jpg') }}" alt="Bogura Doi">
                <p>Doi</p>
                <p>Bogura</p>
            </div>
            <div class="card">
                <img src="{{ asset('images/tea.jpg') }}" alt="Sylhet Tea">
                <p>Tea</p>
                <p>Sylhet</p>
            </div>
        </div>
    </section>

</body>
</html>
