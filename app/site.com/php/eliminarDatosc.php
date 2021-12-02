
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="DELETE from categoria where id_categoria='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>