
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto - Cooperativa Pirapó</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<nav>
  <div class="nav-container">
    <a href="index.html">
      <img src="img/logo_sin_fondo.png" alt="Logo Cooperativa" class="logo">
    </a>
    <ul>
      <li><a href="index.html">Inicio</a></li>
      <li><a href="historia.html">Historia</a></li>
      <li><a href="servicios.html">Servicios</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>
  </div>
</nav>
<section>
  <h1>Contacto</h1>
  <p><strong>Supermercado:</strong> Lunes a Sábado 07:00–17:00<br>Tel: (071) 555-111</p>
  <p><strong>Ferretería:</strong> Lunes a Viernes 07:00–16:00<br>Tel: (071) 555-222</p>

  <h2>Enviar un mensaje</h2>
  <form action="enviar.php" method="post">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br>
    <label>Correo electrónico:</label><br>
    <input type="email" name="correo" required><br>
    <label>Mensaje:</label><br>
    <textarea name="mensaje" required></textarea><br>
    <button type="submit">Enviar</button>
  </form>
</section>
<footer>© 2025 Cooperativa Pirapó Agrícola Ltda.</footer>
</body>
</html>
