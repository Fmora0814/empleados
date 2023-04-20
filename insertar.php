<?php
include("conexion.php");
$con=conectar();

$id_empleado=$_POST['id_empleado'];
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$documento=$_POST['documento'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$foto=$_POST['foto'];


$sql="INSERT INTO empleados VALUES('$id_empleado','$codigo','$nombre','$apellidos','$documento','$direccion','$telefono','$foto')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>