
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mapa de contactos &reg</title>
    <style>
        /* Estilos css */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* menú horizontal css */
        .menu {
            background-color: #333;
            color: #00ff00; /* Verde neón siuuu */
            text-align: center;
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }

        .menu a {
            color: #00ff00; /* Verde neón xd */
            text-decoration: none;
            margin-right: 10px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            left: 50%;
            transform: translateX(-50%);
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-img {
            width: 20px;
            height: 20px;
            margin-left: 5px;
            vertical-align: middle;
        }

        /* Estilos para el contenedor del mapa, que es eso, no se así decia xd*/
        .map-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%; /* Proporción de aspecto 16:9, no se que significa pero así estaba */
            background-color: #000;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
        }
        
        /* título con css */
        .map-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin: 0;
            padding: 20px;
            background-color: #333;
            color: #fff;
        }

        /* introducción con css */
        .map-intro {
            text-align: center;
            font-size: 16px;
            margin-bottom: 20px;
            color: #fff;
        }

        /* iframe del mapa en css */
        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>
</head>

<body bgcolor="black">
    <div class="menu">
        <div>
            <a href="menu_mejo.php">Inicio</a>
        </div>
        <div class="dropdown">
        </div>
    </div>

    <div class="map-container">
        <h2 class="map-title">Mapa de Contactos</h2>
        <p class="map-intro">Encuentra nuestra ubicación en el mapa:</p>
        <iframe src="https://maps.google.com/maps?width=1379&amp;height=680&amp;hl=en&amp;q=cbtis 260&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    </div>
</body>
</html>