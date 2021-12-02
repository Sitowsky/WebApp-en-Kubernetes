
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];


	$sql="DELETE from proveedor where id_proveedor='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>