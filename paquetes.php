<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de Preguntas</title>
    <style>
        body {
            background-color: #000;
            font-family: Arial, sans-serif;
        }
        
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(0, 255, 0, 0.2);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }
        
        label {
            color: #ff6c00;
            display: block;
            margin-bottom: 10px;
        }
        
        input[type="text"] {
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: none;
            background-color: #000;
            color: #fff;
            transition: color 0.3s;
        }
        
        input[type="text"]:focus {
            color: #ff6c00;
        }
        
        input[type="submit"] {
            background-color: #ff6c00;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #ff851b;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="mailto:fuentes.reyna.diego@gmail.com" method="post" enctype="text/plain">
            <label for="correo">Correo del Remitente:</label>
            <input type="email" name="correo" required>
        
            <label for="pregunta1">Pregunta 1:</label>
            <input type="text" name="pregunta1" required>
        
            <label for="pregunta2">Pregunta 2:</label>
            <input type="text" name="pregunta2" required>
        
            <label for="pregunta3">Pregunta 3:</label>
            <input type="text" name="pregunta3" required>
        
            <label for="pregunta4">Pregunta 4:</label>
            <input type="text" name="pregunta4" required>
        
            <label for="pregunta5">Pregunta 5:</label>
            <input type="text" name="pregunta5" required>
        
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
<form action="menu_mejo.php" method"get">
            <br> <Input type="submit" name"boton" value="Regresar" style="float: right;" > </br>
    </form>
</html>
