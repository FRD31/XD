<!DOCTYPE html>
<html>
<head>
    <Meta charset="UTF-8">
  <title>Chatbot</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: black;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 400px;
      margin: 50px auto;
      background-color: lawngreen;
      border: 1px solid deepskyblue;
      border-radius: 5px;
      overflow: hidden;
    }

    .chatbox {
      height: 400px;
      padding: 10px;
      overflow-y: scroll;
    }

    .message {
      margin-bottom: 10px;
    }

    .message-user {
      color: orangered;
    }

    .message-bot {
      color: darkblue;
    }

    .user-input {
      display: block;
      width: 100%;
      padding: 10px;
      border: none;
      border-top: 1px solid darkblue;
      outline: none;
      box-sizing: border-box;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="chatbox" id="chatbox"></div>
    <input type="text" class="user-input" id="userInput" placeholder="Escribe un mensaje..." onkeydown="sendMessage(event)">
  </div>
  
  <script>
  //CReado por Diego Fuentes, Black :)
    var chatbotResponses = {
      "Hola": "¡Hola! ¿En qué puedo ayudarte?",
      "Cómo estás": "Estoy programado para responder preguntas, así que estoy bien, gracias por preguntar, en que te puedo ayudar?",
      "Adiós": "¡Hasta luego! Si tienes más preguntas, no dudes en volver.",
      
      "Gracias": "De nada. Estoy aquí para ayudar.",
      
     
    };

    function sendMessage(event) {
      if (event.keyCode === 13) { // 13 es el código de tecla para "Enter"
        var userInput = document.getElementById("userInput");
        var userMessage = userInput.value;

        displayMessage("Tú: " + userMessage, "message-user");

        if (userMessage in chatbotResponses) {
          var botMessage = chatbotResponses[userMessage];
          displayMessage("Chatbot: " + botMessage, "message-bot");
        } else {
          displayMessage("Chatbot: Lo siento, no entiendo tu pregunta.", "message-bot");
        }

        userInput.value = ""; // Limpiar el campo de entrada después de enviar el mensaje
      }
    }

    function displayMessage(message, className) {
      var chatbox = document.getElementById("chatbox");
      var messageElement = document.createElement("div");
      messageElement.className = "message " + className;
      messageElement.textContent = message;
      chatbox.appendChild(messageElement);
      chatbox.scrollTop = chatbox.scrollHeight; // Desplazarse al final del chatbox
    }
  </script>
</body>
</html>
