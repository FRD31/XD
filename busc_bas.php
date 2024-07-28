<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$dbname = "fr-ss";
$username = "nombre_usuario";
$password = "contraseña_usuario";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Verificar si se envió el formulario de búsqueda
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['buscar'])) {
    // Obtener el valor de búsqueda enviado en el formulario
    $buscar = $_POST['buscar'];

    // Consulta SQL para buscar el elemento en la tabla
    $sql = "SELECT * FROM autos WHERE num_serie = '$buscar'";
    $result = $conn->query($sql);

    // Verificar si se encontraron resultados
    if ($result->num_rows > 0) {
        // Mostrar los resultados
        while ($row = $result->fetch_assoc()) {
            echo "Elemento encontrado: " . $row["columna"];
        }
    } else {
        echo "No se encontraron resultados para el valor ingresado.";
    }
}

// Cerrar la conexión
$conn->close();
?>
