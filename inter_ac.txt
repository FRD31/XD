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

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #00e5ee;
        border: 2px solid #00e5ee;
        border-radius: 10px;
        box-shadow: 0 0 10px #00e5ee;
    }

    h1 {
        font-size: 28px;
        text-align: center;
        margin: 20px 0;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #00e5ee;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #00e5ee;
        color: #000;
        border: 2px solid #00e5ee;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #007399;
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Buscador de productos SCARLET</h1>
        <form action="busc-cod.php" method="POST">
            <label for="codigo">Ingresa el código a buscar:</label>
            <input type="text" name="codigo" id="codigo" required>
            <input type="submit" value="Buscar">
        </form>
    </div>
</body>
</html>
