<!DOCTYPE html>
<html>
<head>
    <title>FR_ss</title>
    <meta charset="UTF-8">
    <style>
        body {
            background-color: black;
            color: #3BFF00;
            font-family: Arial, sans-serif;
        }
        
        h1 {
            text-align: center;
            border-bottom: 2px solid #39FF14;
            padding-bottom: 10px;
        }
        
        form {
            margin: 0 auto;
            width: 300px;
        }
        
        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: none;
            background-color: #333333;
            color: #3BFF00;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: none;
            background-color: #3BFF00;
            color: black;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>FR_ss</h1>
    <br>
    <form action="cod_base_insert.php" method="post" enctype="multipart/form-data">
        <label for="num_serie">Num_serie:</label>
        <input type="text" name="num" id="num_serie"><br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nom" id="nombre"><br>
        <label for="marca">Marca:</label>
        <input type="text" name="mar" id="marca"><br>
        <label for="precio">Precio:</label>
        <input type="text" name="pre" id="precio"><br>
        <label for="modelo">Modelo:</label>
        <input type="text" name="mod" id="modelo"><br>
        <form action="cod_base_insert.php" method"get">
            <br> <Input type="submit" name"boton" value="Agregar" style="float: right;" > </br>
    </form>
    <br>
    <br>
    <hr color="#3BFF00">
</body>
<form action="men.php" method"get">
            <br> <Input type="submit" name"boton" value="Regresar" style="float: left;" > </br>
    </form>
</html>
