<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "fr-ss";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Valor a buscar
$valorBusqueda = "num_serie";

// Consulta SQL para buscar el elemento
$sql = "SELECT * FROM autos WHERE num_serie LIKE '%" . $valorBusqueda . "%'";
$result = $conn->query($sql);

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    // Mostrar los resultados encontrados
    while ($row = $result->fetch_assoc()) {
        echo "num_serie: " . $row["num_serie:"] . ", num_serie: " . $row["num_serie"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
$conn->close();
?>
