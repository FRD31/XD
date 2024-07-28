<html>
<head>
<meta charset="UTF-8">
<title> Producto agregado </title>
</head>
<body bgcolor="black">
<font color="#3BFF00">
<center>
<br>
<br>
<br>
<br>
<br>
<br>
<font size="6">
<?php
//ESTE INSERTA LOS DATOS EN LA BASE DE DATOS
//recibimos los parametros enviados mediante el post
    $num=$_POST['num'];
    $nom=$_POST['nom'];
    $mar=$_POST['mar'];
    $pre=$_POST['pre'];
    $mod=$_POST['mod'];
    
    //conexion al servidor
        $link= mysqli_connect("localhost","root","") or die ('No se pudo conectar al servidor'.mysqli_error());
    //Conexion con la base de datos
        $db=mysqli_select_db($link,"fr-ss") or die("No se pudo seleccionar la base de datos".mysqli_error());
    //Realizar insert
    $query="INSERT INTO autos(num_serie, nombre, marca, precio, modelo) VALUES ('$num','$nom','$mar','$pre','$mod')";
    //Ejecutar script
    $result= mysqli_query($link, $query) or die ("No se realizo la inserccion".mysqli_error());
    echo"Producto agregado";

?>
<form action="men.php" method"get">
            <br> <Input type="submit" name"boton" value="Regresar" style="float: right;" > </br>
    </form>