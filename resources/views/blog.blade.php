<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Althea | Blog</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/althea-logo.png') }}">

    {{-- CSS  --}}
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    
</head>
<body>
    <p>INI HALAMAN BLOG</p>
    <a href="/">Home</a>
    <a href="/services">Services</a>
    <a href="/portfolio">Portfolio</a>
    <a href="/marketplace">Marketplace</a>
    <a href="/about">About</a>
    <a href="/blog">Blog</a>

    {{-- JAVASCRIPT --}}
    <script src="../js/app.js"></script>
    <script src="../js/bootstrap.js"></script>
    
    {{-- JSX  --}}
    <div id="app"></div>
    @vite('resources/js/app.jsx')
    
</body>
</html>