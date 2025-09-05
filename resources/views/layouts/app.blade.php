<!-- layouts/app.blade.php -->
<html>
<head>
    <title>@yield('title', 'Mon site')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
<x-layout-parts.header />
<main>
    @yield('content')
</main>
<x-layout-parts.footer />
@vite('resources/js/app.js')
@stack('scripts')
</body>
</html>
