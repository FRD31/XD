<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lancia</title>
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
            font-size: 14px;
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
                <p>Bienvenidos al apartado de Lancia</p>
                <img src="https://www.autonocion.com/wp-content/uploads/2022/11/Lancia-nuevo-logo-2022.jpg" width="400" height="200">
                <p>Los modelos de Lancia que están en esta página son los mejores para ti</p>
                <br>
                <p>LANCIA</p>
                <br>
                <p>Lancia Delta Integrale</p>
                <?php
                    $rutaImagen = 'C:\xampp\htdocs\proyect_Delia\Lancia Delta Integrale.jpeg.jpeg';
                    $tipoImagen = pathinfo($rutaImagen, PATHINFO_EXTENSION);
                    $imagenCodificada = base64_encode(file_get_contents($rutaImagen));
                    $imagenDataUri = 'data:image/' . $tipoImagen . ';base64,' . $imagenCodificada;
                ?>
                <img src="<?php echo $imagenDataUri; ?>" alt="Mi imagen" style="width: 800px; height: 300px;">
                <p>Informes del auto</p>
                <table border="1">
                    <tr>
                        <th><font size="4">Informe del auto</th>
                        <th><font size="4">Velocidad</th>
                        <th><font size="4">Precio</th>
                    </tr>
                    <tr>
                        <td><font size="4">Se trataba de un modelo fabricado en 9.800 unidades, pensado para homologarlo como Grupo A en el mundial de rallies -mundial que acababan de ganar en 1.987 tanto Lancia como su piloto Kankunen- y del que se pensaba construir al menos 5.000 unidades como requería el Grupo A.</td>
                        <td><font size="4">Gracias al eficaz sistema de tracción, que disponía de sendos diferenciales autoblocantes en ambos ejes, podía acelerar de cero a 100 Km/h en 6,3 segundos y alcanzar una velocidad máxima de 219 Km/h.</td>
                        <td><font size="4">cuyo precio es de 265.000 €.</td>
                    </tr>
                </table>
                <form action="menu_mejo.php" method="get">
                    <input type="submit" name="boton" value="Regresar">
                </form>
            </center>
        </font>
    </font>
</body>
</html>
