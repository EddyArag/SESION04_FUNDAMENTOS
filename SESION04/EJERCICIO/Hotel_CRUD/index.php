<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios y Reservas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('imagen.png');
            background-size: 50%;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            color: white; /* Cambiar el color del texto para mayor contraste */
        }
        
        h1, h2 {
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7); /* Sombra al texto para mayor visibilidad */
        }

        .container {
            background-color: rgba(0, 0, 0, 0.6); /* Fondo oscuro semitransparente */
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Gestión de Usuarios y Reservas</h1>
        
        <div class="row">
            <div class="col-md-6">
                <h2>Usuarios</h2>
                <a href="create_user.php" class="btn btn-primary mb-3">Crear Usuario</a>
                <a href="list_users.php" class="btn btn-info mb-3">Ver Usuarios</a>
            </div>

            <div class="col-md-6">
                <h2>Reservas</h2>
                <a href="create_reserva.php" class="btn btn-primary mb-3">Crear Reserva</a>
                <a href="list_reservas.php" class="btn btn-info mb-3">Ver Reservas</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
