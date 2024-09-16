<?php
// Obtener el ID del usuario a editar
$id = $_GET['id'];

// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'hotel');

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del usuario
$query = "SELECT * FROM usuario WHERE id = $id";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "Usuario no encontrado.";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h2 class="mb-3">Editar Usuario</h2>
    <form action="update_user.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $user['nombre']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" name="apellido" class="form-control" value="<?php echo $user['apellido']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="dni" class="form-label">DNI:</label>
            <input type="text" name="dni" class="form-control" value="<?php echo $user['dni']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="celular" class="form-label">Celular:</label>
            <input type="text" name="celular" class="form-control" value="<?php echo $user['celular']; ?>" required>
        </div>
        <input type="submit" value="Actualizar Usuario" class="btn btn-primary">
    </form>
</body>
</html>
