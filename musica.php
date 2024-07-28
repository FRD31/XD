<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Reproductor de mi página web :)</title>
  <style>
    body {
      background-color: green;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .iframe-container {
      position: relative;
      width: 40%;
      height: 152px;
      overflow: hidden;
      perspective: 1000px;
      background-color: green;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
    }

    .iframe-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      animation-name: iframeAnimation;
      animation-duration: 0s;
      animation-iteration-count: infinite;
      transform-origin: center center;
    }

    @keyframes iframeAnimation {
      0% { transform: rotateY(0deg); }
      50% { transform: rotateY(180deg); }
      100% { transform: rotateY(360deg); }
    }

    a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #ff00ff;
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      border-radius: 6px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="iframe-container">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLk9XJR6GVhfD6yWdp2GoLngsZxCSS58rF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
</body>
</html>

