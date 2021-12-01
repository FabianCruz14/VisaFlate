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
        $marca=$_POST['marca'];
        $description=$_POST['description'];
        $category=$_POST['category'];
        $size=$_POST['size'];
        $color=$_POST['color'];
        $units=$_POST['units'];
        $price=$_POST['price'];
        $sale=$_POST['sale'];
        
        $query="INSERT INTO $category values ('$ide', '$nombre', '$marca', '$description', '$size', '$color', '$units', '$price', '$sale')";
        mysqli_query($connection, $query) or die("Registry error");

        mysqli_close($connection);  #cerramos conexion con la bd
        echo'<script type="text/javascript">
            alert("Producto registrado");
            window.location.href="inventario.html";
        </script>';

        
    ?>
</body>
</html>