<?php 
// se inclue el archivo de coneccion
include("conf/conexion.php");
//Se hase una conculta de la tabla de datos 
// se crea una bariable a la que se asicna la consulta
$consulta="SELECT * FROM productos ";
?>
<!-- la estructura de html para el formulario-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar elementos</title>
</head>
<body>
    <center>
        <div class="Datostos">id producto</div>
        <div class="nombre">nombre producto</div>
        <div class="apellido">precio unitario</div>
        <div class="dni">descripcion</div>
        <div class="correo">cantidad</div>
        <!--crear una variable de resultado de la consulta -->
        <?php 
        // la funcion de mysqli_query es para consulta de la tabla
        $resultado=mysqli_query($conexion,$productos);
        // se crea un while para todos los campos o datos de la tabla
        while($row=mysqli_fetch_assoc($resultado)){
        ?>
            <div class="id" style="color:blue;"> <?php echo $row["id_producto"];?> </div>
            <div class="id" style="color:blue;"> <?php echo $row["nombre_producto"];?> </div>
            <div class="id" style="color:blue;"> <?php echo $row["precio_producto"];?> </div>
            <div class="id" style="color:blue;"> <?php echo $row["descripcion_producto"];?> </div>
            <div class="id" style="color:blue;"> <?php echo $row["unidades"];?> </div>
        <?php 
        }
        ?>
    </center>
</body>
</html>