<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $car_id = $_POST["car_id"];
    $new_model = $_POST["new_model"];
    $new_color = $_POST["new_color"];

    // Realizar la conexión a la base de datos (ajusta los valores según tu configuración)
    $host = "localhost";
    $username = "Fuentes";
    $password = "Black";
    $database = "fr-ss";

    $conn = mysqli_connect($host, $username, $password, $database);

    // Verificar si la conexión fue exitosa
    if (!$conn) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }

    // Construir la consulta SQL para actualizar los datos del auto
    $sql = "UPDATE autos SET marca='$new_model', nombre='$new_color' WHERE num_serie='$car_id'";

    // Ejecutar la consulta
    if (mysqli_query($conn, $sql)) {
        echo "Actualización exitosa";
    } else {
        echo "Error al actualizar los datos: " . mysqli_error($conn);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conn);
}
?>
