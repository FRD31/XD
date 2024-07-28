<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ofertas Especiales</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #fff;
        }

        .oferta {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .camaro {
            background-color: rgba(255, 110, 0, 0.8);
        }

        .corvette {
            background-color: rgba(0, 255, 0, 0.8);
        }

        .lamborghini {
            background-color: rgba(0, 170, 255, 0.8);
        }

        .modelo {
            font-size: 24px;
            margin-bottom: 10px;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }

        .descuento {
            font-size: 18px;
            margin-bottom: 5px;
            color: #000;
        }

        .descripcion {
    color: #fff;
        }
    </style>
</head>
<body>
    <h1>Ofertas Especiales</h1>

    <?php
    // Código PHP para mostrar las ofertas especiales
    $ofertas = array(
        array(
            'modelo' => 'Chevrolet Camaro',
            'descuento' => 5000,
            'descripcion' => 'Descuento de $5000 en el Chevrolet Camaro SS.',
        ),
        array(
            'modelo' => 'Chevrolet Corvette zr1',
            'descuento' => 4000,
            'descripcion' => 'Descuento de $4000 en el Chevrolet Corvette zr1.',
        ),
        array(
            'modelo' => 'Lamborghini huracan performante coupe',
            'descuento' => 6000,
            'descripcion' => 'Descuento de $6000 en el Lamborghini huracan performante coupe.',
        ),
    );

    foreach ($ofertas as $oferta) {
        echo '<div class="oferta';
        if ($oferta['modelo'] === 'Chevrolet Camaro') {
            echo ' camaro';
        } elseif ($oferta['modelo'] === 'Chevrolet Corvette zr1') {
            echo ' corvette';
        } elseif ($oferta['modelo'] === 'Lamborghini huracan performante coupe') {
            echo ' lamborghini';
        }
        echo '">';
        echo '<h3 class="modelo">' . $oferta['modelo'] . '</h3>';
        echo '<p class="descuento"><strong>Descuento: $' . $oferta['descuento'] . '</strong></p>';
        echo '<p class="descripcion">' . $oferta['descripcion'] . '</p>';
        echo '</div>';
    }
    ?>
</body>
  <form action="menu_mejo.php" method"get">
             <br> <Input type="submit" name"boton" value="MENU" style="float: right;" > </br>
</form>
</html>
