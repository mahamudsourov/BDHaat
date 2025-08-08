<ul id="navbar">
    <li><a href="{{ route('home') }}">Home</a></li>

    <li class="dropdown">
        <a href="#">Traditional Products</a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('clothes') }}">Clothes</a></li>
            <li><a href="{{ route('food') }}">Foods</a></li>
        </ul>
    </li>

    <li><a href="{{ route('healthy_food') }}">Healthy Foods</a></li>

    <li class="dropdown">
        <a href="#">Help & Support</a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('helpcenter') }}">Help Center</a></li>
            <li><a href="{{ route('customercare') }}">Contact Customer Care</a></li>
            <li><a href="{{ route('order') }}">Order</a></li>
            <li><a href="{{ route('payment') }}">Payment</a></li>
            <li><a href="{{ route('returnrefund') }}">Return & Refunds</a></li>
        </ul>
    </li>

    @if (Auth::check())
        <li class="dropdown">
            <a href="#">{{ Auth::user()->name }}</a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('user.profile') }}">Profile</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </li>
    @else
        <li><a href="{{ route('login') }}" id="openLoginBtn">Login</a></li>
        <li><a href="#" id="openRegisterBtn">Sign Up</a></li>
    @endif

    <li>
        <button id="darkModeToggle" class="dark-toggle">🌙</button>
    </li>
</ul>
