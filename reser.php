<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>Reserva de Servicio</title>
  <center>
  <style>
    body {
      background-color: #000000;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
    
    h1 {
      color: #00ff00;
    }
    
    form {
      max-width: 400px;
      margin: 20px auto;
      background-color: #111111;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    label {
      display: block;
      margin-bottom: 10px;
      color: #00ff00;
    }
    
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="date"],
    input[type="time"],
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #00ff00;
      border-radius: 4px;
      background-color: #111111;
      color: #00ff00;
    }
    
    input[type="submit"] {
      background-color: #00ff00;
      color: #000000;
      cursor: pointer;
    }
    
    #reservationStatus {
      text-align: center;
      font-weight: bold;
      margin-top: 20px;
      color: #00ff00;
    }
  </style>
</head>
<body>
  <h1>Reserva de Servicio</h1>
  
  <form id="serviceForm">
    <label for="name">Nombre:</label>
    <input type="text" id="name" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" required>
    
    <label for="phone">Teléfono:</label>
    <input type="tel" id="phone" required>
    
    <label for="date">Fecha:</label>
    <input type="date" id="date" required>
    
    <label for="time">Hora:</label>
    <input type="time" id="time" required>
    
    <input type="submit" value="Reservar">
  </form>

  <div id="reservationStatus"></div>

  <script>
    document.getElementById('serviceForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Evita que se recargue la página al enviar el formulario

      // Obtén los valores ingresados por el usuario
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var phone = document.getElementById('phone').value;
      var date = document.getElementById('date').value;
      var time = document.getElementById('time').value;

      // Aquí puedes agregar tu lógica para enviar la información de la reserva a través de una API o guardarla en una base de datos

      // Mostrar un mensaje de confirmación
      var message = 'Su reserva ha sido realizada con éxito. Nos pondremos en contacto con usted pronto para confirmar los detalles.';
      document.getElementById('reservationStatus').innerText = message;
    });
  </script>
  </center>
</body>
</html>
