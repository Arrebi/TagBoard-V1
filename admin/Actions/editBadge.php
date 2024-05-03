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
	$mysqli->query("UPDATE badges SET price = '". $_POST['price'] ."', amount = '". $_POST['amount'] ."' WHERE code = '". $_POST['code'] ."'");
	echo '<font color="green">La placa '. $_POST['code'] .' fue editada con exito</font>';
}
else
	echo '<font color="red">No puedes dejar campos vacios</font>';
?>