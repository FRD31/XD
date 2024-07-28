<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nissan</title>
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
        <font size="4">
            <center>
                <br>
                <p>Bienvenidos al apartado de Nissan</p>
                <img src="https://www.eluniversal.com.mx/resizer/YTEo0z_k4HJSdq2qltbkN6EATh8=/1200x740/cloudfront-us-east-1.images.arcpublishing.com/eluniversal/AI4KZ6VKQFFGJFH5M4TT6DEQUI.jpg" width="400" height="200">
                <p>Los modelos de Nissan que están en esta página son los mejores para ti</p>
                <br>
                <p>NISSAN</p>
                <br>
                <p>Nissan GTR R35</p>
                <?php
                    $rutaImagen = 'C:\xampp\htdocs\proyect_Delia\Nissan_GTR_R35.jpeg';
                    $tipoImagen = pathinfo($rutaImagen, PATHINFO_EXTENSION);
                    $imagenCodificada = base64_encode(file_get_contents($rutaImagen));
                    $imagenDataUri = 'data:image/' . $tipoImagen . ';base64,' . $imagenCodificada;
                ?>
                <img src="<?php echo $imagenDataUri; ?>" alt="Mi imagen" style="width: 700px; height: 300px;">
                <p>Informes del auto</p>
                <table border="1">
                    <tr>
                        <th>Informe del auto</th>
                        <th>Velocidad</th>
                        <th>Precio</th>
                    </tr>
                    <tr>
                        <td>El Nissan GT-R es un automóvil deportivo gran turismo cupé 2+2 con motor delantero montado longitudinalmente y tracción en las cuatro ruedas, ​ producido por el fabricante japonés Nissan, lanzado en Japón el 6 de diciembre de 2007, en Estados Unidos el 7 de julio de 2008 y en el resto del mundo en marzo de 2009.</td>
                        <td>La velocidad máxima del GTR está en 315 km/h con una aceleración de 0 a 100 en 2,7 segundos.</td>
                        <td>$2,791,600.00 precio de este excelente auto.</td>
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
