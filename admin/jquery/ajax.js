/*
*
* Programador: Juan Arrebillaga
* Diseñador: Antonio Zavala (TheLastDark)
* Web: http://tagboard.mundo-fans.eu
* Version: 1.0
*
*/

function Form()
{
	$('form').submit(function(e)
	{
		e.preventDefault();
	});
}

function Load(l)
{
	$.ajax({
		beforeSend: function(){
			$('.contentMid').html('<center><img src="../load.gif" /></center>');
		},
		type: 'get',
		url: './page/'+ l +'.php',
		success: function(date){
			$('.contentMid').html(date);
		},
	});
}


function addBadge()
{
	$.ajax({
		beforeSend: function(){
			$('#result').html('<img src="./load.gif" />');
		},
		type: 'post',
		url: './Actions/addBadge.php',
		data: $('#addBadge').serialize(),
		success: function(result){
			$('#result').html(result);
		},
		
		
	});
}

function editBadge()
{
	$.ajax({
		beforeSend: function(){
			$('#result').html('<img src="./load.gif" />');
		},
		type: 'post',
		url: './Actions/editBadge.php',
		data: $('#editBadge').serialize(),
		success: function(result){
			$('#result').html(result);
		},
		
		
	});
}

function removeBadge()
{
	$.ajax({
		beforeSend: function(){
			$('#result').html('<img src="./load.gif" />');
		},
		type: 'post',
		url: './Actions/removeBadge.php',
		data: $('#removeBadge').serialize(),
		success: function(result){
			$('#result').html(result);
		},
		
		
	});
}

function giveCoins()
{
	$.ajax({
		beforeSend: function(){
			$('#result').html('<img src="./load.gif" />');
		},
		type: 'post',
		url: './Actions/giveCoins.php',
		data: $('#giveCoins').serialize(),
		success: function(result){
			$('#result').html(result);
		},
	});
}

function giveRank()
{
	$.ajax({
		beforeSend: function(){
			$('#result').html('<img src="./load.gif" />');
		},
		type: 'post',
		url: './Actions/giveRank.php',
		data: $('#giveRank').serialize(),
		success: function(result){
			$('#result').html(result);
		},
	});
}