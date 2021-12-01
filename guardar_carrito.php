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

        $id=$_POST['id'];
        
        
        $query="SELECT * FROM productos WHERE id = $id" ;
        if($result=mysqli_query($connection, $query) or die("No such product")){
            $fila=mysqli_fetch_assoc($result);
            $nombre=$fila['nombre'];
            $marca=$fila['marca'];
            $descripcion=$fila['descripcion'];
            $pVenta=$fila['pVenta'];
            
            $datos=$nombre." ".$marca." ".$descripcion;
            
            $query2="INSERT INTO carrito values ('$datos', '$pVenta', 0)" ;
            mysqli_query($connection, $query2) or die("Add error");
            echo'<script type="text/javascript">
                window.location.href="javascript:history.back()";
            </script>';
        }
        
        mysqli_close($connection);  #cerramos conexion con la bd
    ?>


<script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>