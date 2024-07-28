<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bugatti</title>
    <style>
        body {
            background-color: black;
            color: #3BFF00;
            font-family: Arial, sans-serif;
        }
        
        center {
            margin-top: 50px;
        }
        
        .bugatti-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #00ff00; /* Verde neón */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .bugatti-link:hover {
            background-color: #00ff00; /* Verde neón */
            color: #333;
        }
        
        table {
            margin-top: 20px;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 8px;
            border: 1px solid #3BFF00;
        }
        
        th {
            background-color: #333;
            color: #00ff00;
        }
    </style>
</head>
<body>
    <font size="5">
        <font color="#3BFF00">
            <center>
                <br>
                <p>Bienvenidos al apartado de Bugatti</p>
                <img src="https://i.pinimg.com/736x/e6/2d/94/e62d94a95417df5b9168f8eeb0c44ece.jpg" width="400" height="200">
                <br>
                <p>Los modelos de Bugatti que están en esta página son los mejores para ti</p>
                <br>
                <p>BUGATTI</p>
                <br>
                <p>Bugatti EB 110ss</p>
                <?php
                    $rutaImagen = 'C:\xampp\htdocs\proyect_Delia\Bugatti-EB-110ss.jpeg.jpg';
                    $tipoImagen = pathinfo($rutaImagen, PATHINFO_EXTENSION);
                    $imagenCodificada = base64_encode(file_get_contents($rutaImagen));
                    $imagenDataUri = 'data:image/' . $tipoImagen . ';base64,' . $imagenCodificada;
                ?>
                <img src="<?php echo $imagenDataUri; ?>" alt="Mi imagen" style="width: 700px; height: 400px;">
                <p>Informes del auto</p>
                <table>
                    <tr>
                        <th>Informe del auto</th>
                        <th>Velocidad</th>
                        <th>Precio</th>
                    </tr>
                    <tr>
                        <td><font size="4">Automóvil superdeportivo (S)
                            Carrocerías	Cupé de 2 puertas de tijera
                            Configuración	Motor central-trasero longitudinal, tracción total.
                            En total se produjeron 128 coches, 96 pertenecientes a la versión EB110 GT y 32 a la EB110 Super Sport.</td>
                        <td><font size="4">Velocidad máxima de 355 km/h</td>
                        <td><font size="4">1,75 y 2,20 millones de euros</td>
                    </tr>
                </table>
                <br>
                <form action="menu_mejo.php" method="get">
                    <br>
                    <input type="submit" name="boton" value="Regresar" style="float: right;">
                </form>
            </center>
        </font>
    </font>
</body>
</html>
