<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Puro ADMI</title>
    <style>
        /* Estilos generales */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('https://fondosmil.com/fondo/21984.jpg');
            background-size: cover;
            background-position: center;
        }

        /* Estilos para el menú */
        .menu {
            background-color: #000;
            text-align: center;
            padding: 20px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .menu a {
            color: #fff;
            text-decoration: none;
            font-size: 24px;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            background-color: #00ff00; /* Verde neón */
            transition: background-color 0.3s ease;
        }

        .menu a:hover {
            background-color: #ff6e00; /* Naranja neón */
        }

        /* Estilos adicionales */
        h1 {
            color: #fff;
            font-size: 48px;
            margin-bottom: 40px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }

        .car-animation {
            animation: carMove 5s linear infinite;
            width: 358px; /* Ajusta el tamaño del auto */
            height: auto;
        }

        @keyframes carMove {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        /* Estilos para el botón */
        input[type="submit"] {
            padding: 8px 16px;
            background-color: #ff0000; /* Rojo neón */
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #ff6e00; /* Naranja neón */
        }
    </style>
</head>
<body bgcolor="orange">
    <h1>MENU SOLO PARA LOS ADMI</h1>
    <div class="menu">
        <a href="p8_.php">Mostrar lista de autos</a>
        <a href="inter_insert.php">Agregar auto</a>
    </div>

    <div class="menu">
        <a href="borrar_fr-ss.php">Borrar auto de la base</a>
        <a href="act_inter.php">Actualizar lista de autos</a>
    </div>
    <div class="menu">
        <a href="busca_inter.php">Buscar Automovil</a>
    </div>

    <img class="car-animation" src="https://i.pinimg.com/originals/27/2a/74/272a7442662ceedd242ac93a9f6eecb5.gif" alt="Auto deportivo">
    
    <form action="menu_mejo.php" method="post">
        <input type="submit" name="boton" value="MENU" style="background-color: #ff0000;">
    </form>
    <br>
    <br>
</body>
</html>

