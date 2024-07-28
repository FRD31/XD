<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $respuestas = array();

    // Recuperar las respuestas de las preguntas
    for ($i = 1; $i <= 10; $i++) {
        $pregunta = 'pregunta' . $i;
        $respuesta = $_POST[$pregunta];
        $respuestas[] = "Pregunta $i: $respuesta";
    }

    // Construir el mensaje
    $mensaje = "Respuestas del formulario:\n\n";
    $mensaje .= "Nombre: $nombre\n";
    $mensaje .= "Correo electrónico: $correo\n\n";
    $mensaje .= implode("\n", $respuestas);

    // Configurar los datos del correo electrónico
    $destinatario = 'fuentes.reyna.diego@gmail.com'; // Corrige el dominio a "diego"
    $asunto = 'Respuestas del formulario';

    // Enviar el correo electrónico
    $headers = "From: $correo" . "\r\n" .
               "Reply-To: $correo" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "Gracias por enviar tus respuestas. Se han enviado correctamente por correo electrónico.";
    } else {
        echo "Lo sentimos, ha ocurrido un error al enviar el formulario. Por favor, intenta nuevamente.";
    }
} else {
    echo "Acceso inválido al archivo.";
}
?>
