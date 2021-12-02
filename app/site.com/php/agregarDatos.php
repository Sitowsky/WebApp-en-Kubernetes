<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre'];


	$sql="INSERT into proveedor (nombre_proveedor)
								values ('$n')";
	echo $result=mysqli_query($conexion,$sql);

 ?>