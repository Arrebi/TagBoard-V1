/*
*
* Programador: Juan Arrebillaga
* Diseñador: Antonio Zavala (TheLastDark)
* Web: http://tagboard.mundo-fans.eu
* Version: 1.0
*
*/
$(document).ready(function()
{
	//Registro
	$('#addBRegister').click(function()
	{
		$('#contentRegister').slideDown(500);
		$('#addBRegister').hide();
		$('#removeBRegister').show();
	});

	$('#removeBRegister').click(function()
	{
		$('#contentRegister').slideUp(500);
		$('#removeBRegister').hide();
		$('#addBRegister').show();
	});


	//Entrar
	$('#addBLogin').click(function()
	{
		$('#contentLogin').slideDown(500);
		$('#addBLogin').hide();
		$('#removeBLogin').show();
	});

	$('#removeBLogin').click(function()
	{
		$('#contentLogin').slideUp(500);
		$('#removeBLogin').hide();
		$('#addBLogin').show();
	});

	//Registro de Usuario

	$('#register-form').submit(function(register)
	{
		register.preventDefault();

		$('.result-register').html('<center><img src="./load.gif"></center>');

		$.post('./Kernel/Acciones/SignIn.php', $('#register-form').serialize(), function(ret)
		{
			$('.result-register').html(null);
			if(!ret.fieldempty)
			{
				if(!ret.userexist)
				{
					if(!ret.passconfirm)
					{
						$('.result-register').html('<font color="green">Bienvenido <b>'+ ret.user +'</b>, te has registrado con exito.</div>')
					}
					else
						$('.result-register').html('<font color="red">Las contraseñas no coinciden</font>');
				}
				else
					$('.result-register').html('<font color="red">El usuario <b>'+ ret.userexisterror +'</b> ya esta en uso</font>');
			}
			else
				$('.result-register').html('<font color="red">No puedes dejar campos vacios</font>');

		}, 'json');
	});

	//Ingreso de Usuarios

	$('#login-form').submit(function(login)
	{
		login.preventDefault();

		$('.result-login').html('<center><img src="./load.gif"></center>');

		$.post('./Kernel/Acciones/LogIn.php', $('#login-form').serialize(), function(retlogin)
		{
			$('.result-login').html(null);

			if(!retlogin.errorfield)
			{
				if(!retlogin.erroruser)
				{
					if(!retlogin.errorpass)
					{
						$('.result-login').html('<font color="green">Bienvenido <b>'+ retlogin.user +'</b>, en instantes seras redireccionado.</font> <META http-equiv="refresh" content="2"; url="./index.php" />');
					}
					else
						$('.result-login').html('<font color="red">La contraseña es incorrecta</font>');
				}
				else
					$('.result-login').html('<font color="red">El usuario <b>'+ retlogin.user +'</b> no existe</font>');
			}
			else
				$('.result-login').html('<font color="red">El campo usuario y/o contraseña se encuentran vacios</font>');
		}, 'json');
	});

	//Envio de Mensajes
	$('#SendMessage').submit(function(e)
	{
		e.preventDefault();

		$.post('./Kernel/Acciones/SendMessage.php', $('#SendMessage').serialize(), function(send)
		{
			if(!send.error)
			{

				$('input[name="message"]').css({
							'background' : 'url(./inputs/Field.png)'
							});
				if(send.envio)
				{
					$('input').val(null);

				}
			}
			else
			{
				$('input[name="message"]').css({
							'background' : 'url(./inputs/Field-error.png)'
							});
			}
		}, 'json');
	});

	//Chat
	setInterval(function()
	{
		$('.chatMessages').load('./Messages.php');
	},1000);

});

//Compra en al Tienda

function Buy(code)
{
	$.ajax({
		beforeSend: function(){
			$('#result-shop').html('<center><img src="./load.gif" /></center>');
		},
		type: 'get',
		url: './BuyBadge.php',
		data: {code: ''+ code +''},
		success: function(result){
			$('#result-shop').html('<center>'+ result +'</center>');
		}
	});
}

//Perfiles Emergentes

function Profile(id)
{
	$.ajax({
		type: 'get',
		url: './Profile.php',
		data: {id: ''+ id +''},
		success: function(result){
			$('.alertProfile').show();
			$('.alertProfile').html(result);
		},
	});
}

//Cerrar Alerta

function closeAlert()
{
		$('.alertProfile').fadeOut();
}