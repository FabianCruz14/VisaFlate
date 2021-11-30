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
        $descripcion=$_POST['descripcion'];
        $tamano=$_POST['tamano'];
        $colores=$_POST['colores'];
        $unidades=$_POST['unidades'];
        $pCompra=$_POST['pCompra'];                   # nameA, vigencia, email, pass, eprod, eadmin,lectura
        $pVenta=$_POST['pVenta'];  
        $category=$_POST['category'];
        
        $query="UPDATE $category SET nombre = '$nombre', marca = '$marca', descripcion = '$descripcion', tamano = '$tamano', colores = '$colores', unidades = '$unidades', pCompra = '$pCompra', pVenta = '$pVenta' WHERE id = '$ide'";
        mysqli_query($connection, $query) or die("Registry error");
        echo'<script type="text/javascript">
            alert("Cambios guardados");
            window.location.href="inventario.html";
        </script>';
        
        mysqli_close($connection);  #cerramos conexion con la bd
    ?>
</body>
</html>