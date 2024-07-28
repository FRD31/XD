<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Actualización de Auto</title>
    <style>
        /* Estilos generales */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        /* Estilos para el contenedor */
        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        /* Estilos para el encabezado */
        .header {
            background-color: #4CAF50;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }

        .header h2 {
            margin: 0;
        }

        /* Estilos para el formulario */
        .form {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Actualización de Auto</h2>
        </div>
        <div class="form">
            <form method="POST" action="actualizar.php">
                <div class="form-group">
                    <label for="car_id">ID del Auto:</label>
                    <input type="text" name="car_id" id="car_id" required>
                </div>
                <div class="form-group">
                    <label for="new_model">Nuevo Modelo:</label>
                    <input type="text" name="new_model" id="new_model" required>
                </div>
                <div class="form-group">
                    <label for="new_color">Nuevo Color:</label>
                    <input type="text" name="new_color" id="new_color" required>
                </div>
                <div class="form-group">
                    <button type="submit">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
3