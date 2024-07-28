<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    // Configurar los detalles del correo electrónico
    $destino = 'fuentes.reyna.diego@gmail.com';
    $asunto = 'Formulario de Contacto';
    

    // Construir el cuerpo del correo electrónico
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Correo electrónico: $correo\n";
    $cuerpo .= "Mensaje: $mensaje\n";

    // Enviar el correo electrónico
    $headers = 'From: ' . $correo . "\r\n" .
        'Reply-To: ' . $correo . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($destino, $asunto, $cuerpo, $headers)) {
        echo '<p>¡El mensaje se ha enviado correctamente!</p>';
    } else {
        echo '<p>Hubo un error al enviar el mensaje. Por favor, inténtalo nuevamente más tarde.</p>';
    }
}
?>

<?php
if (function_exists('mail')) {
    echo 'La función mail() está habilitada en este servidor.';
} else {
    echo 'La función mail() no está habilitada en este servidor.';
}
?>
