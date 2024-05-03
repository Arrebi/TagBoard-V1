<?php
/*
*
* Programador: Juan Arrebillaga
* Diseñador: Antonio Zavala (TheLastDark)
* Web: http://tagboard.mundo-fans.eu
* Version: 1.0
*
*/
require(dirname(dirname(dirname(__FILE__))).'/Kernel/Config.php');
require(dirname(dirname(dirname(__FILE__))).'/Kernel/User.php');

if(isset($_POST['code']) && !empty($_POST['code']) &&
   isset($_POST['price']) && !empty($_POST['price']) &&
   isset($_POST['amount']) && !empty($_POST['amount']))
{
	$v_badge = $mysqli->query("SELECT * FROM badges WHERE code = '". $_POST['code'] ."'");
	if(!$v_badge->num_rows)
	{
		$mysqli->query("INSERT INTO badges SET code = '". $_POST['code'] ."',
		                                    price = '". $_POST['price'] ."',
											amount = '". $_POST['amount'] ."'");
			echo '<font color="green">La placa <b>'. $_POST['code'] .'</b> Fue agregada con exito</font>';
	}
	else
		echo '<font color="red">Lo sentimos esa placa ya fue agregada</font>';
}
else
	echo '<font color="red">No puedes dejar campos vacios</font>';
?>