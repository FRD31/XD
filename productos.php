<html>
<head> 
<title> FR_ss </title>
<meta charset="UTF-8">
<style>
    th, td {
        color: #3BFF00;
    }
    a {
        color: yellow;
    }
</style>
<style>
    body {
        background-color: black;
    }
</style>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>
<link rel="stylesheet" href="css.css" /> 
</head>
<body >

<?php 
  if(isset($_GET['action']) && $_GET['action']=="add"){ 
    $codigo=intval($_GET['num_serie']); 
    if(isset($_SESSION['cart'][$codigo])){ 
        $_SESSION['cart'][$codigo]['cantidad']++; 
    }
    else{ 
        $link = mysqli_connect("localhost", "root", "") or die('No se pudo conectar: ' . mysqli_error());
        $db= mysqli_select_db($link, "fr-ss") or die("No se pudo seleccionar la base de datos".mysqli_error());
        $sql_s="SELECT * FROM autos WHERE num_serie={$codigo}"; 
        $query_s=mysqli_query($link, $sql_s);
        if(mysqli_num_rows($query_s)!=0){ 
            $row_s=mysqli_fetch_array($query_s); 
            $_SESSION['cart'][$row_s['num_serie']]=array( "cantidad" => 1, "precio" => $row_s['precio'] ); 
        }
        else{ 
            $message="Codigo de producto no válido"; 
        }       
    }  
}      
?> 
    <h1>Lista de productos</h1> 
    <?php 
        if(isset($message)){ 
            echo "<h2>$message</h2>"; 
        } 
    ?> 
    <table> 
        <tr> 
            <th> <font color="#3BFF00">Nombre</th> 
            <th> <font color="#3BFF00">Marca</th>
            <th> <font color="#3BFF00">Modelo</th> 
            <th> <font color="#3BFF00">Precio</th> 
            <th> <font color="#3BFF00">Accion</th> 
        </tr> 
          
        <?php 
          
            $link = mysqli_connect("localhost", "root", "") or die('No se pudo conectar: ' . mysqli_error());
            $db= mysqli_select_db($link, "fr-ss") or die("No se pudo seleccionar la base de datos".mysqli_error());
            $sql="SELECT * FROM autos ORDER BY nombre ASC"; 
            $query=mysqli_query($link, $sql) or die("Consulta fallida: ". mysqli_error());
              
            while ($row=mysqli_fetch_array($query)) { 
                  
        ?> 
            <tr> 
                <td><font color="#3BFF00"><?php echo $row['nombre'] ?></td> 
                <td><font color="#3BFF00"><?php echo $row['marca'] ?></td>
                <td><font color="#3BFF00"><?php echo $row['modelo'] ?></td> 
                <td><font color="#3BFF00"><?php echo $row['precio'] ?>$</td>
              
                <td><a href="index.php?page=productos&action=add&num_serie=<?php echo $row['num_serie'] ?>"><font color="yellow">Agregar al carrito</a></td> 
            </tr> 
        <?php 
                  
            } 
          
        ?> 
          
    </table>
    
    </body>
    </html>