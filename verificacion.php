<meta charset="UTF-8">
<center>
<body bgcolor="black">
<font size="5">
<font color="yellow">
<br>
<br>
<br>
<br>
<?php
// Verificar si se recibieron los datos del formulario
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Obtener los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Definir las combinaciones válidas de usuario y contraseña
    $usuariosValidos = array(
        'Fuentes' => 'BlackDanger',
        'Roque' => 'blackcristian',
        'Arturo' => '2023'
     ; 
    )

    // Verificar la combinación de usuario y contraseña
    if (array_key_exists($username, $usuariosValidos) && $usuariosValidos[$username] === $password) {
        // Combinación válida, redirigir a otra página
        header("Location: men.php");
        exit();
    } else {
        // Combinación inválida, mostrar mensaje de error
        echo "Usuario y/o contraseña incorrectos.";
    }
}
?>
