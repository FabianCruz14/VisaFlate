<?php
    # para conectarse a la base de datos se necesita:
    $host="localhost"; # el servidor
    $user="juan"; # elusuario
    $pas="carlos"; # la contraseña
    $bd="users"; # el nombre de la base de datos
    
    # variable que almacenara la coneccion a realizar
    $connection=mysqli_connect($host, $user, $pas, $bd) or die("Connection error");
?>