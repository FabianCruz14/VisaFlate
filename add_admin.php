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
        $ide=$_POST['ide'];
        $nombre=$_POST['nombre'];
        $email=$_POST['email'];
       # $editprod=$_POST['editprod'];
        #$editadmin=$_POST['editadmin'];
        #$read=$_POST['read'];
        
        $query="INSERT INTO administradores (id, nameA, email) values ('$ide', '$nombre', '$email')";
        mysqli_query($connection, $query) or die("Registry error");
        echo'<script type="text/javascript">
            alert("Administrador registrado");
            window.location.href="add_products.html";
        </script>';

        mysqli_close($connection);  #cerramos conexion con la bd
    ?>
</body>
</html>