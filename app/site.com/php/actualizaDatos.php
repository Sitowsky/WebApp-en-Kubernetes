<?php 
	require_once "conexion.php";
	$conexion=conexion();

	$id=$_POST['id'];
	$n=$_POST['nombre'];


	$sql="UPDATE proveedor set nombre_proveedor='$n'
				where id_proveedor='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>