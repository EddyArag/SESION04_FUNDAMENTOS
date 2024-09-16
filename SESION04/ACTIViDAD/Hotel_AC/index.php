<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas de Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">

    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-3">Formulario de Reserva</h2>
            <form action="procesar_reserva.php" method="POST" class="mb-3">
                <div class="mb-3">
                    <label for="dni" class="form-label">DNI:</label>
                    <input type="text" name="dni" class="form-control" maxlength="8" required>
                </div>
                <div class="mb-3">
                    <label for="fecha_reserva" class="form-label">Fecha de la Reserva:</label>
                    <input type="date" name="fecha_reserva" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="huespedes" class="form-label">Número de Huéspedes:</label>
                    <input type="number" name="huespedes" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="habitacion" class="form-label">Habitación:</label>
                    <input type="text" name="habitacion" class="form-control" maxlength="15" required>
                </div>
                <div class="mb-3">
                    <label for="noches" class="form-label">Número de Noches:</label>
                    <input type="number" name="noches" class="form-control" required>
                </div>
                <input type="submit" value="Reservar" class="btn btn-primary">
            </form>
            <a href="crear_usuario.php" class="btn btn-secondary">Crear Usuario</a>
        </div>
        <div class="col-md-6">
            <img src="imagen.png" alt="Hotel" class="img-fluid">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
