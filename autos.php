<!DOCTYPE html>
<html>
<Meta charset="UTF-8">
<head>
    <title>Chatbot - De FR-ss</title>
    <br> 
    <br>
    <br>
    <style>
        /* Estilos CSS para el chat */
        body {
            font-family: Arial, sans-serif;
            background-color: black;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #00FF00
            
        ;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .chat-box {
            height: 300px;
            overflow-y: scroll;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }

        .message {
            background-color: #f5f5f5;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .user-message {
            background-color: #e1f5fe;
        }

        .bot-message {
            background-color: #e8eaf6;
        }

        .input-box {
            display: flex;
            margin-top: 10px;
        }

        .input-box input {
            flex-grow: 1;
            padding: 5px;
        }

        .input-box button {
            padding: 5px 10px;
            background-color: #2196f3;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .button {
      background-color: #999999;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }
    
    /* Animación de brillo */
    .button::before {
      content: "";
      background-color: #00ff00;
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: -100%;
      opacity: 0;
      transition: left 0.3s, opacity 0.3s;
    }
    
    .button:hover::before {
      left: 100%;
      opacity: 1;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Chatbot - De FR-ss</h1>
        <div class="chat-box" id="chatBox"></div>
        <div class="input-box">
            <input type="text" id="userInput" placeholder="Escribe tu pregunta...">
            <button onclick="sendMessage()">Enviar</button>
        </div>
    </div>

    <script>
        // Array de mensajes predefinidos
        var messages = [
            {
                user: false,
                content: "¡Hola! Soy un chatbot especializado en autos deportivos. ¿En qué puedo ayudarte?"
            },
            {
                user: true,
                content: "¿Cuál es el auto deportivo más rápido?"
            },
            {
                user: false,
                content: "El auto deportivo más rápido actualmente es el Bugatti Chiron Super Sport 300+. Alcanza una velocidad máxima de más de 480 km/h. ¿Hay algo más en lo que pueda ayudarte?"
            },
            {
                user: true,
                content: "¿Cuál es el auto deportivo más caro?"
            },
            {
                user: false,
                content: "El auto deportivo más caro del mundo es el Bugatti La Voiture Noire, con un precio de aproximadamente 18 millones de dólares. ¿Hay alguna otra pregunta que te gustaría hacer?"
            },
            {
                user: true,
                content: "¿Cuál es el auto deportivo más vendido?"
            },
            {
                user: false,
                content: "El auto deportivo más vendido en la actualidad es el Ford Mustang. Es un icono de los autos deportivos y ha tenido una gran demanda a lo largo de los años. ¿Hay algo más que te gustaría saber?"
            },
            {
                user: true,
                content: "Cuéntame más sobre el Corvette ZR1 2008"
            },
            {
                user: false,
                content: "El Corvette ZR1 2008 es un poderoso auto deportivo fabricado por Chevrolet. Cuenta con un motor V8 sobrealimentado de 6.2 litros que produce 638 caballos de fuerza. Es conocido por su rendimiento excepcional y su diseño deportivo. ¿Hay algo más en lo que pueda ayudarte?"
            },
            {
                user: true,
                content: "Háblame sobre el Pagani Zonda R"
            },
            {
                user: false,
                content: "El Pagani Zonda R es un exclusivo auto deportivo de edición limitada fabricado por la compañía italiana Pagani. Cuenta con un motor V12 de 6.0 litros que produce hasta 800 caballos de fuerza. Es considerado uno de los autos deportivos más impresionantes y de alto rendimiento. ¿Hay alguna otra pregunta que te gustaría hacer?"
            },
            {
                user: true,
                content: "¿Qué sabes sobre el COPO Camaro 2016?"
            },
            {
                user: false,
                content: "El COPO Camaro 2016 es una versión especial de alto rendimiento del famoso Chevrolet Camaro. Fue diseñado específicamente para carreras en línea recta y cuenta con un motor V8 de competición. Es un auto deportivo poderoso y rápido. ¿Hay algo más que te gustaría saber?"
            },
            {
                user: true,
                content: "Cuéntame sobre el Lamborghini Huracán Coupé"
            },
            {
                user: false,
                content: "El Lamborghini Huracán Coupé es un impresionante auto deportivo fabricado por la marca italiana Lamborghini. Cuenta con un motor V10 de 5.2 litros que produce hasta 631 caballos de fuerza. Su diseño aerodinámico y su rendimiento excepcional lo convierten en un automóvil emocionante de conducir. ¿Hay algo más en lo que pueda ayudarte?"
            },
            {
                user: true,
                content: "Háblame del Lamborghini Aventador"
            },
            {
                user: false,
                content: "El Lamborghini Aventador es un icónico auto deportivo de alta gama de Lamborghini. Cuenta con un motor V12 de 6.5 litros que produce hasta 759 caballos de fuerza. Es conocido por su diseño llamativo y su rendimiento extraordinario. ¿Hay alguna otra pregunta que te gustaría hacer?"
            },
            {
                user: true,
                content: "Gracias por la información"
            },
            {
                user: false,
                content: "De nada. Si tienes más preguntas, no dudes en hacerlas. Estoy aquí para ayudarte."
            }
        ];

        // Función para mostrar los mensajes en el chat
        function displayMessages() {
            var chatBox = document.getElementById("chatBox");
            chatBox.innerHTML = "";

            for (var i = 0; i < messages.length; i++) {
                var message = messages[i];
                var messageClass = message.user ? "user-message" : "bot-message";
                var messageElement = document.createElement("div");
                messageElement.classList.add("message", messageClass);
                messageElement.textContent = message.content;
                chatBox.appendChild(messageElement);
            }

            // Desplazar hacia abajo el chat para mostrar el último mensaje
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        // Función para enviar un mensaje del usuario
        function sendMessage() {
            var userInput = document.getElementById("userInput").value;

            if (userInput.trim() !== "") {
                messages.push({ user: true, content: userInput });
                displayMessages();
                document.getElementById("userInput").value = "";
                setTimeout(sendBotMessage, 500);
            }
        }

        // Función para que el bot envíe una respuesta basada en la similitud de la pregunta
        function sendBotMessage() {
            var lastUserMessage = messages[messages.length - 1].content;
            var response = "";

            // Comprobar la similitud de la pregunta del usuario con las respuestas predefinidas
            if (lastUserMessage.includes("auto deportivo más rápido")) {
                response = "El auto deportivo más rápido actualmente es el Bugatti Chiron Super Sport 300+. Alcanza una velocidad máxima de más de 480 km/h. ¿Hay algo más en lo que pueda ayudarte?";
            } else if (lastUserMessage.includes("Hola")) {
                response = "Hola, ¿En que puedo ayudarte?";
            } else if (lastUserMessage.includes("auto deportivo más caro")) {
                response = "El auto deportivo más caro del mundo es el Bugatti La Voiture Noire, con un precio de aproximadamente 18 millones de dólares. ¿Hay alguna otra pregunta que te gustaría hacer?";
            } else if (lastUserMessage.includes("auto deportivo más vendido")) {
                response = "El auto deportivo más vendido en la actualidad es el Ford Mustang. Es un icono de los autos deportivos y ha tenido una gran demanda a lo largo de los años. ¿Hay algo más que te gustaría saber?";
            } else if (lastUserMessage.includes("corvette zr1 2008")) {
                response = "El Corvette ZR1 2008 es un poderoso auto deportivo fabricado por Chevrolet. Cuenta con un motor V8 sobrealimentado de 6.2 litros que produce 638 caballos de fuerza. Es conocido por su rendimiento excepcional y su diseño deportivo. ¿Hay algo más en lo que pueda ayudarte?";
            } else if (lastUserMessage.includes("aagani zonda R")) {
                response = "El Pagani Zonda R es un exclusivo auto deportivo de edición limitada fabricado por la compañía italiana Pagani. Cuenta con un motor V12 de 6.0 litros que produce hasta 800 caballos de fuerza. Es considerado uno de los autos deportivos más impresionantes y de alto rendimiento. ¿Hay alguna otra pregunta que te gustaría hacer?";
            } else if (lastUserMessage.includes("COPO Camaro 2016")) {
                response = "El COPO Camaro 2016 es una versión especial de alto rendimiento del famoso Chevrolet Camaro. Fue diseñado específicamente para carreras en línea recta y cuenta con un motor V8 de competición. Es un auto deportivo poderoso y rápido. ¿Hay algo más que te gustaría saber?";
            } else if (lastUserMessage.includes("Lamborghini Huracán Coupé")) {
                response = "El Lamborghini Huracán Coupé es un impresionante auto deportivo fabricado por la marca italiana Lamborghini. Cuenta con un motor V10 de 5.2 litros que produce hasta 631 caballos de fuerza. Su diseño aerodinámico y su rendimiento excepcional lo convierten en un automóvil emocionante de conducir. ¿Hay algo más en lo que pueda ayudarte?";
            } else if (lastUserMessage.includes("Lamborghini Aventador")) {
                response = "El Lamborghini Aventador es un icónico auto deportivo de alta gama de Lamborghini. Cuenta con un motor V12 de 6.5 litros que produce hasta 759 caballos de fuerza. Es conocido por su diseño llamativo y su rendimiento extraordinario. ¿Hay alguna otra pregunta que te gustaría hacer?";
                } else if (lastUserMessage.includes("Nissan GTR")) {
                response = "El Nissan GT-R R35 es un automóvil deportivo de alto rendimiento fabricado por Nissan. Se lanzó en 2007 y cuenta con un potente motor V6 twin-turbo de 3.8 litros. Con su sistema de tracción integral y diseño aerodinámico, el GT-R R35 puede acelerar de 0 a 100 km/h en aproximadamente 2.7 segundos. Es reconocido a nivel mundial por su rendimiento excepcional y se ha convertido en un ícono de los autos deportivos. ¿Hay alguna otra pregunta que te gustaría hacer?";

                } else if (lastUserMessage.includes("corvette Z06 C6 R")) {
                response = "El Corvette Z06 C6 R es una versión de alto rendimiento del Chevrolet Corvette C6. Está equipado con un motor V8 de 7.0 litros que produce alrededor de 505 caballos de fuerza. Con una aceleración de 0 a 100 km/h en aproximadamente 3.7 segundos y una velocidad máxima de más de 320 km/h, el Z06 C6 R es un automóvil diseñado para un rendimiento excepcional en la pista. Con un kit aerodinámico, una suspensión ajustada y un chasis rígido, ofrece un manejo preciso y ágil. Además, el Z06 C6 R tiene una destacada historia en las carreras, habiendo participado en competencias internacionales como las 24 Horas de Le Mans. En resumen, el Corvette Z06 C6 R es un automóvil deportivo de alto rendimiento y exclusividad, diseñado para brindar emociones fuertes en la pista. ¿Hay alguna otra pregunta que te gustaría hacer?";
            } else {
                response = "Lo siento, no tengo información sobre ese auto deportivo en particular. ¿Hay algo más en lo que pueda ayudarte?";
            }

            messages.push({ user: false, content: response });
            displayMessages();
        }

        // Mostrar los mensajes predefinidos al cargar la página
        displayMessages();
    </script>
</body>
 <button class="button" onclick="window.location.href='menu_mejo.php'">Regresar al menú</button>
</html>
