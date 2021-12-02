<?php 
	require_once "conexion.php";
	$conexion=conexion();

	$id=$_POST['id'];
	$n=$_POST['nombre'];


	$sql="UPDATE categoria set nombre_categoria='$n'
				where id_categoria='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>