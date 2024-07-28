<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chevrolet</title>
    <style>
        body {
            background-color: black;
            color: #3BFF00;
            font-family: Arial, sans-serif;
        }
        
        center {
            margin-top: 50px;
        }
        
        .chevrolet-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #00ff00; /* Verde neón */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .chevrolet-link:hover {
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
                <p>Bienvenido al apartado Chevrolet</p>
                <img src="https://assets.turbologo.com/blog/es/2021/11/18091049/chevy-958x575.png" width="400" height="200">
                <br>
                <p>Los modelos Chevrolet para ti</p>
                
                <p>CHEVROLET</p>
                <font size="4">
                    <p>Chevrolet Corvette Z06 C6.R</p>
                    <?php
                        $rutaImagen = 'file:///C:/xampp/htdocs/proyect_Delia/Corvette.jpej.jpg';
                        $tipoImagen = pathinfo($rutaImagen, PATHINFO_EXTENSION);
                        $imagenCodificada = base64_encode(file_get_contents($rutaImagen));
                        $imagenDataUri = 'data:image/' . $tipoImagen . ';base64,' . $imagenCodificada;
                    ?>
                    <img src="<?php echo $imagenDataUri; ?>" alt="Mi imagen" style="width: 600px; height: 400px;">
                    <p>Informes del auto</p>
                    <br>
                    <table>
                        <tr>
                            <th>Informe del auto</th>
                            <th>Velocidad</th>
                            <th>Precio</th>
                        </tr>
                        <tr>
                            <td><font size="4">El Corvette GT3 Z06.R es una variante de la competencia del Chevrolet Corvette C6 Z06 y fue construido para competir en la categoría GT de carrera FIA GT3. El carro tiene la mayor parte de la carrocería en fibra de carbono, lo cual lo hace perfecto para sacarlo en pista y calle.</td>
                            <td><font size="4">Velocidad máxima de 314 km/h</td>
                            <td><font size="4">Desde 3,687 millones MXN</td>
                        </tr>
                    </table>
                    
                    <br>
                    <p>Chevrolet Copo Camaro</p>
                    <?php
                        $rutaImagen = 'file:///C:/xampp/htdocs/proyect_Delia/Copo_Camaro.jpeg.jpg';
                        $tipoImagen = pathinfo($rutaImagen, PATHINFO_EXTENSION);
                        $imagenCodificada = base64_encode(file_get_contents($rutaImagen));
                        $imagenDataUri = 'data:image/' . $tipoImagen . ';base64,' . $imagenCodificada;
                    ?>
                    <img src="<?php echo $imagenDataUri; ?>" alt="Mi imagen" style="width: 600px; height: 400px;">
                    <p>Informes del auto</p>
                    <br>
                    <table>
                        <tr>
                            <th>Informe del auto</th>
                            <th>Velocidad</th>
                            <th>Precio</th>
                        </tr>
                        <tr>
                            <td><font size="4">El Camaro COPO de edición limitada está disponible con tres opciones de tren motriz para el 2023: el COPO 427 con motor atmosférico, el 350 supercargado basado en el LSX y un nuevo 632 de bloque grande con inyección de combustible.</td>
                            <td><font size="4">Velocidad máxima de 292 km/h</td>
                            <td><font size="4">$584,000 pesos mexicanos, en subasta, puede llegar a tener un costo de $2.6 millones de pesos</td>
                        </tr>
                    </table>
                    
                    <br>
                    <p>Chevrolet Corvette ZR1 2008</p>
                    <img src="https://files.cults3d.com/uploaders/13746364/illustration-file/cd5c0e8e-71e1-4d8c-ab13-8cce3e40a3ae/008_R2P24.jpg" width="600" height="400">
                    <p>Informes del auto</p>
                    <table>
                        <tr>
                            <th>Informe del auto</th>
                            <th>Velocidad</th>
                            <th>Precio</th>
                        </tr>
                        <tr>
                            <td><font size="4">El Corvette ZR1 del 2008 es un auto deportivo de alto rendimiento con un motor V8 de 6.2 litros y 430 caballos de fuerza. Está disponible en versiones coupé y convertible y puede equiparse con una transmisión manual o automática con levas de cambio.</td>
                            <td><font size="4">Velocidad máxima teórica de 341 km/h (212 mph)</td>
                            <td><font size="4">Precio: 2,729,900 pesos</td>
                        </tr>
                    </table>
                </font>
                <br>
                <br>
                <a href="https://www.chevrolet.com.mx/" class="chevrolet-link">Concesionaria Chevrolet real</a>

                <form action="menu_mejo.php" method="get">
                    <br>
                    <input type="submit" name="boton" value="MENU" style="float: right;">
                </form>
            </center>
        </font>
    </font>
</body>
</html>
