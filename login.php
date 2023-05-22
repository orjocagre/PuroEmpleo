<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="stylesN.css" type="text/css">

    <title>register</title>
</head>


<body>
<div class="form-container">
    <form action="sesion.php" method="post">

        <h3>Que bueno que estas de vuelta</h3>

        <?php
        include "config.php"
        include "controlador/controlador_login.php"
        ?>
        <input type="text" name="user" placeholder="Ingrese su usuario" required class="box">
        <br> </br>

        <input type="contraseña" name="pass" placeholder="Ingrese su contraseña" required class="box">
        <br> </br>

        <button type="submit" name="btningresar" class="btn-estilo"> Ingresar </button>
        <br> </br>

        <P> No tienes una cuenta? <a href="register.php"> Registrate ahora! </a></P>
    </form>
</div>
    
</body>
</html>