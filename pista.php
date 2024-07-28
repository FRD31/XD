<!DOCTYPE html>
<html>

<head>
    <title>Pista de Prueba de Manejo - Experiencia Emocionante</title>
    <style>
        /* Estilos CSS para el canvas */
        canvas {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body bgcolor="black">
<font color="red">
    <h1>Pista de Prueba de Manejo - Experiencia Emocionante</h1>
    <br>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>
    <script>
        // Variables globales
        var car;
        var trackWidth = 600;
        var trackHeight = 400;
        var roadOffset = 0;
        var roadSpeed = 2;
        var houseWidth = 100;
        var houseHeight = 200;
        var neonGreenColor;
        var neonYellowColor;
        var neonOrangeColor;
        var colorIndex = 0;
        var colorPalette = [
            [0, 255, 0], // Verde neón
            [255, 255, 0], // Amarillo neón
            [255, 165, 0] // Naranja neón
        ];

        // Configuración inicial
        function setup() {
            createCanvas(trackWidth, trackHeight);
            car = new Car();
            neonGreenColor = colorPalette[0];
            neonYellowColor = colorPalette[1];
            neonOrangeColor = colorPalette[2];
        }

        // Dibuja el canvas
        function draw() {
            background(0); // Fondo negro

            // Actualiza y muestra el fondo de la carretera
            updateRoad();

            // Dibuja la pista
            drawTrack();

            // Dibuja las casas a los lados de la pista
            drawHouses();

            // Actualiza y muestra el auto
            car.update();
            car.display();
        }

        // Actualiza el fondo de la carretera
        function updateRoad() {
            roadOffset += roadSpeed;
            if (roadOffset > trackHeight) {
                roadOffset = 0;
            }
        }

        // Dibuja la pista
        function drawTrack() {
            // Dibuja el fondo de la pista
            fill(0);
            rect(0, 0, trackWidth, trackHeight);

            // Dibuja las líneas del medio de la pista
            stroke(neonGreenColor); // Color verde neón
            strokeWeight(5);
            for (var y = -roadOffset; y < trackHeight; y += 20) {
                line(trackWidth / 2, y, trackWidth / 2, y + 10);
            }
        }

        // Dibuja las casas a los lados de la pista
        function drawHouses() {
            // Cambia de color cada 60 frames
            if (frameCount % 60 === 0) {
                colorIndex = (colorIndex + 1) % colorPalette.length;
                neonGreenColor = colorPalette[colorIndex];
                neonYellowColor = colorPalette[(colorIndex + 1) % colorPalette.length];
                neonOrangeColor = colorPalette[(colorIndex + 2) % colorPalette.length];
            }

            // Dibuja las casas a la izquierda
            fill(neonYellowColor); // Color amarillo neón
            rect(0, 0, houseWidth, trackHeight);
            fill(neonGreenColor); // Color verde neón
            rect(0, trackHeight - houseHeight, houseWidth, houseHeight);

            // Dibuja las casas a la derecha
            fill(neonOrangeColor); // Color naranja neón
            rect(trackWidth - houseWidth, 0, houseWidth, trackHeight);
            fill(neonGreenColor); // Color verde neón
            rect(trackWidth - houseWidth, trackHeight - houseHeight, houseWidth, houseHeight);
        }

        // Clase Car
        function Car() {
            this.x = trackWidth / 2;
            this.y = trackHeight - 100;
            this.speed = 3;

            this.update = function() {
                // Mueve el auto hacia la izquierda con la tecla de flecha hacia la izquierda (keyCode: 37)
                if (keyIsDown(LEFT_ARROW)) {
                    this.x -= this.speed;
                }

                // Mueve el auto hacia la derecha con la tecla de flecha hacia la derecha (keyCode: 39)
                if (keyIsDown(RIGHT_ARROW)) {
                    this.x += this.speed;
                }

                // Limita la posición del auto dentro de los límites de la pista
                this.x = constrain(this.x, houseWidth, trackWidth - houseWidth);
            }

            this.display = function() {
                // Dibuja el recuadro en color naranja neón
                noStroke();
                fill(neonOrangeColor); // Color naranja neón
                rect(this.x - 20, this.y - 40, 40, 80);
            }
        }
    </script>
</body>
<br>
</html>
