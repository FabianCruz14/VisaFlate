<?php

if(isset($_POST['submit'])){
    # session_start();
     require("connection.php");  #siempre que se va a manipular info de la BD primero necesitamos hacer la conexion
         
      function validate($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
     }

     $email = validate($_POST['email']);
     $password = validate($_POST['password']);

     $eadmin = "SELECT username FROM usuarios WHERE email='$email' AND pass='$password'";   

     $res = mysqli_query($connection, $eadmin) or die("Query error");
     $fila=mysqli_fetch_assoc($res);
     if($fila == NULL){
        mysqli_close($connection);
        header("Location: login_users.php?error=Correo o contraseña incorrecta");
        exit();

     }
     else{
        session_start();
        $_SESSION["ID"]=$fila;
        mysqli_close($connection); 
        header("Location: index_in.php"); 
        exit();         
     }
     
 }          
?>