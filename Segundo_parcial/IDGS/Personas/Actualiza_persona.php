<?php

include '../conexion/conexion.php';
$idpersona = $_POST['id'];
$nombre = $_POST['nombre'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$sexo = $_POST['sexo'];
$curp = $_POST['curp'];

$cadenaActualizar ="UPDATE personas SET NOMBRE='$nombre', AP_PATERNO='$ap_paterno',AP_MATERNO='$ap_materno',
 SEXO='$sexo', CURP='$curp', FECHAHORA='$fechahora', ACTIVO='1', USUARIO='1' WHERE ID='$idpersona'";

$Actualizar = mysqli_query($conexion,$cadenaActualizar);
echo "ok";
?>