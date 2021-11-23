<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registro completo</h1>

    <?php
        require("connection.php");  #siempre que se va a manipular info de la BD primero necesitamos hacer la conexion
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        $query="INSERT INTO usuarios values ('$username', '$email', '$password')";
        mysqli_query($connection, $query) or die("Registry error");
        header("Location: index_in.html");

        mysqli_close($connection);  #cerramos conexion con la bd
    ?>
</body>
</html>