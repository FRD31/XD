<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <meta charset="UTF-8">
    <style>
        body {
            background-image: url("https://i.pinimg.com/originals/e1/35/3c/e1353c95c19f46dab1981d63908ca13b.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: #FF0000; /* Cambia el valor a tu color deseado */
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            display: inline-block;
            margin-right: 10px;
        }

        li:last-child {
            margin-right: 0;
        }

        .footer-menu {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
            text-align: center;
        }

        .footer-menu a {
            color: #00ff00; /* Cambia el valor a tu color deseado */
            text-decoration: none;
            margin-right: 10px;
        }
    </style>
    <style>
        .intro {
            color: #3BFF00;
            font-size: 50px;
        }
    </style>
    <style>
        /* Estilos CSS existentes aquí */
        .submenu {
            display: none;
        }

        .parent:hover .submenu {
            display: block;
        }
    </style>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles_men.css">
    <link rel="stylesheet" href="img_styles.css">
</head>
<body>
<center>
    <?php
    // Define las opciones principales del menú
    $menuOptions = array(
        'Pagina principal' => 'Con_roq_fuen.php',
        'Chevrolet' => 'Chevrolet.php',
        'Lamborghini' => 'Lamborghini.php',
        'Bugatti' => 'Bugatti.php',
        'Pagani' => 'Pagani.php',
        'Mblock' => 'drogs_ph.php',
        'Drogas' => 'concecuencias_inter.php',
        'Carrito' => 'index.php',
        'FORMULARIO' => 'form_10pre.php',
        'Solo programadores' => 'inter_veri.php'
    );

    // Define el submenú
    $subMenuOptions = array(
        'Opción 1' => 'opcion1.php',
        'Opción 2' => 'opcion2.php',
        'Opción 3' => 'opcion3.php'
    );

    // Obtiene la página actual
    $currentPage = basename($_SERVER['PHP_SELF']);

    // Crea el menú principal
    echo '<ul>';
    foreach ($menuOptions as $option => $url) {
        // Agrega la clase "active" a la opción actual
        $activeClass = ($currentPage === $url) ? 'active' : '';

        // Verifica si la opción tiene un submenú
        $hasSubMenu = array_key_exists($option, $subMenuOptions);

        // Imprime la opción del menú
        echo '<li class="parent"><a href="' . $url . '" class="' . $activeClass . '">' . $option . '</a>';

        // Imprime el submenú si existe
        if ($hasSubMenu) {
            echo '<ul class="submenu">';
            foreach ($subMenuOptions[$option] as $subOption => $subUrl) {
                echo '<li><a href="' . $subUrl . '">' . $subOption . '</a></li>';
            }
            echo '</ul>';
        }

        echo '</li>';
    }
    echo '</ul>';
    ?>


    <!-- Aquí puedes colocar el contenido de cada página -->
    <p class="intro">MENU</p>
    <div class="intro">
        <h1>¡Bienvenidos a la experiencia definitiva en autos deportivos!</h1>
        <p>En nuestro menú, te invitamos a explorar una emocionante selección de vehículos de alto rendimiento que te dejarán sin aliento. Desde la elegancia y sofisticación de los clásicos deportivos hasta la potencia y velocidad de los modelos más modernos, nuestro menú ofrece una gama completa de opciones para los amantes de la adrenalina y la excelencia en la conducción.</p>
        <p>Sumérgete en un mundo de diseño aerodinámico, motores potentes y prestaciones de alto nivel mientras descubres la pasión que solo los autos deportivos pueden ofrecer. ¡Prepárate para una experiencia de conducción inigualable mientras exploras nuestro apasionante menú de autos deportivos!</p>
    </div>
    <div class="footer-menu">
        <a href="ubi.php">Ubicación</a>
        <a href="#">Contacto</a>
        <a href="#">Acerca de</a>
    </div>
    <script>
        // Agrega funcionalidad para mostrar/ocultar el submenú
        var parentItems = document.getElementsByClassName('parent');

        for (var i = 0; i < parentItems.length; i++) {
            parentItems[i].addEventListener('mouseover', function() {
                this.querySelector('.submenu').style.display = 'block';
            });

            parentItems[i].addEventListener('mouseout', function() {
                this.querySelector('.submenu').style.display = 'none';
            });
        }
    </script>
</center>
</body>
</html>
