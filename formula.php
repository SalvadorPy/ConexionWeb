<?php
include 'formulario3.php';

$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$proyecto= $_POST["proyecto"];
$propuesta= $_POST["propuesta"];
$telefono= $_POST["telefono"];

$insertar= "INSERT INTO registro(nombre, correo, usuario, clave, telefono)
VALUES  ( '$nombre', '$correo', '$proyecto', '$propuesta', '$telefono');

$verificar_usuario = mysqli_query($conexion, "SELECT + FROM registro WHERE usuario = '$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo 'el usuario ya existe';
    echo <script>
    alert("usuario registrado");
    window.history.go(-1);
    </script>;
    exit;
}

$resultado =mysqli_query($conexion, $insertar);
if (!  $resultado){
    die(mysqli_error($conexion) );
} else{
echo 'usuario registrado';
}

mysqli_close($conexion);
?>