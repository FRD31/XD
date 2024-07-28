<!DOCTYPE html>
<html>
<head>
    <title>FR ss &reg;</title> 
    <meta charset="utf-8">
    <style>
        body {
            background-color: #000;
            color: #3BFF00;
            font-family: Arial, sans-serif;
        }
        
        center {
            margin-top: 50px;
        }
        
        img {
            display: block;
            margin: 0 auto;
        }
        
        form {
            float: right;
        }
        
        h1 {
            text-align: center;
        }
        
        p {
            text-align: center;
        }
        
        .menu-button {
            background-color: #3BFF00;
            color: #000;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }
        
        .menu-button:hover {
            background-color: #1E8449;
        }
    </style>
</head>
<body bgcolor="#00000">
    <?php
        $rutaImagen = 'C:\xampp\htdocs\PROTOTIPE_Z\proyect_Delia\FR_ss.jpg';
        $tipoImagen = pathinfo($rutaImagen, PATHINFO_EXTENSION);
        $imagenCodificada = base64_encode(file_get_contents($rutaImagen));
        $imagenDataUri = 'data:image/' . $tipoImagen . ';base64,' . $imagenCodificada;
    ?>
    <img src="<?php echo $imagenDataUri; ?>" alt="Mi imagen" style="width: 150px; height: 150px;">
    
    <form action="menu_mejo.php" method="get">
        <input type="submit" name="boton" value="MENU" class="menu-button">
    </form>
    
    <center>
        <p>Bienvenido a FR Super Sport Cars.</p>
        <p>Derechos reservados a Diego Fuentes y Martín Arturo. FR Super Sport Cars &copy; 2023</p>
        <br>
        
        <h1>FR_ss.INC &reg; </h1>
        <br>
        
        <font size="4">
            <p>¿ERES UN AMANTE DE LOS AUTOS DEPORTIVOS? ¿TE HAS IMAGINADO MANEJAR UNO DE ESTOS LUJOSOS Y RÁPIDOS AUTOS? PUES NO SIGAS SOÑANDO, QUE LLEGÓ <font color="#1E8449"><b>FR Super Sport Cars</b></font>
            CON BUENAS OFERTAS PARA TI, VEN Y CONOCE TODOS LOS MODELOS DE AUTOS QUE TENEMOS PARA TI</p> 
            <p>Verifica tus cotizaciones de el auto que vas a comprar, con Super Sport Cars ss, cumple tu sueño de tener un auto deportivo</p> 
            
            <p>el objetivo de este proyecto es poder crear un sitio web en cuál se puede crear un complejo sitio de venta y compra de vehículos deportivos en un buen estado y con un buen mantenimiento</p>
            <p>La visión de este proyecto es programar una compleja página web y muy completa, sobre una agencia de autos, llegando a tener un amplio catálogo de estos autos deportivos, con una base de datos que permita visualizar y mostrar el precio, el modelo, marca, y numero de serie de los autos.</p> 
            <br>
            <center>
                <h3>HOLA TE DOY LA BIENVENIDA A FR Super Sport Cars</h3>
            </center>
            <br>
            <center>
                <p>Conoce los planes de pago que tenemos para ti en esta exclusiva concesionaria de autos deportivos</p>
                
                <img src="https://wallpapercave.com/wp/wp4278070.jpg" width="800" height="500">
                
                <br> <br> 
                <p>EMPRESARIOS</p>
                <br>
                <br>
                
                <?php
                //C:\xampp\htdocs\proyect_Delia\Empresarios.jpeg.jpeg, foto cristian
                //file:///C:/xampp/htdocs/proyect_Delia/em,_FuentesRojas.jpg, foto arturo
                    $rutaImagen = 'C:\xampp\htdocs\proyect_Delia\Empresarios.jpeg.jpeg';
                    $tipoImagen = pathinfo($rutaImagen, PATHINFO_EXTENSION);
                    $imagenCodificada = base64_encode(file_get_contents($rutaImagen));
                    $imagenDataUri = 'data:image/' . $tipoImagen . ';base64,' . $imagenCodificada;
                ?>
                <img src="<?php echo $imagenDataUri; ?>" alt="Mi imagen" style="width: 500px; height: 350px;">
                <br>
                <br>
                <br>
            </center> 
        </font>
    </center>
</body> 
</html>
