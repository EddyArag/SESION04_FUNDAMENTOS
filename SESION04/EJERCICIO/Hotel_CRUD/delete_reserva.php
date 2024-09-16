<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'hotel');

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$id = $_GET['id'];
$query = "DELETE FROM reservas WHERE id = $id";

if ($conn->query($query) === TRUE) {
    echo '<div class="alert alert-success" role="alert">
            Reserva eliminada exitosamente.
          </div>';
    header("refresh:2;url=list_reservas.php");
} else {
    echo '<div class="alert alert-danger" role="alert">
            Error al eliminar la reserva: ' . $conn->error . '
          </div>';
}

$conn->close();
?>
