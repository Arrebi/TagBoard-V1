<?php
/*
*
* Programador: Juan Arrebillaga
* Dise�ador: Antonio Zavala (TheLastDark)
* Web: http://tagboard.mundo-fans.eu
* Version: 1.0
*
*/
require(dirname(dirname(__FILE__)).'/Kernel/Config.php');
require(dirname(dirname(__FILE__)).'/Kernel/User.php');

if($u['rank'] >= 2)
{
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Administracion de TagBoard</title>
		
		<link href="./style/index.css" rel="stylesheet" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="./jquery/ajax.js"></script>
	</head>
	<body>
		<h2 style="text-align: center">Administraci�n</h2>
		<div class="boxTop">
			<div class="nav">
				<div class="menu" onClick="Load('inicio');">Inicio</div>
				<div class="menu" onClick="Load('addbadge');">Agregar Placas</div>
				<div class="menu" onClick="Load('editbadge');">Editar Placas</div>
				<div class="menu" onClick="Load('removebadge');">Borrar Placa</div>
				<div class="menu" onClick="Load('coins');">Dar Coins</div>
				<div class="menu" onClick="Load('rank');">Dar Rango</div>
			</div>
		</div>
		<div class="boxMid">
			<div class="contentTop"></div>
			<div class="contentMid">
				Bienvenido <?=$u['username'];?>
			</div>
			<div class="contentBot"></div>
		</div>
		<div class="boxBot"></div>
		<div id="result" style="text-align: center;"></div>
	</body>
</html>
<?php
}
else
	echo 'Acceso Denegado';
?>