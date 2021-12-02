<?php 
	require_once "conexion.php";
	$conexion=conexion();

	$cla=$_POST['KeyProductu'];
	$na=$_POST['NameProductu'];
	$des=$_POST['DesProductu'];
	$pre=$_POST['PriceProductu'];
	$idc=$_POST['IdCategoria'];
	$idp=$_POST['IdProveedoru'];
	$p=$_POST['Picture'];


	$sql="UPDATE producto set nombre_producto='$na',des_producto='$des',
			precio='$pre',url='$p',id_proveedor='$idp', id_categoria='$idc' 
			where id_producto='$cla'";
	echo $result=mysqli_query($conexion,$sql);

 ?>