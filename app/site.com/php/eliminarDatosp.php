
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="DELETE from producto where id_producto='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>