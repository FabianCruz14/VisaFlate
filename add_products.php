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
        $ide=$_POST['ide'];
        $nombre=$_POST['nombre'];
        $marca=$_POST['marca'];
        $description=$_POST['description'];
        $size=$_POST['size'];
        $color=$_POST['color'];
        $units=$_POST['units'];
        $price=$_POST['price'];
        $sale=$_POST['sale'];
        
        $query="INSERT INTO productos (id, nombre, marca, descripcion, tamano, colores, unidades, precioC, precioV) values ('$ide', '$nombre', '$marca', '$description', '$size', '$color', '$unidades', '$price', '$sale')";
        mysqli_query($connection, $query) or die("Registry error");
        header("Location: ventas.html");

        mysqli_close($connection);  #cerramos conexion con la bd
    ?>
</body>
</html>