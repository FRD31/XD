<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de Preguntas</title>
    <style>
        /* Estilos CSS aquí */
    </style>
</head>
<body>
    <h1>Formulario de Preguntas</h1>

    <form method="POST" action="enviar_formulario.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required><br><br>

        <label for="pregunta1">Pregunta 1:</label>
        <input type="text" id="pregunta1" name="pregunta1" required><br><br>

        <label for="pregunta2">Pregunta 2:</label>
        <input type="text" id="pregunta2" name="pregunta2" required><br><br>

        <label for="pregunta3">Pregunta 3:</label>
        <input type="text" id="pregunta3" name="pregunta3" required><br><br>

        <label for="pregunta4">Pregunta 4:</label>
        <input type="text" id="pregunta4" name="pregunta4" required><br><br>

        <label for="pregunta5">Pregunta 5:</label>
        <input type="text" id="pregunta5" name="pregunta5" required><br><br>

        <input type="submit" value="Enviar formulario">
    </form>
</body>
</html>
