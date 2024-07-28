<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Actualizar Auto</title>
    <style>
        /* Estilos generales */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #111;
        }

        /* Estilos para el formulario */
        .form {
            max-width: 500px;
            padding: 40px;
            background-color: rgba(34, 34, 34, 0.8); /* Transparente */
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .form h2 {
            color: #ff6e00; /* Naranja neón */
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #00ff00; /* Verde neón */
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #00ff00;
            border-radius: 4px;
            background-color: #333;
            color: #00ff00;
        }

        .form-group button {
            padding: 8px 16px;
            background-color: #00ff00;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #ff6e00;
        }
    </style>
</head>
<body>
    <div class="form">
        <h2>Actualizar Auto</h2>
        <form method="POST" action="actualizar_xd.php">
            <div class="form-group">
                <label for="ns" style="color: #00ff00;">Número de Serie:</label>
                <input type="text" name="ns" id="ns" required>
            </div>
            <div class="form-group">
                <label for="np" style="color: #00ff00;">Nuevo Precio:</label>
                <input type="text" name="np" id="np" required>
            </div>
            <div class="form-group">
                <button type="submit">Actualizar</button>
                <a href="men.php" style="margin-left: 10px; color: #00ff00; text-decoration: none;">Regresar al Menú</a>
            </div>
        </form>
    </div>
</body>
</html>

