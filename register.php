<?php

include 'cofinx.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['user']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['passw']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassw']));
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `usuarios` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'este usuario ya existe!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirmacion de contraseña no es la misma!';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(user, email, password, user_type) VALUES('$user', '$email', '$cpass', '$user_type')") or die('query failed');
         $message[] = 'registro exitosó!';
         header('location:login.php');
      }
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link rel="stylesheet" href="stylesN.css">

<body>

<div class="form-container">

    <form action="" method="post">

        <h3>registrate ahora</h3>

        <input type="text" name="name" placeholder="Ingrese un nombre de usuario" required class="box">

        <input type="email" name="email" placeholder="Ingrese su email" required class="box">

        <input type="contraseæa" name="password" placeholder="Ingrese su contraseña" required class="box">

        <input type="contraseæa" name="cpassword" placeholder="Confirme su contraseña" required class="box">

        <select name="user_type">

        <option value="user">user</option>

        <option value="admin">admin</option>

        </select>
        <input type="submit" name="submit" value="registrarse" class="btn">

        <P> ya tienes una cuenta? <a href="login.php"> Inicia Seccion! </a></P>
    </form>
</div>
    
</body>
</html>
