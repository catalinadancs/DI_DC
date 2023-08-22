<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to DI🗲DC</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }



        .container {
            max-width: 500px;
            text-align: center;
            padding: 20px;
            border-radius: 20px;
        }

        .light .container {
        background-color: #e5e5e5;
        color: #fff;
        }
        .dark .container {
        background-color: #242526;
        color: #000;}






        .header-buttons {
            background-color: #4f46e5;
            color: #fff;
            padding: 10px;
            font-size: 24px;
            font-weight: bold;
            border-radius: 20px;
            margin-bottom: 5px;
        }





        .btn-login {
            font-size: 18px;
            padding: 10px;
            margin: 5px;
            border-radius: 20px;
            background-color: #007bff;
            color: #fff;
            transition: background-color 0.3s ease;
        }
        .btn-register {
            font-size: 18px;
            padding: 10px;
            margin: 5px;
            border-radius: 20px;
            background-color: #6c757d;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .bottom-buttons {
            margin-top: 20px;
        }

        .btn-home {
            font-size: 18px;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 20px;
            background-color: #007bff;
            color: #fff;
        }
        .btn-login:hover {
            background-color: #0056b3;
        }

        .btn-register:hover {
            background-color: #4d4d4d;
        }



        .dark {
            background-color: #18191a;
            color: #fff;
        }
        .light {
            background-color: #fafafa;
            color: #000;
        }





        .toggle-button {
            position: fixed;
        bottom: 20px;
        right: 20px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background-color 0.3s ease;
        }

        .light .toggle-button {
        background-color: #18191a;
        color: #fff; 
    }
        .dark .toggle-button {
        background-color: #fafafa; 
        color: #000;}
        



    </style>
</head>
<body>
<div class="container">
    <header class="header-buttons">
        <h1>Welcome to DI🗲DC Facturing App</h1>
    </header>

    <div class="bottom-buttons">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-home">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-login">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-register">Register</a>
                @endif
            @endauth
        @endif
    </div>
    
    <!-- Add the toggle button -->
    <button id="darkModeToggle" class="toggle-button"></button>
</div>

<!-- Add Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script>
    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;

    // Check user's preferred color scheme and set initial mode
    const initialMode = localStorage.getItem('colorMode') || 'light';
    body.classList.add(initialMode);

    darkModeToggle.addEventListener('click', () => {
        body.classList.toggle('dark');
        body.classList.toggle('light');

        // Store the selected mode in localStorage
        const newMode = body.classList.contains('dark') ? 'dark' : 'light';
        localStorage.setItem('colorMode', newMode);
    });
</script>
</body>
</html>