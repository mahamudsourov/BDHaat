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
        </div>
    </header>

    <!-- Banner Section -->
    <section class="banner">
        <div class="overlay">
            <h1>Welcome to BDHaaT</h1>
            <p>Explore Traditional & Healthy Foods from Every District of Bangladesh</p>
        </div>
    </section>
    
    <!-- District Categories starts -->
<section class="section">
    <h2>Explore by District</h2>
    <div class="card-container">
        <div class="card">
            <img src="https://www.loomfolks.com/wp-content/uploads/2023/07/Olive-Green-Dhakai-Jamdani-Light-Weight-Cotton-Silk-Saree-Without-Blouse.jpg" alt="Jamdani from Narayanganj">
            <h3>Jamdani</h3>
            <p>Narayanganj</p>
        </div>
        <div class="card">
            <img src="https://i.ytimg.com/vi/lJHOGtA-xgY/maxresdefault.jpg" alt="Sweets from Tangail">
            <h3>Sweets</h3>
            <p>Tangail</p>
        </div>
        <div class="card">
            <img src="https://www.tazahaat.com/wp-content/uploads/2019/05/61217290_1313129705508223_8538348139239702528_o.jpg" alt="Clay Crafts from Rajshahi">
            <h3>Mango</h3>
            <p>Rajshahi</p>
        </div>
        <div class="card">
            <img src="https://en.banglapedia.org/images/2/2d/Shataranjee.jpg" alt="Shataranji from Rangpur">
            <h3>Shataranji</h3>
            <p>Rangpur</p>
        </div>
    </div>
</section>

<!-- District Categories ends-->

    <!-- Food Cards Section -->
    <section class="section">
        <h2>Popular Products</h2>
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
    
    <!-- Healthy Foods -->
    <section class="section">
        <h2>Healthy Food Picks</h2>
        <div class="card-container">
            <div class="card">
                <img src="{{ asset('images/chomchom.jpg') }}" alt="Modhu">
                <p>Modhu</p>

            </div>
            <div class="card">
                <img src="{{ asset('images/bakarkhani.jpg') }}" alt="Badam">
                <p>Badam</p>
                
            </div>
            <div class="card">
                <img src="{{ asset('images/doi.jpg') }}" alt="Honeynuts Mix">
                <p>Honeynuts mix</p>
                
            </div>
            <div class="card">
                <img src="{{ asset('images/tea.jpg') }}" alt="Herbal Tea">
                <p>Herbal Tea</p>
                
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 BDHaaT. All rights reserved.</p>
    </footer>

</body>
</html>
