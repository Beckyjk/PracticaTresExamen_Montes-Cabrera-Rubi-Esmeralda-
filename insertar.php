<?php
include("conexion.php");


$v1=$_POST['matricula'];
$v2=$_POST['nombre_completo'];
$v3=$_POST['grupo'];
$v4=$_POST['email'];
$v5=$_POST['comentario'];
$v6=$_POST['password'];

insertar($v1,$v2,$v3,$v4,$v5,$v6);

function insertar($v1,$v2,$v3,$v4,$v5,$v6){
    $con=conectar();

if(!mysqli_query($con,"INSERT INTO usuarios(matricula,nombre_completo,grupo,email,comentario,password) VALUES('".$v1."','".$v2."','".$v3."','".$v4."','".$v5."','".$v6."')"))
    {
        echo "Error!";
    }
else
{
echo"Accion exitosa";

}
}

?>