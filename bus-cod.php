
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Buscar</title>
<style>
    body {
        background-image: url('https://i.pinimg.com/originals/64/a0/c7/64a0c7e67e94e682e8ea78ffc5cbab0f.gif');
        background-color: #000; 
        background-size: cover;
        color: #00e5ee; 
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    h1 {
        font-size: 28px;
        text-align: center;
        margin: 20px 0;
    }

    table {
        border-collapse: collapse;
        width: 65%;
        margin: 20px auto;
        animation: glowing-table 1s infinite;
        border: 2px solid #00e5ee; 
    }

    th, td {
        border: 1px solid #00e5ee; 
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #00e5ee;
        color: #000; 
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #333;
    }

    a {
        color: #00e5ee;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    @keyframes glowing-table {
        0% { box-shadow: 0 0 5px #00e5ee; }
        50% { box-shadow: 0 0 20px #00e5ee; }
        100% { box-shadow: 0 0 5px #00e5ee; }
    }
</style>
</head>
<body>
   <h1>Buscador de productos de FR_ss</h1>
    <table>
        <?php
        $codigo = $_POST['codigo'];
        
        // Conexión con el servidor 
        $link = mysqli_connect("localhost", "root", "") or die ('No se pudo conectar con el servidor: ' . mysqli_error());
        
        // Conexión con la base de datos
        $db = mysqli_select_db($link, "scarlet") or die("No se pudo seleccionar la base de datos: " . mysqli_error());
        
        // Realizar una consulta MySQL
        $query = "SELECT * FROM celulares WHERE num_serie=" . $codigo;
        $result = mysqli_query($link, $query) or die ("Consulta fallida: " . mysqli_error());
        
        if (mysqli_num_rows($result) > 0) {
            echo "<tr>
                <th>Nummero</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Precio</th>
            </tr>";
            
            while ($line = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>" . $line['num_serie'] . "</td>
                    <td>" . $line['nombre'] . "</td>
                    <td>" . $line['marca'] . "</td>
                    <td>" . $line['modelo'] . "</td>
                    <td>$" . $line['precio'] . "</td>
                </tr>";
            }
        } else {
            echo "<tr>
                <td colspan='5'>No se encontraron resultados.</td>
            </tr>";
        }
        
        // Liberar resultados
        mysqli_free_result($result);
        
        // Cerrar conexión
        mysqli_close($link);
        ?>
    </table>
    <br><br>
    <center>
    <a href="menu_log.php">Menú</a>
    </center>
</body>
</html>

