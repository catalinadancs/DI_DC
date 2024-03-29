<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DI/DC</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
 @media (prefers-color-scheme: dark) {
            .container-fluid {
                background-color: #1f2937;
                color: #FFFFFF;
            }
            
            .navbar-nav .nav-link.dropdown-toggle {
                color: #FFFFFF;
            }
            .navbarNav{
                background-color: #1f2937;
                color: #FFFFFF;
            }
            .dropdown-menu.dropdown-menu-end{
                background-color: #1f2937;
                color: #FFFFFF;
            }
            a.dropdown-item,
            button.dropdown-item{
                background-color: #1f2937;
                color: #FFFFFF;
            }

            a.dropdown-item:hover{
                background-color:#555e6b;
                color: #FFFFFF;
            }

            button.dropdown-item:hover{
                background-color: #555e6b;
                color: #FFFFFF;
            }
        }

        @media (prefers-color-scheme: light) {
            .container-fluid {
                background-color: #ffffff;
                color: #000000;
            }
            a.dropdown-item:hover{
                background-color: #d3d4d5;
        color: #000000;
            }

            button.dropdown-item:hover{
                background-color: #d3d4d5;
        color: #000000;
            }



        }


    </style>
</head>







<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <x-application-logo class="h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
            </a>

            <!-- Hamburger (mobile menu toggle) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Navigation Links -->
                    <!-- <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                    </li> -->

                    <!-- Settings Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingsDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a></li>
                            <li><a class="dropdown-item" href="{{ route('furnizor') }}">{{ __('Furnizor') }}</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
