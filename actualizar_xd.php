<meta charset="UTF-8">
<body bgcolor="black">
<font color="#00ff00">
<center>
<br>
<br>
<br>
<br>
<br>
<font size="6">
<?php
$be=$_POST['ns'];
$np=$_POST['np'];
    //Conexion con el servidor
$link= mysqli_connect("localhost" , "root" , "")or die("No se encontro el Servidor".mysqli_error());
    //Conexion con base de datos
$db= mysqli_select_db($link, "fr-ss")or die("No se Encontro el Servidor".mysqli_error());
    //Buscar
$query= "SELECT * From autos WHERE num_serie= ".$be; 
    //ejecutar quers
$result= mysqli_query($link,$query)or die('Consulta Fallida'.mysqli_error());

if(mysqli_num_rows($result)>0)
{
    echo "Existe el producto <br>";
    if (is_numeric($np)) {
        $line=mysqli_fetch_assoc($result);
        $query1= "UPDATE autos SET precio=".$np." WHERE num_serie=".$be;
        $result1= mysqli_query($link, $query1)or die("No Pudo realizarse la Operacion".mysqli_error());
        echo "Operacion Exitosa";
        } else {
            echo "Precio no valido favor de ingresar un monto numerico";
        }
    
       
}
else {
    echo "No existe el producto";
}
?>
  <form action="men.php" method"get">
            <br> <Input type="submit" name"boton" value="Regresar" style="float: right;" > </br>
    </form>