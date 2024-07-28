<html>
<head>
<meta charset="UTF-8">
<title> Borrar Auto </title>
<style>
    body {
        background-color: #111111;
        color: #00ff00;
        font-family: Arial, sans-serif;
    }

    h1 {
        color: #00ff00;
        text-align: center;
        text-shadow: 2px 2px #000000;
    }

    form {
        text-align: center;
        margin-top: 50px;
    }

    input[type="text"] {
        padding: 5px;
        font-size: 16px;
        border: none;
        background-color: #222222;
        color: #00ff00;
    }

    input[type="submit"] {
        padding: 8px 16px;
        font-size: 18px;
        border: none;
        background-color: #00ff00;
        color: #111111;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #11ff11;
    }

    a {
        color: #00ff00;
        text-decoration: none;
    }

    a:hover {
        color: #11ff11;
    }
</style>
</head>
<body>
    <h1>Borrar Auto de la Base de datos de FR_ss</h1>
    <form method="post" action="borrar_cod.php">
        <p>Ingrese el numero de serie del auto</p>
        <input type="text" name="codigo" >
        <br><br>
        <input type="submit" value="Eliminar">
    </form>
    <br><br>
    
</body>
</html>

