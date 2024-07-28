
<?php 
session_start(); 
if(isset($_GET['page'])){ 
     $pages=array("productos", "cart"); 
       if(in_array($_GET['page'], $pages)) { 
         $_page=$_GET['page']; 
     }else{  
          $_page="productos"; 
     }   
  }else{ 
     $_page="productos";  
  } 
?> 
<!DOCTYPE html > 
<html > 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <link rel="stylesheet" href="HojaEstilos.css" /> 
    <title>Carrito de compras</title>
    <style>
        input[type="submit"] {
            padding: 8px 16px;
            background-color: RED;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: green;
        }
        </style>
</head> 
<body bgcolor="black"> 
<font color="#3BFF00">
    <div id="contenedor"> 
        <div id="principal"> 
            <?php require($_page.".php"); ?>
        </div>
        <div id="barra">
        </div>
    </div>
    <h1>Carrito</h1> 
    <?php 
        if(isset($_SESSION['cart'])){ 
            $link = mysqli_connect("localhost", "root", "") or die('No se pudo conectar: ' . mysqli_error());
            $db= mysqli_select_db($link, "fr-ss") or die("No se pudo seleccionar la base de datos".mysqli_error());
            $sql="SELECT * FROM autos WHERE num_serie IN ("; 
            foreach($_SESSION['cart'] as $codigo => $value) { 
                $sql.=$codigo.","; 
            } 
            $sql=substr($sql, 0, -1).") ORDER BY nombre ASC"; 
            $query=mysqli_query($link,$sql); 
            while($row = mysqli_fetch_array($query)){   
    ?> 
            <p><?php echo $row['nombre'] ?> x <?php echo $_SESSION['cart'][$row['num_serie']]['cantidad'] ?></p> 
    <?php     
            } 
    ?> 
        <hr color="#3BFF00" /> <a href="index.php?page=cart">Ir al carrito</a> 
    <?php      
        }else{  
            echo "<p>Carro Vacío. Agrega productos por favor.</p>"; 
         } 
    ?>
    <center>
    <form action="Pago en linea - fr_ss.php" method"get">
            <br> <Input type="submit" name"boton" value="Pagar en linea" style="float: ;" > </br>
    </form>
        </center>
</body> 
<form action="menu_mejo.php" method"get">
            <br> <Input type="submit" name"boton" value="Regresar" style="float: right;" > </br>
    </form>
</html>