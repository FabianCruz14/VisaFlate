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
</head>

<body>
    <header>
        <nav id="header-nav" class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a href="vista_user.html" class="pull-left">
                        <!-- visible-md visible-lg -->
                        <div class="hidden-xs hidden-sm" id="logo-img"></div>
                    </a>

                    <div class="navbar-brand">
                        <a href="vista_user.html">
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
                            <a href="vista_user.html">
                                CUENTA</a>
                        </li>
                        <li>
                            <a href="inventario.html">
                                INVENTARIO</a>
                        </li>
                        <li>
                            <a href="ventas.php">
                                VENTAS</a>
                        </li>
                        <li>
                            <a href="an_admin.html">
                                ADMINISTRADORES</a>
                        </li>
                        <li>
                            <a id="s-up" href="index.html">
                                Cerrar sesi&oacuten</a>
                        </li>
                    </ul><!-- #nav-list -->
                </div><!-- .collapse .navbar-collapse -->
            </div><!-- .container -->
        </nav><!-- #header-nav -->
    </header>

    <h1 style="margin-left: 5%;">Pedidos</h1>

    <?php
        require("connection.php");

        $query="SELECT * FROM pedidos";
        $result=mysqli_query($connection, $query) or die ("Query error");

        
        $pedidos="<div class=\"inventario_container\"><table id=\"tabla_inv\">
        <tr id=\"titulo_de_tabla\"><th>Cliente</th>
        <th>Fecha</th>
        <th>Formato de Pago</th>
        <th>Formato de Envio</th>
        <th>Estatus de Envio </th>
        </tr><div class=\"productos_categoria\">";

        while($fila=mysqli_fetch_assoc($result)){
            $cliente=$fila['cliente'];
            $fecha=$fila['fecha'];
            $fPago=$fila['fPago'];
            $fEnvio=$fila['fEnvio'];
            $status=$fila['status'];
            $pedidos=$pedidos."<tr id=\"tabla_de_productos\"><td>".$cliente."</td><td>".$fecha."</td><td>".$fPago."</td><td>".$fEnvio."</td><td>".$status."<a href=\"venta_cliente.html\"><img src=\"./images/edit.png\" width=\"20px\" height=\"20px\"></a></td></tr>";
        }

        $pedidos=$pedidos."</div></table></div>";
        
        echo $pedidos;
        mysqli_close($connection);
    ?>


        

    <div id="contenedor_btn">
        <a id="Regresar_btn" href="vista_user.html">Regresar</a>
    </div>
    <!-- jQuery (Bootstrap JS plugins depend on it) -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>