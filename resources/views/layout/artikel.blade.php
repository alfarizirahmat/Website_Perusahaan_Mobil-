<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Artikel</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Car_55-removebg-preview.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    

    <style>
        body {
            min-height: 100vh;
            background-image: linear-gradient(
                    rgba(0, 0, 0, 0.5), 
                    rgba(0, 0, 0, 0.5)
                ), url('{{ asset('images/pexels-veeterzy-303383.jpg') }}');
            background-size: cover;
            background-position: center;
            color: white;
        }
        .navbar-brand img {
            width: 30px;
            height: auto;
        }
            .card-body {
                color: #bdbdbd;
            }
            .animate-fade-in {
            opacity: 0;
            animation: fadeIn 1.2s ease-in-out forwards;
            }
            /* Zoom-in effect for cards */
            .card-hover {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .card-hover:hover {
                transform: scale(1.05);
                box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            }
            /* Button hover animation */
            .btn-animated {
                position: relative;
                overflow: hidden;
                transition: all 0.4s ease;
            }
            .btn-animated::after {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background-color: rgba(255, 255, 255, 0.2);
                transition: all 0.4s ease;
            }
            .btn-animated:hover::after {
                left: 100%;
            }
            /* Keyframes for fade-in */
            @keyframes fadeIn {
                0% { opacity: 0; }
                100% { opacity: 1; }
            }
        </style>
</head>
<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/Car_55-removebg-preview.png') }}" alt="Logo" class="d-inline-block align-text-top">
                Zilio Group
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="featuresDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Fitur
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="featuresDropdown">
                            <li><a class="dropdown-item" href="/galeri">Beranda</a></li>
                            <li><a class="dropdown-item" href="/artikel">Galeri Foto <span class="badge text-bg-secondary">3</span></a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
