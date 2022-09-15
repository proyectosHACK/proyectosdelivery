
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>mostrar datos de la ta P</title>
</head>
<body>

	<center>
		
		<label> motrar todos los datos del tabla de productos </label>		

		<div class="col-8">
			<table class="table">
				<!-- SUB TUTULOS DE LA TABLA-->
				<thead>
					<tr>
						<th scope="col">id producto</th>
						<th scope="col">Nombre P</th>
						<th scope="col">Descripcion P</th>
						<th scope="col">id  categoria</th>
						<th scope="col">id decoracion</th>
						<th scope="col">id carrito C</th>
						<th scope="col">id  oferta</th>
					</tr>
				</thead>
				<!-- MUESTRA TODOS LOS DATOS DE PRODUCTO A LA TABLA -->
				<tbody>
					<?php 
						include ("tproductos/conecdata.php");
						$consultaP="SELECT *  FROM productos";
						// CONSULTA A LA BASE DE DATOS 

						$cnsql=mysqli_query($cn,$consultaP);

						// se crea while para  mostar tosdos los datos del campo 
						while ($row=mysqli_fetch_assoc($cnsql)) {
							// code...
					?>
					<tr>
						<td> <center> <?php echo $row["id_producto"]; ?></center>  </td>
						<td> <center> <?php echo $row["nombre_producto"]; ?> </center></td>
						<td> <center><?php echo $row["descrepcion_producto"]; ?></center>  </td>
						<td> <center><?php echo $row["id_categoria"]; ?></center>  </td>
						<td> <center><?php echo $row["id_decoracion"]; ?></center>  </td>
						<td> <center><?php echo $row["id_carritocompra"]; ?></center>  </td>
						<td> <center><?php echo $row["id_oferta"]; ?></center>  </td>
						<td> <a href="Mproducto.php"> <button>Modificar</button> </a> </td>
						<td> <a href=""> <button>Eliminar</button> </a> </td>
					</tr>
					<?php 
						} 
					?>
				</tbody>
			</table>
		</div>

	</center>

</body>
</html>