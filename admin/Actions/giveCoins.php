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

if(isset($_POST['username']) && !empty($_POST['username']) &&
   isset($_POST['coins']) && !empty($_POST['coins']))
{
	$userExist = mysql_query("SELECT * FROM users WHERE username = '". $_POST['username'] ."'");
	if(mysql_num_rows($userExist))
	{
		mysql_query("UPDATE users SET coins = coins + '". $_POST['coins'] ."' WHERE username = '". $_POST['username'] ."'");
		echo '<font color="green">Los coins se sido agregaron con exito al usuario '. $_POST['username'] .'</font>';
	}
	else
		echo '<font color="red">El usuario no existe</font>';
}
else
	echo '<font color="red">No puedes dejar campos vacios</font>';
?>