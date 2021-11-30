<?php
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM usuarios"; 
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>	


<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Document</title>
</head>
<h1 style="color:navy; width:100%; font-size:200%; text-align: center;">
Formulario
</h1>

<form style="background-color:paleturquoise">
    <fieldset>
        <center> 
<form action="insertar.php" method="post">
<p>Matricula<input type="text" name="matricula" placeholder="ingrse su matricula"></p>
<p>Nombre completo <input type="text" name="nombre completo" placeholder="ingrse su nombrecompleto"></p>
<p>Grupo <input type="text" name="grupo" placeholder="ingrse su grupo"></p>
<p>Correo electronico <input type="email" name="email" placeholder="ingrese su correo"></p>
<p>Comentario<input type="text" name="comentario" placeholder="ingrse su comentario"></p>
<p>contraseña <input type="password" name="password" placeholder="ingrse su contraseña"></p>

</center>
</form>
<center>
<input type="submit" class="btn btn-primary" value="Registrar">
</form>
 
<form action="insertar.php" method="POST">
<input type="submit" class="btn btn-primary" value="Insertar">
</form>

<form action="lista.php" method="POST">
<input type="submit" class="btn btn-primary" value="Buscar">
</form>

<form action="lista.php" method="POST">
<input type="submit" class="btn btn-primary" value="Eliminar">
</form>





</center>
</fieldset>
</body>
</html>