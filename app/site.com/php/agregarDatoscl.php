<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre'];
	$p=$_POST['tel'];
	$c=$_POST['correo'];
	


	$sql="INSERT into clientes (nombre_cliente,tel_cliente,correo)
								values ('$n','$p','$c')";
	echo $result=mysqli_query($conexion,$sql);

 ?>