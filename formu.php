<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $pregunta1 = $_POST['pregunta1'];
    $pregunta2 = $_POST['pregunta2'];
    $pregunta3 = $_POST['pregunta3'];
    $pregunta4 = $_POST['pregunta4'];
    $pregunta5 = $_POST['pregunta5'];

    // Envío de correo electrónico
    $destinatario = 'fuentes.reyna.diego@gmail.com';
    $asunto = 'Respuestas del Formulario';
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Correo electrónico: $correo\n";
    $mensaje .= "Respuesta 1: $pregunta1\n";
    $mensaje .= "Respuesta 2: $pregunta2\n";
    $mensaje .= "Respuesta 3: $pregunta3\n";
    $mensaje .= "Respuesta 4: $pregunta4\n";
    $mensaje .= "Respuesta 5: $pregunta5\n";

    // Utiliza la función mail() para enviar el correo
    if (mail($destinatario, $asunto, $mensaje)) {
        echo '<p>¡Formulario enviado con éxito!</p>';
    } else {
        echo '<p>Hubo un error al enviar el formulario. Por favor, inténtalo nuevamente más tarde.</p>';
    }
}
?>
