<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pontiac</title>
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
            padding: 8px;
            border: 1px solid #3BFF00;
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
                <p>Bienvenidos al apartado de Pontiac</p>
                <?php
                    $rutaImagen = 'C:\xampp\htdocs\proyect_Delia\logo pontiac.jpeg';
                    $tipoImagen = pathinfo($rutaImagen, PATHINFO_EXTENSION);
                    $imagenCodificada = base64_encode(file_get_contents($rutaImagen));
                    $imagenDataUri = 'data:image/' . $tipoImagen . ';base64,' . $imagenCodificada;
                ?>
                <img src="<?php echo $imagenDataUri; ?>" alt="Mi imagen" style="width: 400px; height: 300px;">
                <p>Los modelos de Pontiac que están en esta página son los mejores para ti</p>
                <br>
                <p>PONTIAC</p>
                <br>
                <p>Pontiac GTO 06</p>
                <?php
                    $rutaImagen = 'file:///C:/xampp/htdocs/proyect_Delia/Pontiac_GTO_06.jpeg';
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
                        <td><font size="4">El Pontiac GTO 06 es un auto muscle, con un motor frontal, hecho para pista y calle. Está fabricado por la empresa Pontiac en la ciudad de Pontiac (Michigan). Cuenta con frenos ABS y ha sido modificado para las drag races, principalmente carreras de velocidad. El automóvil tiene una carrocería coupé y fue uno de los primeros muscle cars creados para competir con superautos.</td>
                        <td><font size="4">Su velocidad máxima es de 255 km/h</td>
                        <td><font size="4">Su precio es de $525,026.87</td>
                    </tr>
                </table>
                <form action="menu_mejo.php" method="get">
                    <input type="submit" name="boton" value="Regresar" style="float: right;">
                </form>
            </center>
        </font>
    </font>
</body>
</html>
