<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>Pago en linea - FR_ss</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: black;
    }
    
    form {
      width: 400px;
      margin: 0 auto;
    }
    
    label {
      display: block;
      margin-bottom: 10px;
      color: #FFA500; /* Naranja neón */
    }
    
    input[type="text"],
    input[type="password"],
    input[type="number"],
    input[type="email"] {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
      background-color: #00FF00; /* Verde neón */
      color: black;
    }
    
    input[type="submit"] {
      background-color: green;
      color: black;
      padding: 10px;
      border: none;
      cursor: pointer;
    }
    
    .confirmation {
      width: 400px;
      margin: 0 auto;
      text-align: center;
      color: orangered;
    }
  </style>
</head>
<body>
    <font color="#00FF00">
        <center> 
  <h1>Pago en linea - FR_ss</h1>
  <br>
       </center> 
  
  <form id="paymentForm" onsubmit="confirmPurchase(event)">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" required>
    
    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" required>
    
    <label for="tarjeta">Número de tarjeta:</label>
    <input type="password" id="tarjeta" required>
    
    <input type="submit" value="Realizar Pago">
  </form>
  
  <div id="confirmationMessage" class="confirmation" style="display: none;"></div>
  
  <script>
    function confirmPurchase(event) {
      event.preventDefault();
      
      var nombre = document.getElementById("nombre").value;
      var correo = document.getElementById("correo").value;
      var tarjeta = document.getElementById("tarjeta").value;
      
      document.getElementById("paymentForm").style.display = "none";
      
      var confirmationMessage = document.getElementById("confirmationMessage");
      confirmationMessage.style.display = "block";
      confirmationMessage.innerHTML = "Compra realizada. Gracias por darnos la confianza para comprar su auto deportivo.<br><br>";
      confirmationMessage.innerHTML += "Detalles de la compra:<br><br>";
      confirmationMessage.innerHTML += "Nombre: " + nombre + "<br><br>";
      confirmationMessage.innerHTML += "Correo electrónico: " + correo + "<br><br>";
      confirmationMessage.innerHTML += "<br>Número de tarjeta: **** **** **** " + tarjeta.slice(-4);
    }
  </script>
</body>
</html>
