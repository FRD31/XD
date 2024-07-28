<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>Catálogo de Autos Deportivos - FR-ss</title>
  <style>
    body {
      background-color: #000000;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    h1, th, td, li {
      color: #00ff00;
      animation: neon-glow 6s ease-in-out infinite;
    }

    table {
      margin: 20px auto;
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      padding: 10px;
      border-bottom: 1px solid #00ff00;
    }

    th {
      background-color: #111111;
    }

    ul {
      list-style-type: none;
      padding: 0;
      margin: 20px 0;
    }

    li:before {
      content: "▸";
      color: #00ff00;
      margin-right: 5px;
    }

    button {
      background-color: #333333;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
    }

    button:hover {
      background-color: #555555;
    }

    @keyframes neon-glow {
      0%, 40%, 100% {
        text-shadow: 0 0 5px #00ff00;
      }
      20%, 80% {
        text-shadow: 0 0 20px #00ff00, 0 0 10px #00ff00, 0 0 20px #00ff00;
      }
    }
    .back-button {
      display: block;
      margin-top: 20px;
      text-align: center;
    }
  </style>
  <script>
    function reserveCar() {
      alert("El auto seleccionado ha sido reservado. ¡Gracias por su elección!");
    }
  </script>
</head>
<body>
  <h1>Catálogo de Autos Deportivos - FR-ss</h1>

  <table>
    <thead>
      <tr>
        <th>Modelo</th>
        <th>Año</th>
        <th>Precio</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Chevrolet Corvette ZR1</td>
        <td>2008</td>
        <td>$75,000</td>
        <td><button onclick="reserveCar()">Reservar</button></td>
      </tr>
      <tr>
        <td>Nissan GT-R R35 LBWK</td>
        <td>2022</td>
        <td>$110,000</td>
        <td><button onclick="reserveCar()">Reservar</button></td>
      </tr>
      <tr>
        <td>Lamborghini Huracán Coupé</td>
        <td>2021</td>
        <td>$250,000</td>
        <td><button onclick="reserveCar()">Reservar</button></td>
      </tr>
      <tr>
        <td>Chevrolet Camaro COPO</td>
        <td>2022</td>
        <td>$120,000</td>
        <td><button onclick="reserveCar()">Reservar</button></td>
      </tr>
      <tr>
        <td>Lamborghini Aventador</td>
        <td>2023</td>
        <td>$400,000</td>
        <td><button onclick="reserveCar()">Reservar</button></td>
      </tr>
      <tr>
        <td>DeLorean DMC</td>
        <td>1981</td>
        <td>$88,000</td>
        <td><button onclick="reserveCar()">Reservar</button></td>
      </tr>
    </tbody>
  </table>

  <ul>
    <li>Chevrolet Corvette ZR1</li>
    <li>Nissan GT-R R35 LBWK</li>
    <li>Lamborghini Huracán Coupé</li>
    <li>Chevrolet Camaro COPO</li>
    <li>Lamborghini Aventador</li>
    <li>DeLorean DMC</li>
  </ul>
<div class="back-button">
    <a href="menu_mejo.php"><button>Volver al Menú</button></a>
  </div>

  <script>
    function reserveCar() {
      alert("El auto seleccionado ha sido reservado. ¡Gracias por su elección!");
      window.location.href = "sisemapar_xd.php";
    }
  </script>
</body>
</html>
