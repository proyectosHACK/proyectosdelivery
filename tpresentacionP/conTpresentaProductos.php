<?php 
	 $cn=mysqli_connect("localhost","root","","tienda_online");

    //tabla productos
    $precio_p=$_POST['preciop'];

    //inseet

    $insert2="INSERT INTO productopresentacion(precio_producto) VALUES('$precio_p')";
    $query2=mysqli_query($cn,$insert2);


   if ($query2) {
        // code...
        echo "se registrpo ala presen Pro ";

    }else{
        echo "no de registro";
    }

 ?>