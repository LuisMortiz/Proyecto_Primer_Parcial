<?php
include '../conexion/conexion.php';
$datos=[];
$cadenaConsulta="SELECT 	id,nombre,descripcion,fechahora FROM perfiles where activo='1'";
$ConsultaSucursal=mysqli_query($conexion,$cadenaConsulta);
while($row=mysqli_fetch_array($ConsultaSucursal)){
    $btnEliminar="<button type='button' class='btn btn-sm btn btn-danger' onclick='eliminar($row[0])' >
    <i class='fa fa-trash' aria-hidden='true'></i></button>";
    $datos[]=[
        "id"=>$row[0],
        "nombre"=>$row[1],
        "descripcion"=>$row[2],
        "fechahora"=>$row[3],
        "opciones"=>$btnEliminar
        
        
    ];
}
echo json_encode($datos);
?>