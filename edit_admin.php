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
        $vigency=$_POST['vigency'];
        $editprod=$_POST['editprod'];
        $editadmin=$_POST['editadmin'];
        $read=$_POST['read'];                   # nameA, vigencia, email, pass, eprod, eadmin,lectura
        
        
        $query="UPDATE administradores SET nameA = '$nombre', vigencia = '$vigency', email = '$email', pass = '$pass', eprod = '$editprod', eadmin = '$editadmin', lectura = '$read' WHERE nameA = '$nombre'";
        mysqli_query($connection, $query) or die("Registry error");
        echo'<script type="text/javascript">
            alert("Cambios guardados");
            window.location.href="vista_user.html";
        </script>';

        mysqli_close($connection);  #cerramos conexion con la bd
    ?>
</body>
</html>