<?php
$bsc=$_POST['bsc'];
  
            $link=mysqli_connect("localhost","root","")or die('No se pudo conectaral servidor:'.mysqli_error());
            echo "Conexion exitosa<br>";
            //conexión a la base de datos
            $db=mysqli_select_db($link,"tienda")or die('No se pudo seleccionar la base de datos'.mysqli_error());
            //realizar consulta My SQL
            $query="SELECT*FROM productos WHERE id=".$bsc;
            $result=mysqli_query($link,$query)or die('Consulta fallida'.mysqli_error());
            if(mysqli_num_rows($result)>0)
            {
                echo "Existe el producto <br>";
                $query="DELETE FROM productos WHERE id".$bsc;
                $result=mysqli_query($link,$query)or die('Consulta Fallida'.mysqli_error());
            }else{
                echo "No existe el producto";
            }
            
?>