<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pagani</title>
    <style>
        body {
            background-color: black;
            color: #3BFF00;
            font-family: Arial, sans-serif;
        }
        
        center {
            margin-top: 50px;
        }
        
        table {
            margin-top: 20px;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 4px;
            border: 2px solid #3BFF00;
        }
        
        th {
            background-color: #333;
            color: #00ff00;
        }
        
        input[type="submit"] {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #333;
            color: #00ff00;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #00ff00;
            color: #333;
        }
    </style>
</head>
<body bgcolor="black">
    <font color="#3BFF00">
        <font size="5">
            <center>
                <br>
                <p>Bienvenidos al apartado de Pagani</p>
                <img src="https://listcarbrands.com/wp-content/uploads/2017/10/Pagani-symbol.jpg" width="400" height="200">
                <p>Los modelos de Pagani que están en esta página son los mejores para ti</p>
                <br>
                <p>PAGANI</p>
                <br>
                <p>Pagani Zonda R</p>
                <?php
                    $rutaImagen = 'C:\xampp\htdocs\proyect_Delia\Pagani_zonda_r.jpeg';
                    $tipoImagen = pathinfo($rutaImagen, PATHINFO_EXTENSION);
                    $imagenCodificada = base64_encode(file_get_contents($rutaImagen));
                    $imagenDataUri = 'data:image/' . $tipoImagen . ';base64,' . $imagenCodificada;
                ?>
                <img src="<?php echo $imagenDataUri; ?>" alt="Mi imagen" style="width: 800px; height: 300px;">
                <p>Informes del auto</p>
                <table border="1">
                    <tr>
                        <th>Informe del auto</th>
                        <th>Velocidad</th>
                        <th>Precio</th>
                    </tr>
                    <tr>
                        <td><font size="4">El Zonda R es uno de los automóviles más caros y más rápidos del mundo. Se han fabricado solamente 15 unidades. No está homologado para la calle, ya que es un superdeportivo solo para el circuito. Posee un motor V12 Mercedes-AMG de 750 CV (740 HP; 552 kW) que es sostenido por tubos de titanio, al mismo tiempo que su estructura es casi en su totalidad de fibra de carbono con hilos de titanio para incrementar su resistencia; esto hace que su peso sea de 1070 kg.</td>
                        <td><font size="4">Su velocidad máxima es de 369 km/h (229 mph), aunque las exigencias de pista pueden modificar esto, por lo que se calcula una velocidad máxima de 390 km/h (242 mph) si las condiciones son las adecuadas.</td>
                        <td><font size="4">Su precio es de 1,4 millones de €.</td>
                    </tr>
                </table>
            </center>
        </font>
    </font>
    <form action="menu_mejo.php" method="get">
        <input type="submit" name="boton" value="Regresar" style="float: right;">
    </form>
</body>
</html>
