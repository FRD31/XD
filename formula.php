<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de Preguntas</title>
    <style>
        body {
            background-color: black;
            color: #3BFF00;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            border-bottom: 2px solid #39FF14;
            padding-bottom: 10px;
            color: #3BFF00;
        }

        form {
            margin: 0 auto;
            width: 300px;
            background-color: #333333;
            padding: 20px;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #3BFF00;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: none;
            background-color: #333333;
            color: #3BFF00;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: none;
            background-color: #3BFF00;
            color: black;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Formulario de Preguntas</h1>

    <form method="POST" action="formu.php">
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
