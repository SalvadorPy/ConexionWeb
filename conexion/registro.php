<?php 
 include 'formulario2.php';

 $nombre = $_POST['nombre'];
 $correo = $_POST['correo'];
 $proyecto = $_POST['proyecto'];
 $propuesta = $_POST['propuesta'];
 $telefono = $_POST['telefono'];

 $insertar = "INSERT INTO datos(nombre, correo, proyecto, propuesta, telefono)
 VALUES ('$nombre', '$correo', '$proyecto', '$propuesta', '$telefono')";

$resultado = mysqli_query($app_bd, $insertar);


if(! $resultado){
    die(mysqli_error($conexion));
}
else{
    echo "usuario registrado";
}

mysqli_close($conexion);
?>