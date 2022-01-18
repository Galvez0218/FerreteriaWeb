<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Ferreteria VELCAM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Icono -->
    <link rel="icon" href="{{asset('/icon.png')}}" type="image/png" />
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}" 
    />



    <?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if ($pagina == 'invitados' || $pagina == 'index') {
        echo '<link rel="stylesheet" href="css/colorbox.css">';
    } else if ($pagina == 'conferencia') {
        echo '<link rel="stylesheet" href="css/lightbox.css">';
    }
    ?>


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Oswald:wght@300;400;700&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <meta name="theme-color" content="#fafafa">
    <script src="https://kit.fontawesome.com/1a2bd5a108.js" crossorigin="anonymous"></script>

    <!-- SCRIPT PAGO CON PAYPAL -->
    <script src="https://www.paypal.com/sdk/js?client-id=Af47qW5mnhYAMwBLNXQW108GV8uA9uYR5Aisif1BKbDyIBlZNBnTTRNbWnQHTWxxG8z9PlpeE_qbcjHJ&locale=es_ES"> </script>

    <!-- token de seguridad -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />


</head>

<body class="<?php echo $pagina ?>">
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('status'))
    <script>
        Swal.fire({
            position: 'top-center',
            icon: 'error',
            title: 'Lo sentimos! El pago no se pudo realizar',
            showConfirmButton: false,
            timer: 2500
        });
    </script>
    @endif

    <header class="site-header">
        <div class="hero">
            <div class="contenido-header">
                <nav class="redes-sociales">
                    <a href="https://www.facebook.com/TurismoShima"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </ul>
                </nav>
                <!-- <div class="informacion-evento">
                    <div class="clearfix">
                        <p class="fecha"><i class="fa fa-calendar" aria-hidden="true"></i> 11 Noviembre</p>
                        <p class="ciudad"><i class="fa fa-map-marker" aria-hidden="true"></i> Satipo, Perú</p>
                    </div>
                </div> -->
                <!--.informacion-evento-->

            </div>
        </div>
        <!--.hero-->
    </header>

    <div class="barra">
        <div class="contenedor clearfix">
            <div class="logo">
                <a href="{{route('prin.welcome')}}">
                    <img src="images/03.jpeg" alt="shima">
                </a>
            </div>

            <div class="menu-movil">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav class="navegacion-principal clearfix">
                <a href="#">mi listado</a>
                <a href="#">Encuentranos en</a>
                <!-- <a href="#">Registrarse</a>
                <a href="#">Iniciar sesion</a> -->
            </nav>
        </div>
        <!--.contenedor-->
    </div>
    <!--.barra-->

    <section class="seccion contenedor">
        <h2>Listado</h2>
        <form class="registro" action="/pagado'" method="POST">

            <div class="col-md-6 login-form-2">
               
                {{csrf_field()}}
                <!-- <h3>Todos los días</h3> -->
                <h3>Verifique los productos</h3>
                <div class="col register-content">

                    <div class="row form-group">
                        <label for="inpdni" class="form-control-label label-title">NOMBRES</label>
                        <!-- <p name="fname" id="fname" class="text">n</p> -->
                    </div>
                    <div class="row form-group">
                        <label for="inpdni" class="form-control-label label-title">PRECIO</label>
                        <!-- <p id="lname" name="lname" class="text">ap</p> -->
                    </div>

                    <div class="row form-group">
                        <label for="inpdni" class="form-control-label label-title">MEDIDA</label>
                        <!-- <p id="precio" name="precio" class="text"></p> -->
                    </div>

                    <div class="row form-group">
                        <label for="inpdni" class="form-control-label label-title">MARCA</label>
                        <!-- <p id="dni" name="dni" class="text"></p> -->
                    </div>


                    <div class="row form-group">
                        <label for="inpdni" class="form-control-label label-title">MODELO</label>
                        <!-- <p id="origen" name="origen" class="text"></p> -->
                    </div>

                    <div class="row form-group">
                        <label for="inpdni" class="form-control-label label-title">DESTINO</label>
                        <!-- <p id="destino" name="destino" class="text"></p> -->
                </div>
                <!-- </form> -->
            </div>
            <!--#paquetes-->
        </form>
    </section>



    <footer class="site-footer">
        <div class="contenedor clearfix">
            <div class="footer-informacion">
                <h3>Sobre <span>fERRETERIA VELCAM</span></h3>
                <p>Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et. Ut bibendum finibus massa non molestie. Curabitur urna metus, placerat gravida lacus ut, lacinia congue orci. Maecenas luctus mi at ex
                    blandit vehicula. Morbi porttitor tempus euismod.</p>
            </div>
            <div class="ultimos-tweets">
                <h3>Últimos <span>tweets</span></h3>
                <a class="twitter-timeline" data-height="400" data-theme="light" data-link-color="#fe4918" Tweets by </a>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="menu">
                <h3>Redes <span>sociales</span></h3>
                <nav class="redes-sociales">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </nav>
            </div>
        </div>

        <p class="copyright">
            Todos los derechos Reservados a VELCAM GTA 2022.
        </p>



        <!-- Begin MailChimp Signup Form -->
        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            #mc_embed_signup {
                background: #fff;
                clear: left;
                font: 14px Helvetica, Arial, sans-serif;
            }

            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
             We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>

    </footer>


    <script src="{{asset('js/vendor/modernizr-3.8.0.min.js')}}"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        (window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>'))
    </script>


    <?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if ($pagina == 'invitados' || $pagina == 'index') {
        echo '<script src="js/jquery.colorbox-min.js"></script>';
    } else if ($pagina == 'conferencia') {
        echo '<script src="js/lightbox.js"></script>';
    }
    ?>

    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>



    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <!-- <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview');
    </script> -->
    <script src="https://www.google-analytics.com/analytics.js" async></script>

</body>

</html>