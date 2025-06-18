<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - BDHaaT</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="login-container">
    <h2>Login to BDHaaT</h2>
    <form id="loginForm">
        <input type="email" id="email" placeholder="Email" required>
        <input type="password" id="password" placeholder="Password" required>
        

        <button type="submit">Login</button>
        <p id="errorMsg" style="color:red; display:none;">All fields are required.</p>
    </form>
</div>

<script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
