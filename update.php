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


$sql="UPDATE empleados SET  codigo='$codigo',nombre='$nombre',apellidos='$apellidos',documento='$documento',direccion='$direccion',telefono='$telefono',foto='$foto' WHERE id_empleado='$id_empleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:index.php");
    }
?>