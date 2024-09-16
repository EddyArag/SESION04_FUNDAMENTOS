<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Reserva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1 class="my-4">Crear Reserva</h1>

    <form method="POST" action="process_reserva.php">
        <div class="mb-3">
            <label class="form-label">DNI del Usuario:</label>
            <input type="text" class="form-control" name="dni" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha de Reserva:</label>
            <input type="date" class="form-control" name="fecha_reserva" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Número de Huéspedes:</label>
            <input type="number" class="form-control" name="huespedes" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Habitación:</label>
            <input type="text" class="form-control" name="habitacion" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Número de Noches:</label>
            <input type="number" class="form-control" name="noches" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Reserva</button>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
