function agregardatos(nombre){

	cadena="nombre=" + nombre;

	$.ajax({
		type:"POST",
		url:"php/agregarDatosc.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tablac.php');
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
	$('#nombreu').val(d[1]);
	
}

function actualizaDatos(){


	id=$('#idpersona').val();
	nombre=$('#nombreu').val();

	cadena= "id=" + id +
			"&nombre=" + nombre;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatosc.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tablac.php');
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
			url:"php/eliminarDatosc.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tablac.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}
