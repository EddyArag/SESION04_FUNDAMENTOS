<?php
// Obtener el ID del usuario a eliminar
$id = $_GET['id'];

// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'hotel');

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Eliminar el usuario
$query = "DELETE FROM usuario WHERE id = $id";
if ($conn->query($query) === TRUE) {
    echo "Usuario eliminado exitosamente.";
} else {
    echo "Error al eliminar el usuario: " . $conn->error;
}

$conn->close();
?>
