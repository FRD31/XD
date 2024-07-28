<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>Concesionaria FR_ss - Apartado de Autos Deportivos</title>
  <style>

    body {
      font-family: Arial, sans-serif;
      background-color: black;
      color: #00ff00;
    }
    
    h1 {
      text-align: center;
      margin-top: 50px;
    }
    
    .car-list {
      list-style-type: none;
      padding: 0;
    }
    
    .car-item {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      background-color: #222222;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 255, 0, 0.3);
      transition: transform 0.3s;
    }
    
    .car-item:hover {
      transform: scale(1.02);
    }
    
    .car-image {
      width: 150px;
      margin-right: 20px;
    }
    
    .car-details {
      flex: 1;
    }
    
    .car-name {
      font-weight: bold;
      font-size: 18px;
      margin-bottom: 5px;
    }
    
    .car-price {
      font-size: 14px;
      margin-bottom: 10px;
    }
    
    .car-booking {
      display: flex;
      align-items: center;
    }
    
    .booking-input {
      margin-right: 10px;
      padding: 5px;
      border-radius: 3px;
      border: 1px solid #00ff00;
    }
    
    .booking-button {
      background-color: #00ff00;
      color: black;
      border: none;
      padding: 8px 16px;
      font-size: 14px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    
    .booking-button:hover {
      background-color: #55ff55;
    }
  </style>
  <script>
    function reserveCar() {
      var input = event.target.parentNode.querySelector(".booking-input");
      var amount = input.value;
      
      if (amount < 2000) {
        alert("El monto mínimo para apartar es de $2000");
        return;
      }
      
      alert("¡Buena elección! Gracias por su preferencia hacia FR-ss.");
      input.value = "";
    }
  </script>
</head>
<body>
  <h1>Concesionaria FR_ss</h1>
  
  <ul class="car-list">
    <li class="car-item">
      <img src="car1.jpg" alt="Car 1" class="car-image">
      <div class="car-details">
        <div class="car-name">Chevrolet Corvette zr1</div>
        <div class="car-price">$5000</div>
        <div class="car-booking">
          <input type="number" min="2000" step="100" class="booking-input" placeholder="Monto a apartar">
          <button class="booking-button" onclick="reserveCar()">Apartar</button>
        </div>
      </div>
    </li>
    <li class="car-item">
      <img src="car2.jpg" alt="Car 2" class="car-image">
      <div class="car-details">
        <div class="car-name">Deloren DMC-12</div>
        <div class="car-price">$8000</div>
        <div class="car-booking">
          <input type="number" min="2000" step="100" class="booking-input" placeholder="Monto a apartar">
          <button class="booking-button" onclick="reserveCar()">Apartar</button>
        </div>
      </div>
    </li>
 
  </ul>
</body>
</html>
