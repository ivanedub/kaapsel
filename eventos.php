<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Eventos - Kaapsel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Revivimos los mejores momentos de nuestros eventos en Kaapsel. Fotografías, DJs, animaciones y mucho más.">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="eventos.css" />
</head>
<body>

  <!-- HEADER -->
  <?php include 'header.html'?>

  <!-- CAROUSEL -->
  <section class="first-section">
    <div id="eventosCarousel" class="carousel slide custom-carousel" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./carussel_principal/imagen1.jpg" class="d-block w-100" alt="Escena del evento 1 en Kaapsel">
        </div>
        <div class="carousel-item">
          <img src="./carussel_principal/imagen2.jpg" class="d-block w-100" alt="Momentos destacados del evento 2">
        </div>
        <div class="carousel-item">
          <img src="./carussel_principal/imagen3.jpeg" class="d-block w-100" alt="Ambiente en el evento 3 de Kaapsel">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#eventosCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#eventosCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </section>
  
  <!-- PERFILES -->
  <section class="container mt-5">
    <div class="row g-3 justify-content-center"> <!-- g-3 para espacio entre columnas -->
      <div class="col-lg-3 col-md-6 col-sm-6 text-center">
        <img src="./carussel_principal/imagen3.jpeg" alt="Carlos, fotógrafo profesional" class="img-fluid rounded-circle" style="width: 160px; height: 160px; object-fit: cover;">
        <h5 class="mt-2">Carlos</h5>
        <p>Fotógrafo</p>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 text-center">
        <img src="./carussel_principal/imagen1.jpg" alt="Lucía, animadora del evento" class="img-fluid rounded-circle" style="width: 160px; height: 160px; object-fit: cover;">
        <h5 class="mt-2">Lucía</h5>
        <p>Animadora</p>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 text-center">
        <img src="./carussel_principal/imagen1.jpg" alt="David, DJ principal del evento" class="img-fluid rounded-circle" style="width: 160px; height: 160px; object-fit: cover;">
        <h5 class="mt-2">David</h5>
        <p>DJ</p>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 text-center">
        <img src="./carussel_principal/imagen3.jpeg" alt="Rebeca, encargada de decoración" class="img-fluid rounded-circle" style="width: 160px; height: 160px; object-fit: cover;">
        <h5 class="mt-2">Rebeca</h5>
        <p>Decoradora</p>
      </div>
    </div>
  </section>

  <!-- MENSAJES -->
  <div class="banner-text">
    DISFRUTA DE NUESTROS EVENTOS PASADOS
  </div>
  <div class="mensaje-secundario">
    ¡No te quedes fuera de la acción! Revive lo mejor de nuestros eventos pasados y déjate inspirar por el ambiente vibrante que sólo <strong>Kaapsel</strong> puede ofrecer.
  </div>


  <!-- CONTENEDORES DE EVENTOS VISIBLES -->
  <section class="first-section container mt-5">
    <h2 class="text-center mb-5">Eventos Destacados</h2>
    <div class="eventos-grid">

    <!-- Evento 1 -->
    <div class="evento-container">
      <img src="./carussel_principal/imagen2.jpg" alt="Evento 1" class="placeholder-img" />
      <div class="evento-descripcion">
        <h3>Festival de Verano 2023</h3>
        <p>El evento más grande del año con los mejores DJs nacionales e internacionales.</p>
        <a href="#" class="evento-link">Más información →</a>
      </div>
    </div>

    <!-- Evento 2 -->
    <div class="evento-container">
      <img src="./carussel_principal/imagen3.jpeg" alt="Evento 2" class="placeholder-img" />
      <div class="evento-descripcion">
        <h3>Noche Electrónica</h3>
        <p>Una experiencia sensorial con luces láser y los sonidos más innovadores.</p>
        <a href="#" class="evento-link">Más información →</a>
      </div>
    </div>

    <!-- Evento 3 -->
    <div class="evento-container">
      <img src="./carussel_principal/imagen1.jpg" alt="Evento 3" class="placeholder-img" />
      <div class="evento-descripcion">
        <h3>Fiesta Retro</h3>
        <p>Viaja en el tiempo con los éxitos de los 80s y 90s, disfraces y mucha diversión.</p>
        <a href="#" class="evento-link">Más información →</a>
      </div>
    </div>

    <!-- Evento 4 -->
    <div class="evento-container">
      <img src="./carussel_principal/imagen3.jpeg" alt="Evento 4" class="placeholder-img" />
      <div class="evento-descripcion">
        <h3>After Hours VIP</h3>
        <p>Fiesta exclusiva para amantes de la noche, con área VIP y servicio premium.</p>
        <a href="#" class="evento-link">Más información →</a>
      </div>
    </div>

   </div>
</section>

  <!-- MENSAJES -->
  <div class="banner-text">
    CUENTA REGRESIVA PARA LA PROXIMA GRAN EXPERIENCIA
  </div>
  <div class="mensaje-secundario">
  Descubre lo que tenemos preparado en nuestro proximos eventos y dejate sorprender.
  </div>

<section class="eventos-grandes container mt-5">
    <h2 class="text-center mb-5">Próximos Eventos</h2>
    <div class="eventos-row">
    <!-- Evento 1 -->
    <div class="evento-box">
      <img src="./carussel_principal/imagen1.jpg" alt="Afro Summer Fest">
      <div class="info-evento">
        <h3>Afro Summer Fest</h3>
        <p><strong>Lugar:</strong> Malabo</p>
        <p><strong>Fecha:</strong> 15 Julio 2025</p>
        <button class="btn-entrada">ENTRADA</button>
      </div>
    </div>

    <!-- Evento 2 -->
    <div class="evento-box">
      <img src="./carussel_principal/imagen2.jpg" alt="Beach Party Live">
      <div class="info-evento">
        <h3>Beach Party Live</h3>
        <p><strong>Lugar:</strong> Bata</p>
        <p><strong>Fecha:</strong> 20 Agosto 2025</p>
        <button class="btn-entrada">ENTRADA</button>
      </div>
    </div>

    <!-- Evento 3 -->
    <div class="evento-box">
      <img src="./carussel_principal/imagen3.jpeg" alt="Concierto VIP">
      <div class="info-evento">
        <h3>Concierto VIP</h3>
        <p><strong>Lugar:</strong> Ebebiyin</p>
        <p><strong>Fecha:</strong> 5 Septiembre 2025</p>
        <button class="btn-entrada">ENTRADA</button>
      </div>
    </div>
   </div>
</section>

<!-- Formulario de registro -->
<section class="registro-formulario container mt-5">
  <h2 class="text-center mb-4">Regístrate para obtener tu entrada</h2>
  <form class="formulario">
    <div class="form-grid">
      <input type="text" placeholder="Nombre" required>
      <input type="text" placeholder="Segundo Nombre">
      <input type="text" placeholder="País" required>
      <input type="tel" placeholder="Número de Teléfono" required>
      <input type="email" placeholder="Correo Electrónico" required>
      <input type="password" placeholder="Contraseña" required>
      <input type="password" placeholder="Repetir Contraseña" required>
    </div>
    <div class="text-center mt-4">
      <button type="submit" class="btn-enviar">ENVIAR</button>
    </div>
  </form>
</section>

<?php include 'footer.html'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

