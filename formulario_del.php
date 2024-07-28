<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 10px;
        }

        .form-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-field {
            margin-bottom: 20px;
        }

        .form-field label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-field input,
        .form-field textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-field textarea {
            height: 100px;
        }

        .form-submit {
            text-align: center;
        }

        .form-submit button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-submit button:hover {
            background-color: #45a049;
        }
    </style>
    <link rel="stylesheet" href="styles_form.css">
</head>
<body>
    <div class="form-container">
        <h1 class="form-title">Formulario de Contrato</h1>
        <form action="#" method="post">
            <div class="form-field">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-field">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-field">
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="form-submit">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
<form action="menu_mejo.php" method"get">
            <br> <Input type="submit" name"boton" value="Regresar" style="float: right;" > </br>
    </form>
</html>
