<?php
require '../conexion/conexion.php';

$nombreUsuario = $_POST['nombreUsuario'];
$password = $_POST['password'];

if (empty($nombreUsuario) || empty($password)) {
  
    header("Location: index.php?error=campos vacios");
    exit();
}

$sql = "SELECT * FROM usuarios WHERE nombreUsuario='$nombreUsuario'";
$result = $conexion->query($sql);


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
  
    if ($password == $row['password']) {
        if ($row['activo'] == 1) {
            header("Location: ../Menu/inicio.php");
            exit();
        } else {
            header("Location: index.php?error=Activo");
            exit();
        }
    } else {
      
        header("Location: index.php?error=Contraseña Incorrecta");
        exit();
    }
} else {
  
    header("Location: index.php?error=sin reguistros");
    exit();
}

$conexion->close();
?>