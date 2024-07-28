<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
<head>
    <title>Menú Desplegable</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        /* Estilos del menú desplegable */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .dropdown .dropbtn {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
        }
        
        .dropdown .dropbtn:hover {
            background-color: #45a049;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 4px;
        }
        
        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s ease;
        }
        
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body bgcolor="black">
    <font color="#3BFF00">
        <center>
    <h1>Menú Desplegable</h1>
        <div class="dropdown">
        <button class="dropbtn">Menú</button>
        <div class="dropdown-content">
            <a href="Chevrolet.php" onclick="showMessage(' Muchas gracias por elegirnos. ')"> CHEVROLET </a>
            <a href="Bugatti.php" onclick="showMessage(' Muchas gracias por elegirnos. ')"> BUGATTI </a>
            <a href="Lamborghini.php" onclick="showMessage(' Muchas gracias por elegirnos. ')"> LAMBORGHINI </a>
            <a href="Pagani.php" onclick="showMessage(' Muchas gracias por elegirnos. ')"> PAGANI </a>
        </div>
    </div>

    <script>
        // Función para mostrar un mensaje cuando se selecciona una opción del menú
        function showMessage(option) {
            alert("Has seleccionado: Esta marca, una muy buena opción para usted." + option);
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Información de Contacto</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
        }

        /* Estilos de la lista de información de contacto */
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Información de Contacto</h1>
    <ul>
        <li><a href="mailto:fuentes.reyna.diego@gmail.com">Correo Electrónico</a></li>
        <li>Teléfono: <span>+1 234 567 890</span></li>
        <li><a href="https://wa.me/2212653817">WhatsApp</a></li>
        <li><a href="https://www.youtube.com/tu_canal">YouTube</a></li>
    </ul>
</body>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mi Programa &reg;</title>
</head>
<body>
    <h1> &reg;</h1>
    <p>Bienvenido a FR Super Sport Cars. FR ss &copy; 2023</p>
</body>
</html>

</html>

