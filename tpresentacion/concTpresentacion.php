<<?php 
    $cn=mysqli_connect("localhost","root","","tienda_online");
// tabla presentacion
 
    $tipo_p=$_POST['tipop'];
    $peso_p=$_POST['pesop'];
    $unidades_p=$_POST['unidadesp'];

    $insert1="INSERT INTO presentacion(tipo_presentacion,peso_producto,unidades  ) VALUES('$tipo_p','$peso_p','$unidades_p') ";
    $query1=mysqli_query($cn,$insert1);

    if ($query1) {
        // code...
        echo "se registro la tabla presentacion";
    }else{
        echo "no se registro presentacion";
    }
 ?>

 
