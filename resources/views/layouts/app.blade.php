<!DOCTYPE html>
<html lang="es">
<head>
    <nav>
    <a href="{{ url('/') }}" style="padding: 8px 12px; background-color: #3490dc; color: white; text-decoration: none; border-radius: 4px;">
        Inicio
    </a>
</nav>
    <meta charset="UTF-8">
    <title>Actividad 7 - Escuela de Robótica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
