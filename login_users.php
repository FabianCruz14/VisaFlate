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
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
        require("connection.php");  #siempre que se va a manipular info de la BD primero necesitamos hacer la conexion
        $email=$_POST['email'];
        $password=$_POST['password'];

        $query = "SELECT username FROM user WHERE email='$email'";
        $res = mysqli_query($connection, $query) or die ("Query error");

        header("location: contact.html");
        mysqli_close($connection);
    }
        
        
        # BUSQUEDA


        

        #$query="INSERT INTO users values ('$username', '$email', '$password')";
        #mysqli_query($connection, $query) or die("Registry error");

        #$query="SELECT * FROM users";

        #$res=mysqli_query($connection, $query) or die("Query error");

        # forma de presentar resultados
        #$table="<table>
        #<tr><th>Username</th>
        #<th>Email</th>
        #<th>Password</th>
        #</tr>";

        #while($row=mysqli_fetch_assoc($res)) {
         #   $table=$table."<tr><td>".$row['username']."</td><td>".$row['email']."</td><td>".$row['password']."</td></tr>";
        #}

        #$table=$table."</table>";
        #echo $table;

        
    ?>
</body>
</html>