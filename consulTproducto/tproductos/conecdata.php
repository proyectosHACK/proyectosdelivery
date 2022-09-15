<?php
    $cn=mysqli_connect("localhost","root","","tienda_online");

    //tabla productos
    $id_p=$_POST['idp'];
    $nombre_p=$_POST['nombrep'];
    $descrip=$_POST['descripcionp'];

    //inseet

    $insert="INSERT INTO productos(nombre_producto,descrepcion_producto) VALUES('$nombre_p','$descrip')";
    $query=mysqli_query($cn,$insert);


   if ($query) {
        // code...
        echo "se registro ala ";

    }else{
        echo "no de registro";
    }



?>