<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Car_55-removebg-preview.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .min-vh-100 {
            min-height: 100vh;
        }
        .card {
            border-radius: 12px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
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
    </style>
</head>
<body>

    <main class="py-4">
        @yield('content')
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
