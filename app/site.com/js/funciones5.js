function agregardatos(clave,nombre,des,pre,img,idp,idc) {

	cadena = "clave=" + clave + "&nombre=" + nombre + "&des=" + des + "&pre=" + pre + "&img=" + img + "&idp=" + idp + "&idc=" + idc;

	$.ajax({
		type: "POST",
		url: "php/agregarDatosp.php",
		data: cadena,
		success: function (r) {
			if (r == 1) {
				$('#tabla').load('componentes/tablap.php');
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

	$('#KeyProductu').val(d[0]);
	$('#NameProductu').val(d[1]);
	$('#DesProductu').val(d[2]);
	$('#PriceProductu').val(d[3]);
	$('#IdCategoria').val(d[8]);
	$('#IdProveedoru').val(d[7]);
	$('#Picture').val(d[4]);

}

function actualizaDatos() {

	cla=$('#KeyProductu').val();
	na=$('#NameProductu').val();
	des=$('#DesProductu').val();
	pre=$('#PriceProductu').val();
	idc=$('#IdCategoria').val();
	idp=$('#IdProveedoru').val();
	p=$('#Picture').val();

	cadena = "KeyProductu=" + cla +
	"&NameProductu=" + na +
	"&DesProductu=" + des +
	"&PriceProductu=" + pre +
	"&IdCategoria=" + idc +
	"&IdProveedoru=" + idp +
	"&Picture=" + p;

	$.ajax({
		type: "POST",
		url: "php/actualizaDatosp.php",
		data: cadena,
		success: function (r) {

			if (r == 1) {
				$('#tabla').load('componentes/tablap.php');
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
		url: "php/eliminarDatosp.php",
		data: cadena,
		success: function (r) {
			if (r == 1) {
				$('#tabla').load('componentes/tablap.php');
				alertify.success("Eliminado con exito!");
			} else {
				alertify.error("Fallo el servidor :(");
			}
		}
	});
}
