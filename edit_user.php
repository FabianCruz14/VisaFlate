<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
        require("connection.php");  #siempre que se va a manipular info de la BD primero necesitamos hacer la conexion
        
        $nombre=$_POST['nombre'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        # nameA, vigencia, email, pass, eprod, eadmin,lectura
        
        $query="UPDATE usuarios SET username = '$nombre', email = '$email', pass = '$pass' WHERE username='$nombre'";
        mysqli_query($connection, $query) or die("Registry error");
        mysqli_close($connection);  #cerramos conexion con la bd
        echo'<script type="text/javascript">
            alert("Cambios guardados");
            window.location.href="index_in.html";
        </script>';

        
    ?>
</body>
</html>