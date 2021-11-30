<?php
include("conexion.php");
$con=conectar();

if(isset($_GET['matricula'])) {
    $matricula = $_GET['matricula'];

    if(!mysqli_query($con,"DELETE FROM usuarios where matricula='".$matricula."'"))
    {
        echo "Error!";
}
else
{
echo "Accion exitosa!";
}  
}
else{
    echo "No llego el valor";
}
?>