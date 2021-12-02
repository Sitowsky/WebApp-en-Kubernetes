<?php 
	require_once "conexion.php";
	$conexion=conexion();

	$id=$_POST['clave'];


	$sql="SELECT tel_cliente FROM clientes
				where id_cliente='$id'";
	$result=mysqli_query($conexion,$sql);
	while ($ver = mysqli_fetch_row($result)) :	
		echo 	$ver[0];
	 endwhile; 
	 return $ver[0];

 ?>