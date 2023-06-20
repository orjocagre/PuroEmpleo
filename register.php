<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = ($conexion, $_POST['nombre_usuario']);
   $email = ($conexion, $_POST['correo']);
   $pass = ($conexion, md5($_POST['pass']));
   $cpass = ($conexion, md5($_POST['cpassw']));

   $select_users = ($conexion, "SELECT * FROM usuario WHERE correo = '$email' AND password = '$pass'");

   if(pg_num_rows($select_users) > 0){
      $message[] = "este usuario ya existe!";
   }else{
      if($pass != $cpass){
         $message[] = "confirmacion de contraseña no es la misma!";
      }else{
         pg_query($conexion, "INSERT INTO usuario(nombre_usuario, password, correo) VALUES('$user', '$cpass', '$email'");
         $message[] = "registro exitosó";
         header("Location:index.php");
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
<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<div class="form-container">

    <form action="" method="post">

        <h3>registrate ahora</h3>

        <input type="text" name="name" placeholder="Ingrese un nombre de usuario" required class="box">

        <input type="email" name="email" placeholder="Ingrese su email" required class="box">

        <input type="contraseæa" name="password" placeholder="Ingrese su contraseña" required class="box">

        <input type="contraseæa" name="cpassword" placeholder="Confirme su contraseña" required class="box">


        <input type="submit" name="submit" value="registrarse" class="btn">

        <P> ya tienes una cuenta? <a href="login.php"> Inicia Sesion! </a></P>
    </form>
</div>
    
</body>
</html>
