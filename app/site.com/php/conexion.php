

<?php 
		function conexion(){
			$servidor="servicio-mysql";
			$usuario="root";
			$password="secret";
			$bd="datos";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>
