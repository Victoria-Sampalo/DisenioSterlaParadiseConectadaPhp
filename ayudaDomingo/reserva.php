<!DOCTYPE html>
<?php 
    // requerir fichero de conexion
    require_once '../../inclusiones/conexion.php';
    require_once '../../acciones/conseguir_zonas.php';
    require_once '../../acciones/guardar_reserva.php';
    
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Reservas - Hawai</title>
  <meta content="Reservas centralizadas" name="description">
  <meta content="reservas, hawai" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../Home/css/button-style.css">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center header-inner-pages">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html"><img src="assets/img/logo.png" /></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.html#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html#about">Sobre Hawai</a></li>
          <li><a class="nav-link scrollto" href="carta.html">Menu</a></li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contacto</a></li>
          <li><a class="nav-link scrollto" href="../Home/Index.html">Volver al portal</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Reservar</li>
        </ol>
        <h2>Reservas</h2>

      </div>
    </section><!-- End Breadcrumbs -->


    <section class="inner-page">
      <div class="container">
        <p>
          Para reservar en Hawai, rellene el siguiente formulario y un asesor se pondrá en contacto con usted para
          garantizar su asistencia.
        </p>
        <section id="reserva" class="reserva">
            <form action="../../acciones/guardar_reserva.php" method="GET" role="form">
            <input type="hidden" name="restaurante" value="1"/>
            <div class="row">
              <div class="col-md-6 form-group">
                <select class="form-control" name="zonas">
                  <option class="form-control" name="zonas" id="#">Zona</option>
                  <option class="form-control" name="zonas" value="1" id="int">Interior</option>
                  <option class="form-control" name="zonas" value="2" id="ext">Exterior</option>
                </select>
              </div>
              <div class="col-md-6 form-group">
                <select class="form-control" name="numpersonas">
                  <option class="form-control" name="numpersonas">Nº de personas*</option>
                  <option class="form-control" name="numpersonas" value="1" id="1">1</option>
                  <option class="form-control" name="numpersonas" value="2" id="2">2</option>
                  <option class="form-control" name="numpersonas" value="3" id="3">3</option>
                  <option class="form-control" name="numpersonas" value="4" id="4">4</option>
                  <option class="form-control" name="numpersonas" value="5" id="5">5</option>
                  <option class="form-control" name="numpersonas" value="6" id="6">6</option>
                  <option class="form-control" name="numpersonas" value="7" id="7">7</option>
                  <option class="form-control" name="numpersonas" value="8" id="8">8</option>
                  <option class="form-control" name="numpersonas" value="9" id="9">9</option>
                </select>
              </div>
            </div>
            <div class="row separacionHawai">
              <div class="col-md-4">
                <input type="date" class="form-control" name="fecha" placeholder="Fecha" required />
              </div>
              <div class="col-md-8 form-group mt-3 mt-md-0">
                <select class="form-control" name="hora">
                  <option class="form-control" name="hora" id="#">Hora</option>
                  <option class="form-control" name="hora" id="12" value="12:00">12:00</option>
                  <option class="form-control" name="hora" id="1230" value="12:30">12:30</option>
                  <option class="form-control" name="hora" id="13" value="13:00">13:00</option>
                  <option class="form-control" name="hora" id="1330" value="13:30">13:30</option>
                  <option class="form-control" name="hora" id="14" value="14:00">14:00</option>
                  <option class="form-control" name="hora" id="1430" value="14:30">14:30</option>
                  <option class="form-control" name="hora" id="15" value="15:00">15:00</option>
                  <option class="form-control" name="hora" id="1530" value="15:30">15:30</option>
                  <option class="form-control" name="hora" id="16" value="16:00">16:00</option>
                </select>
              </div>
          </div>
          <!-- class separacion-->
          <div class="row separacion">
            <div class="col-md-6 form-group">
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Tu nombre" maxlength="50" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Tu apellido" maxlength="50" required>
            </div>
        </div>
        <p></p>
        <div class="row">
            <div class="col-md-4">
                <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Tu telefono" required />
            </div>
            <div class="col-md-8 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Tu email" required>
            </div>
        </div> 
          <p></p>
            <!--<div class="my-3">
              <div class="loading">Cargando</div>
              <div class="error-message"></div>
              <div class="sent-message">Tu mensaje ha sido enviado.</div>
            </div>
            <div class="text-center"><button type="submit">Reservar</button></div>-->
            
            <!-- IMPORTANTE
                    cambiar estilos
            
            <div><button type="submit">Reservar</button></div>-->
            
            <!-- class realizarRes-->
            <div class="text-center">
                <button type="submit" name="enviar" class="realizarRes">Reservar</button>
            </div>
          </form>
          <p></p>
          <p>* Para reservas de más de 9 personas, contactar por telefono.</p>
        </section>
      </div>
    </section><!-- End reserva 1 -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Esterlas Paradise</span></strong>. Todos los derechos reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/valera-free-bootstrap-theme/ -->
        Diseño realizado por <a href="#">Designs Evolution</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>