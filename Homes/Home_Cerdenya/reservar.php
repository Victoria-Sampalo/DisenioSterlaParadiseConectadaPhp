<!DOCTYPE html>
<?php 
    // requerir fichero de conexion
    require_once '../../inclusiones/conexion.php';
    require_once '../../acciones/guardar_reserva.php';
    
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
Victory Template
http://www.templatemo.com/tm-507-victory
-->
        <title>Cerdeña- Contacto</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="img/logo_cerdenia_hover.png"/>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">


        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <link rel="stylesheet" href="css/button-style.css">
        
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    <div class="header">
        <div class="container">
            <a href="#" class="navbar-brand scroll-top">Cerdeña</a>
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="menu.html">Carta</a></li>
                        <li><a href="reservar.php">Reserva</a></li>
                        <li><a href="contact.html">Contacto</a></li>
                        <li><a href="../Home/Index.html">Volver a Sterlas Paradise</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->


    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Reserva</h1>
                    <p>Disfruta de nuestra comida</p>
                    <p>Para reservar en Cerdeña, rellene el siguiente formulario y un asesor se pondrá en contacto con usted para garantizar su asistencia.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="inner-page">
        <div class="container" id="divEspacio">
         
          <section id="reserva" class="reserva">
            <form action="../../acciones/guardar_reserva.php" method="GET" role="form">
              <input type="hidden" name="restaurante" value="2"/>
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
                    <option class="form-control" name="numpersonas" id="#">Nº de personas*</option>
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
              <p></p>
              <div class="row">
                <div class="col-md-4">
                  <input type="date" class="form-control" name="fecha" placeholder="Fecha" required />
                </div>
                <div class="col-md-8 form-group mt-3 mt-md-0">
                 <fieldset>
                     <!--<select class="form-control" required name='hora' onchange='this.form.()'>-->
                        <select class="form-control" required name='hora'>
                        <optgroup label="Almuerzo">

                            <option value="13:00">13:00</option>
                            <option value="13:30">13:30</option>
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                            <option value="15:00">15:00</option>
                        </optgroup>
                    
                        <optgroup label="Cenas">
                            <option value="20:00">20:00</option>
                            <option value="20:30">20:30</option>
                            <option value="21:00">21:00</option>
                            <option value="21:30">21:30</option>
                            <option value="22:00">22:00</option>
                        </optgroup>
                        </select>
                 </fieldset>
                </div>
                <div class="row fila">
                    <div class="col-md-6 form-group">
                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Tu nombre" maxlength="50" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Tu apellido" maxlength="50" required>
                    </div>
                </div>
                <p></p>
                <div class="row fila">
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
            </div>
            <p></p>
            <!--
              <div class="my-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido enviado.</div>
              </div>
             -->
              <div class="text-center">
                  <button type="submit" class="realizarRes">Reservar</button>
              </div>
            </form>
            <p></p>
            <p>* Para reservas de más de 9 personas, contactar por telefono.</p>
          </section>
        </div>
      </section><!-- End reserva 1 -->





    <section class="sign-up">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Suscribete a nuestra newsletters</h2>
                    </div>
                </div>
            </div>
            <form id="contact" action="" method="get">
                <div class="row">
                    <div class="col-md-4 col-md-offset-3">
                        <fieldset>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Escriba su correo aquí..." required>
                        </fieldset>
                    </div>
                    <div class="col-md-2">
                        <fieldset>
                            <button type="submit" id="form-submit" class="btn">Enviar</button>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </section>


    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Copyright &copy; 2017 Cerdeña restaurant</p>
                </div>
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="http://www.facebook.com/templatemo" target="_parent"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p></p>
                </div>
            </div>
        </div>
    </footer>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>