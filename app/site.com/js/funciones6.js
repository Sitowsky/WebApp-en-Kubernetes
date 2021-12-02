

function llenar(){

	var $id_usuario = $('#Cliente').val();
	var cadena = "clave=" + $id_usuario;

	$.ajax({
		type: "POST",
		url: "../php/select.php",
		data: cadena,
		beforeSend: function(objeto){
                
		},
		success: function(data)
		{ 
		 $('#email').val(data);
	
		}
	 });

	 $.ajax({
		type: "POST",
		url: "../php/select2.php",
		data: cadena,
		beforeSend: function(objeto){
                
		},
		success: function(data)
		{ 
		 $('#Tel1').val(data);
	
		}
	 });

	
}

