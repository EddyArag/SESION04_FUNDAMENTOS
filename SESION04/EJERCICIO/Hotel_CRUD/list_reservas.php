<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'hotel');

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$query = "SELECT reservas.id, reservas.fecha_reserva, reservas.huespedes, reservas.habitacion, reservas.noches, usuario.nombre, usuario.apellido, usuario.dni
          FROM reservas
          JOIN usuario ON reservas.id_usuario = usuario.id";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Reservas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="container">
        <h1 class="my-4">Lista de Reservas</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha de Reserva</th>
                    <th>Huéspedes</th>
                    <th>Habitación</th>
                    <th>Noches</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['fecha_reserva'] . '</td>
                <td>' . $row['huespedes'] . '</td>
                <td>' . $row['habitacion'] . '</td>
                <td>' . $row['noches'] . '</td>
                <td>' . $row['nombre'] . '</td>
                <td>' . $row['apellido'] . '</td>
                <td>' . $row['dni'] . '</td>
                <td>
                    <a href="edit_reserva.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">Editar</a>
                    <a href="delete_reserva.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
            </tr>';
    }

    echo '    </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>';
} else {
    echo '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Reservas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="container">
        <h1 class="my-4">No hay reservas</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>';
}

$conn->close();
?>
