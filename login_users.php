
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- para que las versiones del explorador usen la ultima version-->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- para que funcione en la escala de any device-->
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php
    if(isset($_POST['submit'])){
        require("connection.php");  #siempre que se va a manipular info de la BD primero necesitamos hacer la conexion
            
         function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
             $data = htmlspecialchars($data);
            return $data;
        }

        $email = validate($_POST['email']);
        $password = validate($_POST['password']);

        $euser = "SELECT username FROM usuarios WHERE email='$email' AND pass='$password'";   

        $res = mysqli_query($connection, $euser) or die("Query error");

        if(mysqli_num_rows($res) === 1){
            $row = mysqli_fetch_assoc($res);
            #print_r $row['username'];  #falta recuperar el username
            header("Location: index_in.html");
            exit();
        }
        else{
            header("Location: login_users.php?error=Correo o contraseña incorrecta");
            exit();
        }
        mysqli_close($connection);
    }          
?>



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
                            <a id="cart" href="cart.html">
                                <div id="cart-img"></div>
                            </a>
                        </li>
                    </ul><!-- #nav-list -->
                </div><!-- .collapse .navbar-collapse -->
            </div><!-- .container -->
        </nav><!-- #header-nav -->
    </header>

    

    <form class="formulario" method="post">
        <h1 id="login-title">Iniciar Sesi&oacuten</h1>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <div class="container-login">

            <div class="email-box">
                <i class="fas fa-envelope icon"></i>
                <input type="text" placeholder="Correo electrónico" id="email" name="email" required>
            </div>

            <div class="pass-box">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña" id="password" name="password" required>
            </div>
            <input type="submit" name="submit" value="Ingresar" class="button">
            
            <p>¿No tienes una cuenta? <a class="link" href="signup.html">Registrate</a></p>
            <p>¿Eres un administrador? <a class="link" href="login_admins.php">Bienvenido</a></p>
            
        </div>
    </form>

    <!-- jQuery (Bootstrap JS plugins depend on it) -->
    <script src="https://kit.fontawesome.com/6212ed9a55.js" crossorigin="anonymous"></script>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="login_users.js"></script>
</body>
</html>