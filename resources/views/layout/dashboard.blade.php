<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Car_55-removebg-preview.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
            background-image: linear-gradient(
                    rgba(0, 0, 0, 0.5), 
                    rgba(0, 0, 0, 0.5)
                ), url('{{ asset('images/pexels-veeterzy-303383.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        .sidebar {
            height: 100vh;
            width: 220px;
            position: fixed;
            background-color: #1c1c1e;
            color: white;
            padding-top: 20px;
            transition: all 0.3s;
        }

        .sidebar h4 {
            text-align: center;
            font-size: 1.2rem;
            padding-bottom: 1px;
        }

        .sidebar a {
            display: block;
            color: #ccc;
            padding: 15px;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s;
            border-left: 3px solid transparent;
        }

        .sidebar a:hover {
            background-color: #2d2d2f;
            padding-left: 25px;
            color: white;
            border-left: 3px solid #3498db;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }

        .navbar {
            background-color: #2d2d2f;
            color: white;
            padding: 15px 15px;
            position: fixed;
            width: calc(100% - 220px);
            margin-left: 220px;
            top: 0;
            z-index: 100;
        }

        .navbar h3 {
            display: inline-block;
        }

        .navbar .dropdown {
            float: right;
        }

        .navbar .dropdown-menu {
            background-color: #2d2d2f;
            border: none;
        }

        .navbar .dropdown-menu a {
            color: #ccc;
        }

        .navbar .dropdown-menu a:hover {
            background-color: #3498db;
            color: white;
        }

        .card-custom {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4>
            <img src="{{ asset('images/Car_55-removebg-preview.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Company Project
        </h4>
        <a href="/dashboard/album"><i class="fas fa-project-diagram"></i> Album</a>
        <a href="/dashboard/user"><i class="fas fa-users"></i> User</a>
        <a href="/dashboard/artikel"><i class="fas fa-newspaper"></i> artikel</a>
    </div>

    <div class="navbar">
        <h3>Dashboard</h3>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item text-white" href="/profile/show">Profile</a></li>
                <li><a class="dropdown-item text-white" href="/galeri">Home</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item text-white">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <div class="content">
        <div class="container mt-5 pt-4" id="content-area">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
