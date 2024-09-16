<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'hotel');

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recoger datos del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$celular = $_POST['celular'];

// Actualizar el usuario
$query = "UPDATE usuario SET nombre = '$nombre', apellido = '$apellido', dni = '$dni', celular = '$celular' 
          WHERE id = $id";
if ($conn->query($query) === TRUE) {
    echo "Usuario actualizado exitosamente.";
} else {
    echo "Error al actualizar el usuario: " . $conn->error;
}

$conn->close();
?>
