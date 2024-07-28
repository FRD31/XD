<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lamborghini</title>
    <style>
        body {
            background-color: black;
            color: #3BFF00;
            font-family: Arial, sans-serif;
        }
        
        center {
            margin-top: 50px;
        }
        
        .lamborghini-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #00ff00; /* Verde neón */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .lamborghini-link:hover {
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
<body bgcolor="black">
    <font color="#3BFF00">
        <font size="5">
            <center>
                <br>
                <p>Bienvenidos al apartado de Lamborghini</p>
                <img src="https://turbologo.com/articles/wp-content/uploads/2019/11/Lamborghini-logo.png" width="400" height="200">
                <br>
                <p>Los modelos de Lamborghini que están en esta página son los mejores para ti</p>
                <br>
                <p>LAMBORGHINI</p>
                <br>
                <p>Lamborghini Huracán Coupé</p>
                <?php
                    $rutaImagen = 'file:///C:/xampp/htdocs/proyect_Delia/Lamborghini_huracan.jpeg.jpg';
                    $tipoImagen = pathinfo($rutaImagen, PATHINFO_EXTENSION);
                    $imagenCodificada = base64_encode(file_get_contents($rutaImagen));
                    $imagenDataUri = 'data:image/' . $tipoImagen . ';base64,' . $imagenCodificada;
                ?>
                <img src="<?php echo $imagenDataUri; ?>" alt="Mi imagen" style="width: 700px; height: 400px;">
                <p>Informes del auto</p>
                <table border="1">
                    <tr>
                        <th>Informe del auto</th>
                        <th>Velocidad</th>
                        <th>Precio</th>
                    </tr>
                    <tr>
                        <td><font size="4">Toda la potencia y aceleración de un motor aspirado V10, sin renunciar al control y al placer de conducción, gracias a la tracción permanente en las cuatro ruedas y al cambio de 7 velocidades Lamborghini Doppia Frizione (LDF - Doble Embrague Lamborghini), así como a la innovadora Piattaforma Inerziale Lamborghini (LPI - Lamborghini Plataforma Inercial), creada para detectar de forma directa y precisa todos los movimientos de la carrocería y para un ajuste inmediato de las configuraciones del coche.</td>
                        <td><font size="4">Velocidad máxima de 325 km/h</td>
                        <td><font size="4">249.826 €</td>
                    </tr>
                </table>
                <br>
                <p>Lamborghini Aventador</p>
                <?php
                    $rutaImagen = 'file:///C:/xampp/htdocs/proyect_Delia/Lamborghini_aventador.jpg.jpeg';
                    $tipoImagen = pathinfo($rutaImagen, PATHINFO_EXTENSION);
                    $imagenCodificada = base64_encode(file_get_contents($rutaImagen));
                    $imagenDataUri = 'data:image/' . $tipoImagen . ';base64,' . $imagenCodificada;
                ?>
                <img src="<?php echo $imagenDataUri; ?>" alt="Mi imagen" style="width: 700px; height: 400px;">
                <p>Informes del auto</p>
                <table border="1">
                    <tr>
                        <th>Informe del auto</th>
                        <th>Velocidad</th>
                        <th>Precio</th>
                    </tr>
                    <tr>
                        <td><font size="4">El Lamborghini Aventador es un automóvil superdeportivo biplaza de dos puertas de tijera, con motor central-trasero montado longitudinalmente y de tracción en las cuatro ruedas, producido por el fabricante italiano Lamborghini, subsidiaria del Grupo Volkswagen, de 2011 a 2022. Fue concebido para reemplazar al Murciélago, como el nuevo modelo tope de la gama.</td>
                        <td><font size="4">Velocidad máxima de 350 km/h</td>
                        <td><font size="4">8 millones 272,954, en pesos mexicanos</td>
                    </tr>
                </table>
                <br>
                <form action="menu_mejo.php" method="get">
                    <input type="submit" name="boton" value="Regresar" style="float: right;">
                </form>
                <a href="https://www.lamborghini.com/es-en" class="lamborghini-link">Lamborghini real</a>
            </center>
        </font>
    </font>
</body>
</html>
