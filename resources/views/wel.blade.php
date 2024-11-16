<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        body {
            background-image: url('https://farmazara.es/blog/wp-content/uploads/2023/08/flores-lavanda-al-atardecer-provenza-francia-imagen-macro-profundidad-campo-baja-hermoso-fondo-floral.jpg');
            background-size: 100% 100%;
            background-position: center;
            
            color: rgb(0, 0, 0);
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 100px;
        }

        h1 {
            font-size: 3em;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 14px 24px;
            font-size: 20px;
            font-weight: bold;
            color: #2d2222;
            background-color: #007bff;
            border: none;
            border-radius: 10px;
            text-decoration: none;
            margin: 25px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .login-btn {
            background-color: #28a745;
        }

        .login-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    
    <h1>Bienvenido a DaiStore</h1>

    <!-- Botón para ir al índice de usuarios -->
    <a href="{{ route('index') }}" class="btn btn-primary">Usuarios</a>

    <!-- Botón para ir al índice de productos -->
    <a href="{{ route('productos.index') }}" class="btn btn-primary">Productos</a>

    <!-- Botón para ir al índice de pedidos -->
    <a href="{{ route('pedidos.index') }}" class="btn btn-primary">Pedidos</a>
    
    <a href="{{ route('home') }}" class="btn btn-primary">cerrar</a>


</body>
</html>