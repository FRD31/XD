<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Precio y Modelos</title>
    <style>
        body {
            background-color: black;
            color: #3BFF00;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #3BFF00;
        }

        hr {
            border-color: #3BFF00;
        }

        table {
            border: 1px solid #3BFF00;
            background-color: #3BFF00;
            margin: 0 auto;
            color: black; /* Cambio de color de las letras a negro */
        }

        table td {
            padding: 5px;
        }

        input[type="submit"] {
            padding: 8px 16px;
            background-color: #ff6e00;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ff8e3b;
        }
    </style>
</head>
<body>
    <h1>FR_ss</h1>
    <hr>
    <br>
    <br>
    <table border="1">
        <tr>
            <td>Num_serie</td>
            <td>Nombre</td>
            <td>Marca</td>
            <td>Precio</td>
            <td>Modelo</td>
        </tr>
        <?php
        //Conexion al servidor
        //BASE DE DATOS
        $link= mysqli_connect("localhost","root","") or die ('No se pudo conectar al servidor'.mysqli_error());
        //Conexion con la base de datos
        $db=mysqli_select_db($link,"fr-ss") or die("No se pudo seleccionar la base de datos".mysqli_error());
        //realizar una consulta MySQL
        $query="SELECT * FROM autos";
        $result=mysqli_query($link,$query) or die ("consulta Fallida".mysqli_error());
        while($line=mysqli_fetch_assoc($result)){
            echo "<tr>
                <td>".$line['num_serie']."</td>
                <td>".$line['nombre']."</td>
                <td>".$line['marca']."</td>
                <td>".$line['precio']."</td>
                <td>".$line['modelo']."</td>
                <tr>";
        }
        //liberar resultados
        mysqli_free_result($result);
        //cerrar conexion
        mysqli_close($link);
        ?>
    </table>
    <br>
    <form action="men.php" method="get">
        <input type="submit" name="boton" value="Regresar" style="float: right;">
    </form>
</body>
</html>
