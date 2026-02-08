<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home') | Article Knowledge</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-newspaper"></i> Article Knowledge</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kategori">Kategori Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#hot-news">Hot News</a></li>
                    <li class="nav-item"><a class="nav-link" href="#latest">Latest News</a></li>
                    <li class="nav-item"><a class="nav-link" href="#banner">Banner</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin">Login Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5><i class="fas fa-newspaper"></i> Article Knowledge</h5>
                    <p>Platform berbagi informasi dan pengetahuan terkini untuk Indonesia.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Kategori</h5>
                    <ul class="list-unstyled">
                        <li><a href="#kategori">Restaurant</a></li>
                        <li><a href="#kategori">Storyteller</a></li>
                        <li><a href="#kategori">Games</a></li>
                        <li><a href="#kategori">Technology</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Follow Us</h5>
                    <div class="social-links">
                        <a href="https://www.facebook.com/share/179Ej5VWi5/" class="me-3"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://x.com/ChowAmelya" class="me-3"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="https://www.instagram.com/amelya_chow?igsh=czBma29mZDJlMXB4" class="me-3"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://youtube.com/@amelyachow2797?si=Je62dJ9WL3v5yoKZ"><i class="fab fa-youtube fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; 2025 Article Knowledge. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>