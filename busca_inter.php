<html>
<head>
    <meta charset="UTF-8">
    <title>Buscar</title>
    <style>
        body {
            background-color: black;
            color: #39ff14;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        h1 {
            font-size: 28px;
            text-align: center;
            margin: 20px 0;
            animation: glowing 1s infinite;
        }
        
        form {
            text-align: center;
            margin-top: 20px;
            border: 2px solid #39ff14;
            padding: 20px;
            border-radius: 10px;
            animation: glowing-border 1s infinite;
        }
        
        label {
            display: inline-block;
            width: 250px;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        input[type="text"] {
            width: 200px;
            padding: 5px;
            font-size: 16px;
            border-radius: 5px;
            border: 2px solid #39ff14;
            color: #39ff14;
            background-color: black;
            animation: glowing-border 1s infinite;
        }
        
        input[type="submit"] {
            background-color: #39ff14;
            color: black;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            animation: glowing 1s infinite;
        }
        
        a {
            color: #39ff14;
            text-decoration: none;
            animation: glowing 1s infinite;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        @keyframes glowing {
            0% { text-shadow: 0 0 5px #39ff14; }
            50% { text-shadow: 0 0 20px #39ff14; }
            100% { text-shadow: 0 0 5px #39ff14; }
        }
        
        @keyframes glowing-border {
            0% { border-color: #39ff14; box-shadow: 0 0 5px #39ff14; }
            50% { border-color: #1aff00; box-shadow: 0 0 20px #1aff00; }
            100% { border-color: #39ff14; box-shadow: 0 0 5px #39ff14; }
        }
    </style>
</head>
<center>
<body>
    <h1>Buscar en FR-ss</h1>
    <form method="post" action="bus-cod.php">
        <label for="codigo">Ingrese el Número de Serie del auto:</label><br>
        <input type="text" name="codigo" id="codigo" required><br><br>
        <input type="submit" value="Buscar" class="glowing-button">
    </form>
    <br><br>
    <a href="menu_mejo.php">Menú</a>
</body>
</center>
</html>
