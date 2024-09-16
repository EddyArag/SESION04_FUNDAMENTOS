<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'hotel');

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener la reserva a editar
$id = $_GET['id'];
$query = "SELECT * FROM reservas WHERE id = $id";
$result = $conn->query($query);
$reserva = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fecha_reserva = $_POST['fecha_reserva'];
    $huespedes = $_POST['huespedes'];
    $habitacion = $_POST['habitacion'];
    $noches = $_POST['noches'];

    $query = "UPDATE reservas SET fecha_reserva = '$fecha_reserva', huespedes = '$huespedes', habitacion = '$habitacion', noches = '$noches' WHERE id = $id";
    if ($conn->query($query) === TRUE) {
        echo '<div class="alert alert-success" role="alert">
                Reserva actualizada exitosamente.
              </div>';
        header("refresh:2;url=list_reservas.php");
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Error al actualizar la reserva: ' . $conn->error . '
              </div>';
    }
} else {
    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Reserva</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="container">
        <h1 class="my-4">Editar Reserva</h1>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Fecha de Reserva:</label>
                <input type="date" class="form-control" name="fecha_reserva" value="' . $reserva['fecha_reserva'] . '" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Número de Huéspedes:</label>
                <input type="number" class="form-control" name="huespedes" value="' . $reserva['huespedes'] . '" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Habitación:</label>
                <input type="text" class="form-control" name="habitacion" value="' . $reserva['habitacion'] . '" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Número de Noches:</label>
                <input type="number" class="form-control" name="noches" value="' . $reserva['noches'] . '" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Reserva</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>';
}

$conn->close();
?>
