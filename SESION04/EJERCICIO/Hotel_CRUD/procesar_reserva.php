<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'hotel');

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recoger datos del formulario
$dni = $_POST['dni'];
$fecha_reserva = $_POST['fecha_reserva'];
$huespedes = $_POST['huespedes'];
$habitacion = $_POST['habitacion'];
$noches = $_POST['noches'];

// Verificar si el usuario ya está registrado
$query = "SELECT id, nombre, apellido, celular FROM usuario WHERE dni = '$dni'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Usuario ya existe, obtener su ID y datos
    $row = $result->fetch_assoc();
    $id_usuario = $row['id'];
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $celular = $row['celular'];
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['completar_reserva'])) {
        // Crear la reserva
        $query = "INSERT INTO reservas (id_usuario, fecha_reserva, huespedes, habitacion, noches) 
                  VALUES ('$id_usuario', '$fecha_reserva', '$huespedes', '$habitacion', '$noches')";
        if ($conn->query($query) === TRUE) {
            echo '<div class="alert alert-success" role="alert">
                    Reserva creada exitosamente.
                  </div>';
            // Redirigir al index.php después de 2 segundos
            header("refresh:2;url=index.php");
        } else {
            echo '<div class="alert alert-danger" role="alert">
                    Error al crear la reserva: ' . $conn->error . '
                  </div>';
        }
    } else {
        // Mostrar el formulario con los detalles de la reserva
        echo '
        <div class="container">
            <h2 class="mt-4">Datos de la Reserva</h2>
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Habitación:</label>
                    <input type="text" class="form-control" value="' . $habitacion . '" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nombres:</label>
                    <input type="text" class="form-control" value="' . $nombre . '" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellidos:</label>
                    <input type="text" class="form-control" value="' . $apellido . '" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Celular:</label>
                    <input type="text" class="form-control" value="' . $celular . '" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">DNI:</label>
                    <input type="text" class="form-control" value="' . $dni . '" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Fecha de la reserva:</label>
                    <input type="text" class="form-control" value="' . $fecha_reserva . '" readonly>
                </div>
                <button type="submit" name="completar_reserva" class="btn btn-primary">Completar Reserva</button>
            </form>
        </div>';
    }
} else {
    // Si el usuario no está registrado, redirigir a la página de creación de usuario
    header("Location: crear_usuario.php?dni=$dni");
    exit();
}

$conn->close();
?>
