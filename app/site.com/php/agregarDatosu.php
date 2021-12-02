<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre'];
	$p=$_POST['password'];


	$sql="INSERT into user_demo (firstname,lastname,code,status)
								values ('$n','$n','$p','0')";
	echo $result=mysqli_query($conexion,$sql);

 ?>
