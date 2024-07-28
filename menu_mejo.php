<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="file:///F:/proyecto_final_5B/PROTOTIPE_Z/2.5.jpg">
    <title>Menu de FR_ss &reg</title>
    <style>
        
        /* Estilos generales */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('https://gumlet.assettype.com/evoindia%2Fimport%2F2019%2F05%2FJeskoLucerne-StevenWade-3.jpg');
            /* C:\xampp\htdocs\proyect_Delia\lam murcielago.jpg */
            /* https://gumlet.assettype.com/evoindia%2Fimport%2F2019%2F05%2FJeskoLucerne-StevenWade-3.jpg */
            background-size: cover;
            background-position:  ;
        }

        /* Estilos para el menú horizontal */
        .menu {
            background-color: #333;
            color: #00ff00; /* Verde neón */
            text-align: center;
            padding: 10px;
        }

        .menu a {
            color: #00ff00; /* Verde neón */
            text-decoration: none;
            margin-right: 10px;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .menu a:hover {
            background-color: #00ff00; /* Verde neón */
            color: #333;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Estilos para el botón de "Campañas" */
        .campaigns {
            color: #00ff00; /* Verde neón */
            text-decoration: none;
            margin-right: 10px;
            display: inline-block;
            position: relative;
        }

        .campaigns:hover .dropdown-content {
            display: block;
        }

        .campaigns:hover {
            background-color: #ff6e00 ; #ff6e00 /* Naranja neón */
        }
                .intro {
            padding: 20px;
            color: #ffffff; /* Blanco */
            background-color: rgba(0, 0, 0, 0.5); /* Fondo transparente */
            margin-top: 20px;
            text-align: center;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .intro h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .intro p {
            font-size: 16px;
        }
        
     
    </style>
<style>

        /* Estilos para el menú horizontal */
        .menu {
            background-image: url('file:///C:/xampp/htdocs/PROTOTIPE_Z/FR_ss.jpg'); /* Ruta de la imagen que deseas agregar */
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            background-color: #333;
            color: #00ff00; /* Verde neón */
            text-align: center;
            padding: 10px;
        }
    </style>

</style>

</head>
<body bgcolor="orange">
    <div class="menu">
        <div class="dropdown">
            <a href="#">Inicio</a>
            <div class="dropdown-content">
                <a href="Con_roq_fuen.php">Presentación</a>
                <a href="mision_visi.php">Misión y Visión</a>
                <a href="valores.php">Valores</a>
                <a href="catalogo.php">Sistema de apartado</a>
                <a href="reser.php">Reservación</a>
                <a href="noti.php">Noticias</a>
               
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Catálogo</a>
            <div class="dropdown-content">
                <a href="Chevrolet.php">Chevrolet</a>
                <a href="Lamborghini.php">Lamborghini</a>
                <a href="Pagani.php">Pagani</a>
                <a href="Bugatti.php">Bugatti</a>
                <a href="Nissan.php">Nissan</a>
                <a href="Lancia.php">Lancia</a>
                <a href="Pontiac.php">Pontiac</a>
                <a href="Delorean">Delorean</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Promociones</a>
            <div class="dropdown-content">
                <a href="ofertas.php">Ofertas Especiales</a>
                <a href="paquetes_siuu.php">Paquetes</a>
                <a href="formul.php">Tus datos</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Contacto</a>
            <div class="dropdown-content">
                <a href="contactos_2.php">Información de Contacto</a>
                <a href="form_10pre.php">Formulario de Opiniones</a>
                <a href="ubi.php">Ubicación</a>
                <a href="autos.php">Chatbot</a>
            </div>
        </div>
        <div class="dropdown campaigns">
            <a href="#">Campañas</a>
            <div class="dropdown-content">
                <a href="concecuencias_inter.php">No drogas</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Comprar</a>
            <div class="dropdown-content">
                <a href="p8.php">Mostrar Precios y modelos de autos</a>
                <a href="index.php">Comprar Autos</a>
                <a href="LBWK.php">LBWK</a>
                <a href="pista.php">Prueva de manejo</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Administradores</a>
            <div class="dropdown-content">
              <a href="XD.php">Verificación</a>
            </div>
        </div>
    </div>

    <div class="intro">
        <h2 class="slogan">¡La pasión por los autos deportivos en línea!</h2>
        <p> ¡Bienvenido a FR_ss, la casa de los autos deportivos de ensueño!
        En FR_ss, nuestra pasión por la velocidad, la elegancia y el rendimiento se fusiona para brindarte una experiencia inigualable en el mundo de los automóviles deportivos. Nos enorgullece presentarte una selección exclusiva de vehículos de alta gama, cuidadosamente elegidos para satisfacer los deseos de los verdaderos amantes de la conducción.

Desde los icónicos clásicos hasta las últimas joyas de la ingeniería automotriz, en FR_ss encontrarás la combinación perfecta de diseño cautivador, tecnología de vanguardia y un desempeño excepcional que te llevará a nuevas alturas de emociones al volante.

Nuestro compromiso no se limita solo a ofrecerte los automóviles más extraordinarios, sino también a brindarte un servicio personalizado y profesional que se adapte a tus necesidades y supere tus expectativas. Nos enorgullece ser tus aliados en el cumplimiento de tus sueños automovilísticos.

Prepárate para vivir una experiencia única en FR_ss, donde la pasión por los autos deportivos se encuentra con la excelencia en cada detalle. ¡Descubre el poder, la elegancia y la emoción en cada curva con nosotros!

Bienvenido a FR_ss, tu destino definitivo para los amantes de la velocidad y la perfección automotriz.</p>
    </div>

  <style>
        body {
            background-color: black;
        }

        a {
            color: red; /* Verde neón */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <center>
<body>
<br>
  <a href="musica.php" target="_blank">Para mayor comodidad : )</a>
</body>
    </center>
</body>
<br>
<br>
<br>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   
    <style>
        #clock {
            font-size: 24px;
            text-align: center;
        }
        
        #clock span {
            color: #00ffff; /* Color azul neón */
            text-shadow: 0 0 10px #00ffff; /* Efecto de brillo */
        }
    </style>
    <font color="red">
    <script>
        function showTime() {
            var date = new Date(); // Obtiene la fecha y hora actual
            var day = date.getDate(); // Obtiene el día del mes (1-31)
            var month = date.getMonth() + 1; // Obtiene el mes (0-11)
            var year = date.getFullYear(); // Obtiene el año
            var hours = date.getHours(); // Obtiene las horas (0-23)
            var minutes = date.getMinutes(); // Obtiene los minutos (0-59)
            var seconds = date.getSeconds(); // Obtiene los segundos (0-59)

            // Añade un cero inicial a los valores de horas, minutos y segundos si son menores que 10
            hours = (hours < 10) ? "0" + hours : hours;
            minutes = (minutes < 10) ? "0" + minutes : minutes;
            seconds = (seconds < 10) ? "0" + seconds : seconds;

            // Construye la cadena con la hora y el día actual
            var time = hours + ":" + minutes + ":" + seconds;
            var currentDate = day + "/" + month + "/" + year;

            // Actualiza el contenido del elemento con el id "clock" con la hora y el día
            document.getElementById("clock").textContent = time + " - " + currentDate;

            // Actualiza la hora y el día cada segundo (1000 milisegundos)
            setTimeout(showTime, 1000);
        }

        // Llama a la función showTime para iniciar el reloj cuando se carga la página
        window.onload = showTime;
    </script>
</head>
<body>
    <div id="clock">
        <span></span>
    </div>
</body>
</html>

</html>
