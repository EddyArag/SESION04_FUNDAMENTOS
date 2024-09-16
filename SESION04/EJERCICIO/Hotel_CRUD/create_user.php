<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h2 class="mb-3">Crear Nuevo Usuario</h2>
    <form action="procesar_usuario.php" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" name="apellido" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="dni" class="form-label">DNI:</label>
            <input type="text" name="dni" class="form-control" maxlength="8" required>
        </div>
        <div class="mb-3">
            <label for="celular" class="form-label">Celular:</label>
            <input type="text" name="celular" class="form-control" maxlength="20" required>
        </div>
        <input type="submit" value="Crear Usuario" class="btn btn-primary">
    </form>
</body>
</html>
