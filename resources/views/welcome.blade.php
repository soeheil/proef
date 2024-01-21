<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Styles -->
    <style>
        body {
            font-family: Figtree, sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            padding: 15px;
            text-align: center;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 14px 16px;
            font-size: 18px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .login-btn {
            background-color: #4CAF50;
            color: #fff;
        }

        .register-btn {
            background-color: #1565C0;
            color: #fff;
        }

        .button:hover {
            cursor: pointer;
        }

        .logo {
            width: 100px;
            height: 100px;
            background-color: #fff;
            margin-bottom: 20px;
            /* Placeholder for a random logo */
            /* You can replace the background with an actual image or customize further */
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#">Dashboard</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <a href="{{ route('login') }}" class="button login-btn">Log in</a>
        <a href="{{ route('register') }}" class="button register-btn">Register</a>
    </div>

    <div class="container">
        <div class="logo"></div>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
</body>
</html>
