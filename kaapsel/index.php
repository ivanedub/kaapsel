<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Käapsel Eventos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="indexprincipal.css" />
</head>
<body>

  <!-- HEADER -->
  <?php include 'header.html'; ?>

  <!-- PRIMERA SECCIÓN (derecha) -->
  <div class="main-content first-section">
    <div class="horizontal-carousel-container">
      <div id="carouselCaptions1" class="carousel slide custom-carousel" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./carussel_principal/imagen1.jpg" class="d-block w-100" alt="Evento 1">
          </div>
          <div class="carousel-item">
            <img src="./carussel_principal/imagen2.jpg" class="d-block w-100" alt="Evento 2">
          </div>
          <div class="carousel-item">
            <img src="./carussel_principal/imagen3.jpeg" class="d-block w-100" alt="Evento 3">
          </div>
        </div>
      </div>
    </div>

    <div class="right-content">
      <div class="right-inner">
        <div class="botones-inferiores">
          <a href="#" class="btn btn-dark">Servicios</a>
          <a href="#" class="btn btn-dark">Nosotros</a>
        </div>

        <div class="vertical-carousel-container">
          <div class="vertical-carousel">
            <div class="vertical-carousel-inner">
              <img src="./carussel_principal/imagen1.jpg" alt="Evento 1">
              <img src="./carussel_principal/imagen2.jpg" alt="Evento 2">
              <img src="./carussel_principal/imagen3.jpeg" alt="Evento 3">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SEGUNDA SECCIÓN (izquierda) -->
  <div class="main-content section-spacer">
    <!-- Texto superior (derecha) -->
    <div class="banner-text text-right">PONTE AL DÍA CON LA DIVERSION</div>
    
    <div class="horizontal-carousel-container">
      <div id="carouselCaptions2" class="carousel slide custom-carousel" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./carussel_principal/imagen1.jpg" class="d-block w-100" alt="Evento 1">
          </div>
          <div class="carousel-item">
            <img src="./carussel_principal/imagen2.jpg" class="d-block w-100" alt="Evento 2">
          </div>
          <div class="carousel-item">
            <img src="./carussel_principal/imagen3.jpeg" class="d-block w-100" alt="Evento 3">
          </div>
        </div>
      </div>
    </div>

    <!-- Texto inferior (izquierda) -->
    <div class="banner-text text-left">AQUÍ TE LO CONTAMOS TODO</div>

    <div class="left-content">
      <div class="left-inner">
        <div class="botones-inferiores">
          <a href="#" class="btn btn-dark">Servicios</a>
          <a href="#" class="btn btn-dark">Nosotros</a>
        </div>

        <div class="vertical-carousel-container">
          <div class="vertical-carousel">
            <div class="vertical-carousel-inner">
              <img src="./carussel_principal/imagen1.jpg" alt="Evento 1">
              <img src="./carussel_principal/imagen2.jpg" alt="Evento 2">
              <img src="./carussel_principal/imagen3.jpeg" alt="Evento 3">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php include 'footer.html'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>