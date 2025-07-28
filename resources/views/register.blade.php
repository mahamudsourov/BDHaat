<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <style>
        /* Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #6c63ff, #3f3d56);
        }

        /* Wrapper for content */
        .login-wrapper {
            width: 100%;
            max-width: 400px;
            background: #ffffff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Heading */
        h1 {
            margin-bottom: 25px;
            color: #333;
        }

        /* Form Inputs */
        form input[type="text"],
        form input[type="email"],
        form input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            transition: border-color 0.3s;
        }

        form input:focus {
            border-color: #6c63ff;
            outline: none;
        }

        /* Submit Button */
        form button {
            width: 100%;
            padding: 12px;
            background-color: #6c63ff;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form button:hover {
            background-color: #574fd6;
        }

        /* Error Messages */
        .error-messages {
            background: #ffefef;
            padding: 10px 15px;
            border: 1px solid #ffbdbd;
            border-radius: 6px;
            margin-bottom: 20px;
            list-style: none;
            font-size: 14px;
            color: #b30000;
            text-align: left;
        }

        /* Register Link */
        p {
            margin-top: 15px;
            font-size: 14px;
            color: #333;
        }

        p a {
            color: #6c63ff;
            text-decoration: none;
            font-weight: bold;
        }

        p a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-wrapper">
        <h1>Register</h1>

        @if ($errors->any())
            <ul class="error-messages">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ url('/register') }}">
            @csrf
            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>

        <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
    </div>
</body>

</html>