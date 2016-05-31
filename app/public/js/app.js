var host_url = "http://localhost:8000/";


$(document).ready(function(){
	login();
	registerUser();
	//loadUserInfo();
});

// The Magic

function login(){
	$('#login-form .login__button').on('click', function(){

		var username = $('#login-form #user-name').val();
		var password = $('#login-form #user-password').val();

		var settings = {
			"async": true,
			"crossDomain": true,
			"url": host_url + "api/v1/login",
			"method": "POST",
			"data": {
				"user_email": username,
				"user_password": password
			}
		}
		$.ajax(settings).done(function (response) {
			if(response.status == 200){
				window.location = host_url+'admin/users';
			}else if(response.status == 500) {
				alert(response.errors);
			}
		});
	});
}

function registerUser(){
	$('.datosUsuario .user').on('click', function(){

		var username = $('.datosUsuario #user_name').val();
		var useremail = $('.datosUsuario #user_email').val();
		var userpassword = $('.datosUsuario #user_password').val();

		var settings = {
			"async": true,
			"crossDomain": true,
			"url": host_url + "api/v1/register",
			"method": "POST",
			"data": {
				"user_name": username,
				"user_email": useremail,
				"user_password": userpassword
			}
		}
		$.ajax(settings).done(function (response) {
			if(response.status == 200){
				alert('Se ha creado el usuario correctamente');
			}else if(response.status == 500) {
				alert(response.errors);
			}
		});
	});
}

function showModal(modalName){
	if( modalName == 'aviso' ){
		$('#siteModal .modal-header .modal-title').text('Aviso de Privacidad');
		$('#siteModal .modal-body').html('<h3>Texto prueba Aviso</h3><p>Aquí va el texto</p>');
	}else if( modalName == 'termino'){
		$('#siteModal .modal-header .modal-title').text('Términos y Condiciones');
		$('#siteModal .modal-body').html('<h3>Texto prueba Términos</h3><p>Aquí va el texto</p>');
	}

	$('#siteModal').modal();
}