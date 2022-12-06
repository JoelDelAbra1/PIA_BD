<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<style>
body {
  background-image: url('fondo2.webp');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<section class="form">
<?php

$nombre_empleado = $_GET['nombre_empleado'];
$permiso_id=$_GET["permiso_id"];
?>
    <center>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

        <br>
        <h1>Iniciar Sesion</h1>
        <input type="text" name="usuario" placeholder="Usuario">
        <br>
    
        <input type="text" name="pass" placeholder="Contraseña">
        <br>
        <button type="submit" name = "enviar">Ingresar</button>
        </form>
    </center>


</body></section>
</html>