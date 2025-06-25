<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contacto - Cooperativa Pirapó</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to bottom, #f0f4f8, #65cbd9);
      color: #334;
      scroll-behavior: smooth;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    nav {
      background: linear-gradient(90deg, #004d40, #00796b);
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      padding: 1rem;
      position: sticky;
      top: 0;
      z-index: 1100;
    }

    .nav-container {
      max-width: 1200px;
      margin: auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .logo {
      height: 60px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 2rem;
      padding: 0;
      margin: 0;
    }

    nav a {
      color: #fff;
      font-weight: 600;
      text-decoration: none;
      font-size: 1rem;
      padding: 8px 14px;
      border-radius: 8px;
      transition: background 0.3s ease, transform 0.3s ease;
    }

    nav a:hover, nav a.active {
      background-color: rgba(255, 255, 255, 0.25);
      transform: scale(1.05);
    }

    header.page-header {
      padding: 4rem 2rem 2rem;
      text-align: center;
      max-width: 1000px;
      margin: 0 auto 3rem;
    }

    header.page-header h1 {
      font-size: 2.8rem;
      color: #00796b;
      font-weight: 700;
      letter-spacing: 0.05em;
    }

    .sucursal {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0,121,107,0.15);
      transition: transform 0.3s ease;
      overflow: hidden;
    }

    .sucursal:hover {
      transform: translateY(-10px);
    }

    .sucursal img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .sucursal-content {
      padding: 1.5rem;
    }

    
    footer {
      background-color: #2b6777;
      color: #fff;
      text-align: center;
      padding: 30px 15px;
    }

    .social-icons a {
      color: #ffffff;
      transition: color 0.3s, transform 0.3s;
    }

    .social-icons a:hover {
      color: #ffe53b;
      transform: scale(1.2);
    }

  </style>
</head>
<body>

<nav>
  <div class="nav-container">
    <a href="index.html"><img src="img/logo_sin_fondo.png" alt="Logo Cooperativa" class="logo" /></a>
    <ul>
      <li><a href="index.html">Inicio</a></li>
      <li><a href="historia.html">Historia</a></li>
      <li><a href="servicios.html">Servicios</a></li>
      <li><a href="contacto.php" class="active" aria-current="page">Contacto</a></li>
    </ul>
  </div>
</nav>

<header class="page-header" data-aos="fade-down" data-aos-duration="900">
  <h1>Contacto</h1>
  <p>Estamos aquí para ayudarte. Encuentra nuestras sucursales y contáctanos fácilmente.</p>
</header>

<main class="container">
  <div class="row">
    <?php
  $sucursales = [
    ["Casa Central", "Lunes a Viernes: 07:00–11:30 y 13:00–17:00<br>Sábados: 07:00–11:30", "img/oficina_central.jpg", "https://www.google.com/maps/place/Sociedad+Cooperativa+PIRAPO+Agricola+Limitada/@-26.8622522,-55.5420569,49m/data=!3m1!1e3!4m6!3m5!1s0x9458011f3b2086a9:0x7d5cf088b84e8af9!8m2!3d-26.8622903!4d-55.5418355!16s%2Fg%2F1tf4g3jt?entry=ttu&g_ep=EgoyMDI1MDYxNy4wIKXMDSoASAFQAw%3D%3D", "595984905269"],
    ["Silos", "Lunes a Viernes: 07:00–11:30 y 13:00–17:00<br>Sábados: 07:00–11:30", "img/silo_centro.jpg", "https://www.google.com/maps/place/Sociedad+Cooperativa+PIRAPO+Agricola+Limitada/@-26.8623295,-55.5439107,388m/data=!3m1!1e3!4m9!1m2!2m1!1ssilo+pirapo+centro!3m5!1s0x9458011f3b2086a9:0x7d5cf088b84e8af9!8m2!3d-26.8622903!4d-55.5418355!16s%2Fg%2F1tf4g3jt?entry=ttu&g_ep=EgoyMDI1MDYxNy4wIKXMDSoASAFQAw%3D%3D", "595984123456"],
    ["Asistencia Técnica", "Lunes a Viernes: 07:00–11:30 y 13:00–17:00<br>Sábados: 07:00–11:30", "img/asistencia_tecnica.jpg", "https://www.google.com/maps/place/Sociedad+Cooperativa+PIRAPO+Agricola+Limitada/@-26.8623295,-55.5439107,388m/data=!3m1!1e3!4m9!1m2!2m1!1ssilo+pirapo+centro!3m5!1s0x9458011f3b2086a9:0x7d5cf088b84e8af9!8m2!3d-26.8622903!4d-55.5418355!16s%2Fg%2F1tf4g3jt?entry=ttu&g_ep=EgoyMDI1MDYxNy4wIKXMDSoASAFQAw%3D%3D", "595984987654"],
    ["Supermercado", "Lunes a Sabados: 07:00–11:30 y 13:00–18:00<br>Domingos: 07:00–11:30", "img/super_ferr.jpg", "https://www.google.com/maps/place/Supermercado+Cooperativa+Pirap%C3%B3/@-26.8638581,-55.5409293,755m/data=!3m1!1e3!4m9!1m2!2m1!1ssilo+pirapo+centro!3m5!1s0x9458011e1791e615:0xe86cb0f474214202!8m2!3d-26.8629836!4d-55.5367171!16s%2Fg%2F1v44g1jw?entry=ttu&g_ep=EgoyMDI1MDYxNy4wIKXMDSoASAFQAw%3D%3D", "595984905269"],
    ["Insumos Agrícolas", "Lunes a Sábado: 07:00–11:30 y 13:00–17:00", "img/insumos.jpg", "https://www.google.com/maps/place/Dep%C3%B3sito+Agroqu%C3%ADmicos/@-26.8619072,-55.5431185,194m/data=!3m1!1e3!4m9!1m2!2m1!1ssilo+pirapo+centro!3m5!1s0x94580118b8055555:0x7086d394a32650a9!8m2!3d-26.8618786!4d-55.5420953!16s%2Fg%2F11tggv58yk?entry=ttu&g_ep=EgoyMDI1MDYxNy4wIKXMDSoASAFQAw%3D%3D", "595984905269"],
    ["Semillería", "Lunes a Sábado: 07:00–11:30 y 13:00–17:00", "img/semillas.jpg", "https://www.google.com/maps/place/Dep%C3%B3sito+de+Semillas/@-26.8625508,-55.5425365,194m/data=!3m1!1e3!4m9!1m2!2m1!1ssilo+pirapo+centro!3m5!1s0x9458011f2aeaaaab:0x4caca90cf1aaa93a!8m2!3d-26.8629003!4d-55.5412724!16s%2Fg%2F11txv25y3j?entry=ttu&g_ep=EgoyMDI1MDYxNy4wIKXMDSoASAFQAw%3D%3D", "595984905269"],
    ["Surtidores", "Horario corrido: 06:30–19:00", "img/surtidor.jpg", "URL_MAPA_Shttps://www.google.com/maps/place/Estaci%C3%B3n+De+Servicios+Ecop/@-26.8626896,-55.5378453,97m/data=!3m1!1e3!4m9!1m2!2m1!1ssilo+pirapo+centro!3m5!1s0x9458011e387c5d25:0xdd3a4edd2df43f40!8m2!3d-26.8626379!4d-55.5371711!16s%2Fg%2F11c484ghv9?entry=ttu&g_ep=EgoyMDI1MDYxNy4wIKXMDSoASAFQAw%3D%3DRTIDORES", "595984905269"],
    ["Ferretería", "Lunes a Viernes: 07:00–16:00", "img/ferr.jpeg", "https://www.google.com/maps/place/Ferreter%C3%ADa+Cooperativa+Pirap%C3%B3/@-26.8630745,-55.536988,71m/data=!3m1!1e3!4m9!1m2!2m1!1ssilo+pirapo+centro!3m5!1s0x9458011e1987a8df:0xe662f90ee0112df8!8m2!3d-26.8632283!4d-55.5363685!16s%2Fg%2F11c55rhyb_?entry=ttu&g_ep=EgoyMDI1MDYxNy4wIKXMDSoASAFQAw%3D%3D", "595984905269"],
    ["Materiales de Construcción", "Lunes a Viernes: 07:00–16:00", "img/materiales.jpg", "https://www.google.com/maps/place/Materiales+De+Construcci%C3%B3n+Cooperativa+Pirap%C3%B3/@-26.8632161,-55.5373547,200m/data=!3m1!1e3!4m9!1m2!2m1!1ssilo+pirapo+centro!3m5!1s0x9458011e1cdb9485:0x75c168cf37a398a5!8m2!3d-26.8634048!4d-55.5360161!16s%2Fg%2F11c1s3ywk2?entry=ttu&g_ep=EgoyMDI1MDYxNy4wIKXMDSoASAFQAw%3D%3D", "595984905269"]
      
  ];

  foreach ($sucursales as $sucursal) {
    echo "<div class='col-md-4 mb-4' data-aos='fade-up'>";
    echo "<div class='sucursal'>";
    echo "<img src='{$sucursal[2]}' alt='Imagen de {$sucursal[0]}'>";
    echo "<div class='sucursal-content'>";
    echo "<h3>{$sucursal[0]}</h3>";
    echo "<p><strong>Horario:</strong><br>{$sucursal[1]}</p>";
    echo "<div class='d-flex'>";
    echo "<a href='https://wa.me/{$sucursal[4]}' class='btn btn-outline-success me-2' title='Contactar por WhatsApp' target='_blank'><i class='bi bi-whatsapp fs-4'></i></a>";
    echo "<a href='{$sucursal[3]}' class='btn btn-outline-primary' title='Ver en Google Maps' target='_blank'><i class='bi bi-geo-alt-fill fs-4'></i></a>";
    echo "</div>";
    echo "</div></div></div>";
  }
?>

  </div>

<section class="mt-5 mb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6" data-aos="fade-right">
        <h2>Enviar un mensaje</h2>
        <form action="enviar.php" method="post" class="bg-white p-4 rounded shadow">
          <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Correo electrónico:</label>
            <input type="email" name="correo" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Mensaje:</label>
            <textarea name="mensaje" class="form-control" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <div id="mensaje-exito" class="alert alert-success mt-3" style="display:none;">
         Tu mensaje ha sido enviado correctamente.
</div>
      </div>

      <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left">
        <h2>Agendar turno para créditos</h2>
        <form action="agendar.php" method="post" class="bg-white p-4 rounded shadow">
          <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Número de socio:</label>
            <input type="text" name="socio" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Fecha deseada:</label>
            <input type="date" name="fecha" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Hora:</label>
            <input type="time" name="hora" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Comentario (opcional):</label>
            <textarea name="comentario" class="form-control" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-success">Agendar Turno</button>
          <div id="turno-exito" class="alert alert-success mt-3" style="display:none;"></div>

        </form>
      </div>
    </div>
  </div>
</section>

<footer>
  <p>© 2025 Cooperativa Pirapó Agrícola Ltda.</p>
  <nav class="social-icons" aria-label="Redes sociales">
 <a href="https://www.facebook.com/profile.php?id=100083546711527" class="text-white"><i class="bi bi-facebook fs-4"></i></a>
    <a href="https://wa.me/595984905269" class="text-white"><i class="bi bi-whatsapp fs-4"></i></a>
  </nav>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ once: true });


  const form = document.querySelector('form[action="enviar.php"]');
  const mensajeExito = document.getElementById('mensaje-exito');

  form.addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(form);

    fetch('enviar.php', {
      method: 'POST',
      body: formData
    })
    .then(res => res.text())
    .then(data => {
      mensajeExito.textContent = data;
      mensajeExito.style.display = 'block';
      form.reset();
    })
    .catch(error => {
      mensajeExito.textContent = 'Hubo un error al enviar el mensaje.';
      mensajeExito.style.display = 'block';
    });
  });

  const turnoForm = document.querySelector('form[action="agendar.php"]');
const turnoExito = document.getElementById('turno-exito');

turnoForm.addEventListener('submit', function(e) {
  e.preventDefault();
  const formData = new FormData(turnoForm);

  fetch('agendar.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.text())
  .then(data => {
    turnoExito.textContent = data;
    turnoExito.style.display = 'block';
    turnoForm.reset();
  })
  .catch(error => {
    turnoExito.textContent = 'Hubo un error al agendar el turno.';
    turnoExito.style.display = 'block';
  });
});


</script>

</body>
</html>

