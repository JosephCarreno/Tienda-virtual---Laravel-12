<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido a Laravel</title> -
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef;
            text-align: center;
            margin-top: 100px;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>
<h1>¡Hola, Laravel está funcionando! 🎉</h1>
<p>Iniciar en Sesión</p>
<a href="{{ url('auth/sesion') }}">Ir al Login</a>
</body>
</html>
