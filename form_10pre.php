<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de opiniones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url('https://w0.peakpx.com/wallpaper/132/373/HD-wallpaper-corvette-auto-autos-deportivo-forza-musclecar-red-supercar-z06.jpg'); /* Reemplazar la ruta de imagen */
            background-size: cover; /* Ajustar la imagen de fondo con un center */
            background-position: center ;
            background-repeat: no-repeat;
        }

        h1 {
            text-align: center;
            color: #000; /* Texto blanco */
        }

        form {
            background-color: rgba(255, 165, 0, 0.8); /* Color de formulario naranja neón con transparencia */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #FFF; /* Texto blanco */
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #39FF14; /* Color de botón verde neón */
            color: #000; /* Color de letra del botón en negro */
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #32CD32;
        }
    </style>
</head>
<body>
    <h1>Formulario de opiniones</h1>
    <form id="formulario">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" required><br><br>

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" required><br><br>

        <label for="pregunta1">Pregunta 1: ¿Como te pareció la experiencia de nuestra tienda?</label>
        <input type="text" id="pregunta1" required><br><br>

        <label for="pregunta2">Pregunta 2: ¿Te gustaron todos los modelos de super autos que tenemos?</label>
        <input type="text" id="pregunta2" required><br><br>

        <label for="pregunta3">Pregunta 3: ¿Te parecio justo nuestros precios? </label>
        <input type="text" id="pregunta3" required><br><br>

        <label for="pregunta4">Pregunta 4: ¿Tuviste algún problema con la tienda? </label>
        <input type="text" id="pregunta4" required><br><br>

        <label for="pregunta5">Pregunta 5: ¿Te gustaría volver a visitar nuestra tienda? </label>
        <input type="text" id="pregunta5" required><br><br>

        <label for="pregunta6">Pregunta 6: ¿Recomendarías esta tienda a tus amigos?</label>
        <input type="text" id="pregunta6" required><br><br>

        <label for="pregunta7">Pregunta 7: ¿Que modelo piensas comprar? </label>
        <input type="text" id="pregunta7" required><br><br>

        <label for="pregunta8">Pregunta 8: ¿Que modelos te gustaría comprar en el futuro? </label>
        <input type="text" id="pregunta8" required><br><br>

        <label for="pregunta9">Pregunta 9: ¿Cuantas estrellas le das a nuestra tienda? </label>
        <input type="text" id="pregunta9" required><br><br>

        <label for="pregunta10">Pregunta 10: ¿Que modelo quieres que agreguemos a nuestra página en el futuro?</label>
        <input type="text" id="pregunta10" required><br><br>

        <input type="submit" value="Enviar respuestas">
    </form>

    <script>
        document.getElementById('formulario').addEventListener('submit', function(event) {
            event.preventDefault();

            // Obtener los valores de los campos del formulario
            var nombre = document.getElementById('nombre').value;
            var correo = document.getElementById('correo').value;
            var respuestas = [];

            // Recorrer las preguntas y obtener las respuestas
            for (var i = 1; i <= 10; i++) {
                var pregunta = 'pregunta' + i;
                var respuesta = document.getElementById(pregunta).value;
                respuestas.push("Pregunta " + i + ": " + respuesta);
            }

            // Construir el mensaje
            var mensaje = "Respuestas del cuestionario:\n\n";
            mensaje += "Nombre: " + nombre + "\n";
            mensaje += "Correo electrónico: " + correo + "\n\n";
            mensaje += respuestas.join("\n");

            // Enviar el correo electrónico (simulación en este ejemplo)
            alert('Se enviarán las siguientes respuestas:\n\n' + mensaje);
            //<a href="Maito:fuentes.reyna.diego@gmail.com"> se envia el correo </a>
            // Restablecer el formulario
            document.getElementById('formulario').reset();
        });
    </script>
</body>
<form action="menu_mejo.php" method"get">
            <br> <Input type="submit" name"boton" value="Regresar" style="float: right;" > </br>
    </form>
</html>