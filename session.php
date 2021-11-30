<?php

require("connection.php");  #siempre que se va a manipular info de la BD primero necesitamos hacer la conexion
 
session_start();// Iniciando Sesion
// Guardando la sesion
$user_check=$_SESSION['newsession'];
// SQL Query para completar la informacion del usuario
$ses_sql=mysqli_query($connection, "select nameA from administradores where id='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['nameA'];
if(!isset($login_session)){
mysqli_close($connection); // Cerrando la conexion
#header('Location: index.php'); // Redirecciona a la pagina de inicio
}
?>