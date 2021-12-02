<?php 

	require_once "conexion.php";
	$conexion=conexion();

	$n=$_POST['clave'];
	$p=$_POST['nombre'];
	$c=$_POST['des'];
	$q=$_POST['pre'];
	$w=$_POST['img'];
	$e=$_POST['idp'];
	$r=$_POST['idc'];
	


	$sql="INSERT into producto (id_producto, nombre_producto, des_producto,
	precio,url,id_proveedor,id_categoria) values ('$n','$p','$c','$q','$w','$e','$r')";
	echo $result=mysqli_query($conexion,$sql);

 ?>