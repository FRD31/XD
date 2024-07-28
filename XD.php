
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <style>
        /* Estilos CSS omitidos por brevedad */
         body {
            background-image: url('https://hips.hearstapps.com/hmg-prod/images/lambo-1596031276.gif?crop=0.6666666666666666xw:1xh;center,top&resize=1200:*');
            background-size: cover;
            background-position: center ;
            font-family: Arial, sans-serif;
        }
        

        h2 {
            text-align: center;
            color: #00ff00; /* Color verde neón */
            margin-top: 50px;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            background-color: rgba(255, 153, 0, 0.5); /* Color naranja neón con transparencia */
            padding: 20px;
            border-radius: 5px;
            margin-top: 30px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #00ff00; /* Color verde neón */
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: transparent; /* Fondo transparente */
            color: #00ff00; /* Color verde neón */
            box-shadow: 0 0 10px #00ff00; /* Efecto de brillo */
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            background-color: transparent; /* Fondo transparente */
            color: #00ff00; /* Color verde neón */
            box-shadow: 0 0 10px #00ff00; /* Efecto de brillo */
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 15px;
            margin-top: 20px;
            background-color: #00ff00; /* Color verde neón */
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease; /* Transición de color */
        }

        input[type="submit"]:hover {
            background-color: #0000ff; /* Color azul */
        }

        .error {
            color: #00ff00; /* Color verde neón */
            margin-top: 10px;
            text-align: center;
        }

        .btn-regresar {
            display: block;
            width: 25%;
            padding: 15px;
            background-color: #00ff00; /* Color verde neón */
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease; /* Transición de color */
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }

        .btn-regresar:hover {
            background-color: #0000ff; /* Color azul */
        }
    </style>
    <script>
        window.addEventListener('scroll', function() {
            var btnRegresar = document.getElementById('btn-regresar');
            var scrollPosition = window.scrollY || window.pageYOffset;

            if (scrollPosition + window.innerHeight >= document.documentElement.scrollHeight) {
                btnRegresar.style.position = 'absolute';
                btnRegresar.style.bottom = '20px';
                btnRegresar.style.transform = 'translateX(-50%)';
            } else {
                btnRegresar.style.position = 'fixed';
                btnRegresar.style.bottom = '20px';
                btnRegresar.style.transform = 'translateX(-50%)';
            }
        });
    </script>
</head>
<?php
// Verificar si se envió el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['usuario']) && isset($_POST['contrasena'])) {
    // Obtener los datos enviados en el formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Verificar las credenciales (Aquí debes agregar tu lógica de autenticación)
    if ($usuario === 'Fuentes' && $contrasena === 'BlackDanger') {
        // Redireccionar al menú después de iniciar sesión correctamente
        header("Location: men.php");
        exit();
    } else {
        // Mostrar mensaje de error si las credenciales son incorrectas
        $errorMessage = "Usuario o contraseña incorrectos";
    }
}
?>
<body bgcolor="black">
    <h2>Iniciar sesión</h2>
    <form method="POST" action="">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required><br><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required><br><br>
        <input type="submit" value="Iniciar sesión">
        <?php if (!empty($errorMessage)) { ?>
            <p class="error"><?php echo $errorMessage; ?></p>
        <?php } ?>
    </form>
    <button id="btn-regresar" class="btn-regresar" onclick="window.location.href = 'menu_mejo.php';">Regresar al menú</button>
</body>
</html>
