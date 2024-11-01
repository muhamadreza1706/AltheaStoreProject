<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Althea | Home</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/althea-logo.png') }}">

    {{-- CSS  --}}
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    {{-- BOOTSTRAP CDN  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    {{-- NAVBAR  --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/althea-logo.png') }}" alt="logo" class="logo"/>
                Althea
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Website Development</a></li>
                            <li><a class="dropdown-item" href="#">Software Development</a></li>
                            <li><a class="dropdown-item" href="#">Game Developer</a></li>
                            <li><a class="dropdown-item" href="#">Hosting</a></li>
                            <li><a class="dropdown-item" href="#">SEO</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/marketplace">Marketplace</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                </ul>
                <button class="get-started" type="submit">Get Started</button>
            </div>
        </div>
    </nav>

    {{-- JAVASCRIPT --}}
    <script src="../js/app.js"></script>
    <script src="../js/bootstrap.js"></script>

    {{-- JSX  --}}
    <div id="app"></div>
    @vite('resources/js/app.jsx')
    
</body>
</html>