<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- para que las versiones del explorador usen la ultima version-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- para que funcione en la escala de any device-->
    <title>VISION_NET</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/6212ed9a55.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
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
                            <a href="index.html">
                                Inicio</a>
                        </li>
                        <li>
                            <a href="products.html">
                                Productos</a>
                        </li>
                        <li>
                            <a href="contact.html">
                                Contacto</a>
                        </li>
                        <li>
                            <a href="login_users.php">
                                Iniciar sesi&oacuten</a>
                        </li>
                        <li>
                            <a id="s-up" href="signup.html" >
                                Crear cuenta</a>
                        </li>
                        <li style="padding-left: 15px;">
                            <a id="cart" href="cart.php">
                                <div id="cart-img"></div>
                            </a>
                        </li>
                    </ul><!-- #nav-list -->
                </div><!-- .collapse .navbar-collapse -->
            </div><!-- .container -->
        </nav><!-- #header-nav -->
    </header>
    <div class="inventario_container">
        <h1 style="color: #1115ee; font-weight: bold;">LISTONES</h1>
        
        <form action="guardar_carrito.php" method="post">
        <?php
            require("connection.php");

            $query="SELECT * FROM listones";
            $result=mysqli_query($connection, $query) or die ("Search error");

            
                $lapices="<table id=\"tabla_inv\">
                <tr id=\"titulo_de_tabla\"><td>IMAGEN</th>
                <td>PRODUCTO</td>
                <td>PRECIO</td>
                <td>AÑADIR AL CARRITO</td>
                </tr>";

                while($fila=mysqli_fetch_assoc($result)){
                    $nombre=$fila['nombre'];
                    $marca=$fila['marca'];
                    $descripcion=$fila['descripcion'];
                    $pVenta=$fila['pVenta'];
                    $id=$fila['id'];
                    $lapices=$lapices."<tr id=\"tabla_de_productos\"><td>"."<input type=\"hidden\" name=\"id\" value=\"$id\"/>"."</td><td>"."<input type=\"hidden\" name=\"nombre\" value=\"$nombre\"/><label name=\"nombre\">$nombre</label>"." "."<input type=\"hidden\" name=\"marca\" value=\"$marca\"/><label name=\"marca\">$marca</label>"."<br><input type=\"hidden\" name=\"descripcion\" value=\"$descripcion\"/><label name=\"descripcion\">$descripcion</label>"."</td><td style=\"font-size: 30px;\">"."$"."<input type=\"hidden\" name=\"pVenta\" value=\"$pVenta\"/><label name=\"pVenta\">$pVenta</label>"."</td><td><input type=\"image\" class=\"img_table\" src=\"images/Untitled-Artwork.png\" alt=\"submit\"></td></tr>";
                    
                }

                $lapices=$lapices."</table>";
                
                echo $lapices;
                mysqli_close($connection);
        ?>
        </form>
    </div>
    
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