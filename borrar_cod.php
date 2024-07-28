<html>
<head>
<meta charset="UTF-8">
<style>
    body {
        background-color: #111111;
        color: #00ff00;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    h1 {
        color: #00ff00;
        text-align: center;
        text-shadow: 2px 2px #000000;
        margin-top: 50px;
    }

    table {
        margin: 0 auto;
        border-collapse: collapse;
    }

    table td {
        padding: 10px;
        text-align: center;
    }

    table th {
        padding: 10px;
        text-align: center;
        background-color: #222222;
        color: #00ff00;
    }

    .success {
        color: #11ff11;
        font-weight: bold;
    }

    .error {
        color: #ff0000;
        font-weight: bold;
    }

    a {
        color: #00ff00;
        text-decoration: none;
        display: block;
        text-align: center;
        font-size: 18px;
        margin-top: 20px;
    }

    a:hover {
        color: #11ff11;
    }

    .button-container {
        text-align: center;
        margin-top: 20px;
    }

    .button-container input[type="submit"] {
        padding: 8px 16px;
        font-size: 18px;
        border: none;
        background-color: #00ff00;
        color: #111111;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .button-container input[type="submit"]:hover {
        background-color: #11ff11;
    }
</style>
</head>
<body>
    <h1>Borrar Auto de FR_ss</h1>
    <table border="2">
    <?php
    if(isset($_POST['codigo'])){
        $codigo = $_POST['codigo'];
        
        // Conexion con el servidor 
        $link = mysqli_connect("localhost", "root", "") or die ('No se pudo conectar con el servidor: '.mysqli_error());
        
        // Conexion con la base de datos
        $db = mysqli_select_db($link, "fr-ss") or die("No se pudo seleccionar la base de datos".mysqli_error());
        
        // Realizar una consulta MySQL
        $query = "SELECT * FROM autos WHERE num_serie = '" . mysqli_real_escape_string($link, $codigo) . "'";
        $result = mysqli_query($link, $query) or die ("Consulta fallida: ".mysqli_error());
        
        if (mysqli_num_rows($result) > 0) {
            echo '<tr><th>Num_serie</th><th>Marca</th><th>Precio</th><td>Modelo</th></tr>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>'.$row['num_serie'].'</td>';
                echo '<td>'.$row['marca'].'</td>';
                echo '<td>'.$row['precio'].'</td>';
                echo '<td>'.$row['modelo'].'</td>';
                echo '</tr>';
            }
            
            echo '<tr><td colspan="3" class="success">El auto ha sido eliminado.</td></tr>';
            
            $query1 = "DELETE FROM autos WHERE num_serie = '" . mysqli_real_escape_string($link, $codigo) . "'";
            $result1 = mysqli_query($link, $query1) or die ("Consulta fallida: ".mysqli_error());
        } else {
            echo '<tr><td colspan="3" class="error">No existe ese auto.</td></tr>';
        }
        
        // Cerrar conexión
        mysqli_close($link);
    }
    ?>
    </table>
    <div class="button-container">
        <form action="men.php" method="get">
            <input type="submit" name="boton" value="MENU">
        </form>
    </div>
</body>
</html>
