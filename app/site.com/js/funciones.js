function agregardatos(nombre){

	cadena="nombre=" + nombre;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				 //$('#buscador').load('componentes/buscador.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor1 :(");
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
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor2 :(");
			}
		}
	});

}


function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;
	alert(cadena);

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor3 :(");
				}
			}
		});
}