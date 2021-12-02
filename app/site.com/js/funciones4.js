function agregardatos(nombre, tel, correo) {

	cadena = "nombre=" + nombre + "&tel=" + tel + "&correo=" + correo;

	$.ajax({
		type: "POST",
		url: "php/agregarDatoscl.php",
		data: cadena,
		success: function (r) {
			if (r == 1) {
				$('#tabla').load('componentes/tablacl.php');
				//$('#buscador').load('componentes/buscador.php');
				alertify.success("agregado con exito :)");
			} else {
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos) {

	d = datos.split('||');

	$('#idpersona').val(d[0]);
	$('#nombreu').val(d[1]);
	$('#PhoneClientu').val(d[2]);
	$('#EmailClientu').val(d[3]);

}

function actualizaDatos() {


	id=$('#idpersona').val();
	nombre=$('#nombreu').val();
	tel=$('#PhoneClientu').val();
	correo = $('#EmailClientu').val();

	cadena = "idcliente=" + id +
	"&nombre=" + nombre +
	"&tel=" + tel +
	"&correo=" + correo;

	$.ajax({
		type: "POST",
		url: "php/actualizaDatoscl.php",
		data: cadena,
		success: function (r) {

			if (r == 1) {
				$('#tabla').load('componentes/tablacl.php');
				alertify.success("Actualizado con exito :)");
			} else {
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}


function preguntarSiNo(id) {
	alertify.confirm('Eliminar Datos', '¿Está seguro de eliminar este registro?',
		function () { eliminarDatos(id) }
		, function () { alertify.error('Se cancelo') });
}

function eliminarDatos(id) {

	cadena = "id=" + id;

	$.ajax({
		type: "POST",
		url: "php/eliminarDatoscl.php",
		data: cadena,
		success: function (r) {
			if (r == 1) {
				$('#tabla').load('componentes/tablacl.php');
				alertify.success("Eliminado con exito!");
			} else {
				alertify.error("Fallo el servidor :(");
			}
		}
	});
}
