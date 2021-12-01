<?php
        #require("connection.php");
        session_start();
        require("session.php"); 
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- para que las versiones del explorador usen la ultima version-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- para que funcione en la escala de any device-->
    <title>VISION_NET</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />

    <!-- JS to retrieve data from DB -->
    <script type="text/javascript">
        function changeUser() { 
            document.getElementById("user").innerHTML = "user retrieved from DB";
        }
    </script>
</head>

<body>
    
    <header>
        <nav id="header-nav" class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.html" class="pull-left">
                        <!-- visible-md visible-lg -->
                        <div class="hidden-xs hidden-sm" id="logo-img"></div>
                    </a>

                    <div class="navbar-brand">
                        <a href="index.html">
                            <h1>VISION_NET</h1>
                        </a>
                    </div>

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#collapsable-nav" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div id="collapsable-nav" class="collapse navbar-collapse">
                    <ul id="nav-list" class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index_in.html">
                                Inicio</a>
                        </li>
                        <li>
                            <a href="products_in.html">
                                Productos</a>
                        </li>
                        <li>
                            <a href="contact_in.html">
                                Contacto</a>
                        </li>
                        <li>
                            <a id="user" href="venta_cliente.html">
                            <?php $var=implode($_SESSION["ID"]); echo $var; ?></a>
                        </li>
                        <li>
                            <a id="s-up" href="logout.php">
                                Cerrar Sesion</a>
                        </li>
                        <li style="padding-left: 15px;">
                            <a id="cart" href="cart_in.php">
                                <div id="cart-img"></div>
                            </a>
                        </li>
                    </ul><!-- #nav-list -->
                </div><!-- .collapse .navbar-collapse -->
            </div><!-- .container -->
        </nav><!-- #header-nav -->
    </header>

    <div id="main_content" class="container">
        <div class="jumbotron"></div>

        <h2 id="meet-us">Conoce nuestra amplia variedad de productos</h2>
        <div id="home-tiles" class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <a
                    href="products.html#papeleria">
                    <div id="papeleria-tile">
                        <span>papeleria</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <a
                    href="products.html#merceria">
                    <div id="merceria-tile">
                        <span>merceria</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <a
                    href="products.html#regalos">
                    <div id="regalos-tile">
                        <span>regalos</span>
                    </div>
                </a>
            </div>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <a href="https://goo.gl/maps/BEWZqYcAE3xPd4ot6" target="_blank">
                    <div id="map-tile">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15083.225217929425!2d-98.1174052!3d19.072252!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x909f0981e7568bca!2sVision_Net!5e0!3m2!1ses-419!2smx!4v1636326532300!5m2!1ses-419!2smx"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </a>
            </div>
        </div><!-- End of #home-tiles -->
    </div><!-- End of #main_content-->

    <footer class="panel-footer">
        <div class="container">
            <div class="row">
                <section id="hours" class="col-sm-4">
                    <span>Horario:</span><br>
                    Domingo-Viernes: 04:00pm - 08:30pm<br>
                    Sábado cerrado
                    <hr class="visible-xs">
                </section>
                <section id="address" class="col-sm-4">
                    <span>Dirección:</span><br>
                    Jardines de San Jóse<br>
                    Puebla, Pue. C.P: 40000
                </section>
                <section id="commitment" class="col-sm-4">
                    <p>¡Comprometidos con brindarte el mejor servicio!</p>
                    <p>Ven y conocenos, contamos con todas las medidas de seguridad ante el Covid 19</p>
                </section>
            </div>
            <div class="text-center" style="color: #f5c405;">&copy; Copyright VISION_NET 2021</div>
        </div>
    </footer>

    <!-- jQuery (Bootstrap JS plugins depend on it) -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>