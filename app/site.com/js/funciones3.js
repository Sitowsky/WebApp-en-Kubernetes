function agregardatos(nombre,password){

	cadena="nombre=" + nombre +"&password="+password;

	$.ajax({
		type:"POST",
		url:"php/agregarDatosu.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tablau.php');
				 //$('#buscador').load('componentes/buscador.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos){

	d=datos.split('||');

	$('#idpersona').val(d[0]);
	
}

function actualizaDatos(){


	id=$('#idpersona').val();
	nombre=$('#nombreu').val();

	cadena= "&nombre=" + nombre;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatosu.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tablau.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}


function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Está seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatosu.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tablau.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}
