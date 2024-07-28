<!DOCTYPE html>
<html>
<head>
  <title>Carrito de compras</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
      background-color: #4CAF50;
      color: white;
    }

    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>Carrito de compras</h1>
  
  <table>
    <tr>
      <th>Producto</th>
      <th>Precio</th>
      <th>Cantidad</th>
      <th>Total</th>
    </tr>
    <tr>
      <td>Producto 1</td>
      <td>$10.00</td>
      <td><input type="number" value="1"></td>
      <td>$10.00</td>
    </tr>
    <tr>
      <td>Producto 2</td>
      <td>$15.00</td>
      <td><input type="number" value="1"></td>
      <td>$15.00</td>
    </tr>
    <tr>
      <td colspan="3">Total</td>
      <td>$25.00</td>
    </tr>
  </table>

  <br>

  <a href="#" class="button">Pagar</a>
</body>
</html>
