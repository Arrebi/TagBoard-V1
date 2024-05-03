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

$q = mysql_query("SELECT * FROM badges WHERE code = '". $_POST['code'] ."'");
if(mysql_num_rows($q))
{
	mysql_query("DELETE FROM badges WHERE code = '".  $_POST['code']."'");
	echo '<font color="green">La placa '. $_POST['code'] .' fue eliminada con exito</font>';
}
else
	echo '<font color="red">La placa seleccionada no existe</font>';

?>