<!DOCTYPE html>
<html lang="en">
    
<?php 
    // requerir fichero de conexion
    require_once '../../inclusiones/conexion.php';
    require_once '../../acciones/conseguir_zonas.php';
    require_once '../../acciones/guardar_reserva.php';
    
?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Reservas - Brasas London</title>
    <meta content="Reservas centralizadas" name="description">
    <meta content="reservas, hawai" name="keywords">

    <link href="assets/favicon.ico" rel="icon">
    <link href="assets/favicon.ico" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="css/style_form.css" rel="stylesheet">
    <link href="../Home/css/button-style.css" rel="stylesheet">
</head>

<body>

<header id="header" class="d-flex align-items-center header-inner-pages">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="index.html"><img src="assets/favicon.ico" alt="logo"/></a></h1>

    </div>
</header>
<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Reservar</li>
            </ol>
            <h2 style="color: white">Reservas</h2>

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <p>
                Para reservar en Brasas London, rellene el siguiente formulario y un asesor se pondrá en contacto con usted para
                garantizar su asistencia.
            </p>
            <section id="reserva" class="reserva">
                <form action="../../acciones/guardar_reserva.php" method="GET">
                    <input type="hidden" name="restaurante" value="4"/>
                    <input type="hidden" name="zonas" value="1"/>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <select class="form-control" name="numpersonas" required>
                                <option class="form-control" name="numpersonas">Nº de personas*</option>
                                <option class="form-control" value="1">1</option>
                                <option class="form-control" value="2">2</option>
                                <option class="form-control" value="3">3</option>
                                <option class="form-control" value="4">4</option>
                                <option class="form-control" value="5">5</option>
                                <option class="form-control" value="6">6</option>
                                <option class="form-control" value="7">7</option>
                                <option class="form-control" value="8">8</option>
                                <option class="form-control" value="9">9</option>
                            </select>
                        </div>
                    </div>
                    <p></p>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="date" class="form-control" name="fecha" placeholder="Fecha" required/>
                        </div>
                        <div class="col-md-8 form-group mt-3 mt-md-0">
                            <select class="form-control" name="hora" required>
                                <option name="hora">Hora</option>
                                <option value="19:00">19:00</option>
                                <option value="19:30">19:30</option>
                                <option value="20:00">20:00</option>
                                <option value="20:30">20:30</option>
                                <option value="22:00">22:00</option>
                                <option value="22:30">22:30</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6 form-group separacion">
                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Tu nombre" maxlength="50" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0 separacion">
                        <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Tu apellido" maxlength="50" required>
                    </div>
                    </div>
                    <p></p><br/>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Tu telefono" required />
                        </div>
                        <div class="col-md-8 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Tu email" required>
                        </div>
                    </div> 
                    <p></p>
                    <!--
                    <div class="my-3">
                        <div class="loading">Cargando</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Tu mensaje ha sido enviado.</div>
                    </div>-->
                    <div class="text-center">
                        <button type="submit" class="realizarRes">Reservar</button>
                    </div>
                </form>
                <p></p>
                <p>* Para reservas de más de 9 personas, contactar por telefono.</p>
            </section>
        </div>
    </section>

</main>

<footer id="footer">

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Esterlas Paradise</span></strong>. Todos los derechos reservados
        </div>
        <div class="credits">

            Diseño realizado por <a href="https://img.europapress.es/fotoweb/fotonoticia_20180509155745_420.jpg">Peter
            Languilón</a>
        </div>
    </div>
</footer>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<script src="js/main.js"></script>

</body>

</html>