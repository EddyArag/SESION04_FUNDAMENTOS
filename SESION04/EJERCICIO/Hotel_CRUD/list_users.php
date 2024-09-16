<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h2 class="mb-3">Lista de Usuarios</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Celular</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Conexión a la base de datos
            $conn = new mysqli('localhost', 'root', '', 'hotel');

            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            $query = "SELECT * FROM usuario";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['nombre'] . "</td>
                            <td>" . $row['apellido'] . "</td>
                            <td>" . $row['dni'] . "</td>
                            <td>" . $row['celular'] . "</td>
                            <td>
                                <a href='edit_user.php?id=" . $row['id'] . "' class='btn btn-warning'>Editar</a>
                                <a href='delete_user.php?id=" . $row['id'] . "' class='btn btn-danger'>Eliminar</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No hay usuarios registrados</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
