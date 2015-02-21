
var urlbase = 'http://localhost/r-kiss/';


function sendLogin(){
	if($("#user").val() != "" && $("#pass").val() != ""){
		$.ajax({
			type: "POST",
			url: urlbase+"login.php",
			data: {user: $("#user").val(), pass: sha1($("#pass").val())}
		})
		.done(function(data){
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

function borrar(s_host){
	$.ajax({
		type: "POST",
		url: urlbase+"ajax.php",
		data: {host: s_host}
	})
	.done(function(data){
		alert(data);
	});
}//fun
