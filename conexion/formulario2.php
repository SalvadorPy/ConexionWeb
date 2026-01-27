<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectar con una base de datos</title>
   
</head>
<body>
    <?php 
    //conexion a la base de datos
    $anfitrion = 'localhost';
    $usuario = 'root';
    $database = 'cecyteq';
    $contraseña = '';
    $puerto = '3306';

    $app_bd = mysqli_connect($anfitrion, $usuario, $contraseña, $database, $puerto);
    

    
    ?>
    
</body>
</html>