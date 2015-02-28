/*****************************
 * R-KISS
 * main.js
 * Desarrollado por MdeMoUcH
 * mdemouch@gmail.com
 * http://www.lagranm.com/
 *****************************/
var urlbase = 'http://localhost/r-kiss/';


function sendLogin(){
	if($("#user").val() != "" && $("#pass").val() != ""){
		$.ajax({
			type: "POST",
			url: urlbase+"login.php",
			data: {user: $("#user").val(), pass: sha1($("#pass").val())}
		}).done(function(data){
			if(data == 'ok'){
				window.location = urlbase;
			}else{
				alert('El usuario o la contraseña no son correctos.');
			}
		});
	}else{
		$("#mensaje").html("Rellena ambos campos campos");
	}
}//fun


function borrar(host){
	if(confirm('¿Está seguro de querer borrar todos los registros de "'+host+'"?')){
		$.ajax({
			type: "POST",
			url: urlbase+"ajax.php",
			data: {action: "borrar-host", host: host}
		}).done(function(data){
			alert(data);
			window.location = window.location;
		});
	}
}//fun


function borrarRegistro(id){
	$.ajax({
		type: "POST",
		url: urlbase+"ajax.php",
		data: {action: "borrar-registro", id: id}
	}).done(function(data){
		alert(data);
		window.location = window.location;
	});
}//fun
