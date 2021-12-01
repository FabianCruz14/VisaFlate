<?php
        #require("connection.php");
        session_start();
        require("session.php"); 
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- para que las versiones del explorador usen la ultima version-->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- para que funcione en la escala de any device-->
    <title>Carrito</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                            <a href="venta_cliente.html">
                            <?php $var=implode($_SESSION["ID"]); echo $var; ?></a>
                        </li>
                        <li>
                            <a id="s-up" href="index.html">
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
    <h1 class="titulo_carrito">Carrito de Compras</h1>
    <div class="cart-page" >

    <?php
        require("connection.php");

        $query="SELECT * FROM carrito";
        $result=mysqli_query($connection, $query) or die ("Search error");

        $carro="<div class=\"cart-page\"><table class=\"productos-tabla\"><div class=\"cart-items\"><div class=\"cart-row\">
        <tr class=\"th_2\"><td>IMAGEN</th>
        <td class=\"th_2\">PRODUCTO</td>
        <td class=\"th_2\">CANTIDAD</td>
        <td class=\"th_2\">SUBTOTAL</td>
        </tr>";

        while($fila=mysqli_fetch_assoc($result)){
            $datos=$fila['datos'];
            $precio=$fila['precio'];
            $carro=$carro."<tr class=\"tablatr\"><td>".$fila['']."</td><td class=\"th_c\">"."<div class=\"cart-info\">"."<div><p class=\"th_c nombre_producto cart-item-title\">$datos</p><h5 class=\"cart-price\">$$precio</h5><br><button class=\"btEliminar\"><small>Eliminar</small></button></div></div></td><td class=\"th_c\"><input class=\"cart-quantity-input\" type=\"number\" value=\"1\"></td><td class=\"th_c subtotal\">$".$precio."</td></tr>";

        }
        
        $carro=$carro."</div></div></table></div>";


        $envio="<div class=\"cart-page\"><table class=\"envio\"><tr class=\"tablatr\">
        <th class=\"th_3\">Modo de Envio</th>
        <th class=\"th_3\">Tipo de pago</th>
        <th class=\"th_3\">Subtotal</th></tr>
        <tr class=\"tablatr\"><td class=\"th_c\"><div class=\"modo_de_envio \">
        <input type=\"radio\" id=\"envio_entrega\" name=\"envios\" value=\"HTML\"><label for=\"envio_entrega\">PUNTO DE ENTREGA</label><br>
        <small>Elije uno de los siguientes puntos de entrega</small><br><select id=\"punto_entrega\" name=\"punto_de_entrega\">
        <option value=\"VISION_NET\">VISION_NET</option>
        <option value=\"plaza_loreto\">Plaza Loreto</option>
        <option value=\"parque_puebla\">Parque Puebla</option>
        <option value=\"plaza_angelopolis\">Plaza Angelopolis</option>
        <option value=\"BUAP\">C.U BUAP</option>
        <option value=\"galerias_serdan\">Galerias Serdan</option></select><br><br>
        <input type=\"radio\" id=\"envio_nacional\" name=\"envios\" value=\"envio_nacional\">
        <label for=\"envio_nacional\">ENVIO NACIONAL</label><br>
        <label for=\"direccion\">Direccion:</label>
        <input type=\"text\" id=\"direccion\" name=\"direccion\"></div></td>
        <h5>Por ahora se cobrara el minimo costo de envio, despues de pesar tu pedido se enviara un email con el cargo de envio actualizado.</h5>
        <td class=\"th_c\"><div class=\"modo_de_envio\">
        <input type=\"radio\" id=\"deposito\" name=\"pagos\" value=\"deposito\">
        <label for=\"deposito\">Deposito a cuenta de banco</label><br>
        <small>Se mandara el numero de cuenta y referencia a tu email</small><br><br>
        <input type=\"radio\" id=\"Efectivo\" name=\"pagos\" value=\"Efectivo\">
        <label for=\"Efectivo\">Efectivo</label><br>
        <small>Solo aplica a puntos de entrega</small></div></td>
        <td class=\"th_c cart-total-envio\">$50.00</td></tr>
        </table></div>";

        $precio="<div class=\"cart-page\">
        <div class=\"precio_total\">
            <table>
                <tr>
                    <td class=\"th_c\">Subtotal</td>
                    <td class=\"th_c cart-total-subtotal\">$200.00</td>
                </tr>
                <tr>
                    <td class=\"th_c\">Envio</td>
                    <td class=\"th_c cart-total-envio\">$200.00</td>
                </tr>
                <tr>
                    <td class=\"th_c\">Total</td>
                    <td class=\"th_c cart-total-price\">$200.00</td>
                </tr>
            </table>
        </div>
        <div class=\"precio_total\">
            <table>
                <tr>
                    <td class=\"th_c\"><button class=\"pagar_boton\" type=\"button\">FINALIZAR PEDIDO</button> </td>
                </tr>
            </table>
        </div>
    </div>";
        

        echo $carro;
        echo $envio;
        echo $precio;
        mysqli_close($connection);
    ?>
    
                                  
        
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
    <script src="js/script.js" async></script>
</body>
  
</html>