<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Tienda Virtual')</title>
    @stack('css')
</head>
<body>
<header>
</header>
<main>
    @yield('contenido')
</main>
<footer>
    <p>&copy; 2025 Mi Tienda Virtual</p>
</footer>
@stack('scripts')
</body>
</html>
