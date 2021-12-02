<?php 
	require_once "conexion.php";
	$conexion=conexion();

	$id=$_POST['idcliente'];
	$n=$_POST['nombre'];
	$t=$_POST['tel'];
	$c=$_POST['correo'];


	$sql="UPDATE clientes set nombre_cliente='$n',tel_cliente='$t',correo='$c'
				where id_cliente='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>