<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://i.pinimg.com/originals/04/05/bb/0405bbbc2cf0e88ea675f6acb57f4693.jpg');
            background-size: cover;
            
        }

        h1 {
            text-align: center;
            color: #00ff00; /* Color verde neón */
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 153, 0, 0.5);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #fff;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: rgba(255, 255, 255, 0.3);
            color: #fff;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 15px;
            margin-top: 20px;
            background-color: #0f0;
            color: #f00;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 18px;
        }

        input[type="submit"]:hover {
            background-color: #33ff33;
        }
    </style>
</head>
<body>
    <h1 style="color: #00ff00;">Iniciar Sesión</h1>
    <form action="men.php" method="POST">
        <label for="username">Usuario:</label>
        <input type="text" name="username" id="username" required><br>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required><br>
        
        <input type="submit" value="Iniciar Sesión">
    </form>
    
             <form action="menu_mejo.php" method"get">
            <br> <Input type="submit" name"boton" value="Regresar" style="float: right;" > </br>
    </form>
</body>
</html>

