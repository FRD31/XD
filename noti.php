<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>Concesionaria FR_ss- Noticias</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: black;
      color: #00ff00;
      padding: 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #00ff00;
      animation: neon-glow 2s ease-in-out infinite;
    }

    .intro {
      margin-bottom: 30px;
    }

    .intro-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .intro-content {
      font-size: 16px;
      line-height: 1.5;
    }

    .news-item {
      margin-bottom: 30px;
      background-color: #222222;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 255, 0, 0.3);
    }

    .news-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .news-content {
      font-size: 16px;
      line-height: 1.5;
    }

    .news-date {
      font-size: 14px;
      color: #666666;
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
      display: flex;
      justify-content: center;
      margin-top: 30px;
    }

    .back-button button {
      background-color: #333333;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
    }

    .back-button button:hover {
      background-color: #555555;
    }
  </style>
</head>
<body>
  <h1>Noticias de la Concesionaria FR_ss</h1>

  <div class="intro">
    <h2 class="intro-title">¡Bienvenido al apartado de noticias de nuestra concesionaria!</h2>
    <p class="intro-content">Aquí encontrarás las últimas novedades y actualizaciones sobre nuestros autos deportivos. Mantente al tanto de las adiciones más recientes a nuestro catálogo, eventos especiales y promociones exclusivas.</p>
    <p class="intro-content">En esta sección, te presentaremos los modelos más emocionantes y exclusivos que hemos incorporado. Desde superdeportivos de alta gama hasta clásicos icónicos, tendrás la oportunidad de descubrir los vehículos que hacen latir los corazones de los entusiastas del automovilismo.</p>
    <p class="intro-content">¡No te pierdas nuestras noticias destacadas y mantén el pulso de lo que sucede en el mundo de los autos deportivos!</p>
  </div>

  <div class="news-item">
    <h2 class="news-title">¡Llegaron nuevos modelos de autos deportivos!</h2>
    <p class="news-content">Estamos emocionados de anunciar que hemos agregado tres increíbles autos deportivos a nuestro catálogo. Ahora puedes disfrutar de los siguientes modelos:</p>
    <ul>
      <li>Lamborghini Huracán Evo</li>
      <li>Lamborghini Terzo Millennio</li>
      <li>DeLorean DMC-12 (¡el famoso auto de "Volver al Futuro"!)</li>
    </ul>
    <p class="news-content">Estos vehículos representan lo mejor en diseño, rendimiento y tecnología. ¡No te pierdas la oportunidad de experimentar la emoción de conducirlos!</p>
    <p class="news-date">Fecha de publicación: 29 de junio de 2023</p>
  </div>

  <div class="back-button">
    <button onclick="window.location.href = 'menu_mejo.php';">Regresar al Menú</button>
  </div>

</body>
</html>
