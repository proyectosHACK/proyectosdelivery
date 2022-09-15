
<?php 
	$cn=mysqli_connect("localhost","root","","tienda_online");

	// se hace una consulta de datos
	//tabla productos modificar:
    $id_p=$_POST['idp'];
    $nombre_p=$_POST['nombrep'];
    $descrip=$_POST['descripcionp'];

    //inseet

    $insert="ALTER TABLE `productos` ADD `descripcion` VARCHAR(50) NOT NULL AFTER `nombre`, ADD `detalle` VARCHAR(50) NOT NULL AFTER `descripcion`";
    $query=mysqli_query($cn,$insert);
    

   if ($query) {
        // code...
        echo "se modifico c ";

    }else{
        echo "no de registro";
    }
?>