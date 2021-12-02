<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre'];


	$sql="INSERT into categoria (nombre_categoria)
								values ('$n')";
	echo $result=mysqli_query($conexion,$sql);

 ?>