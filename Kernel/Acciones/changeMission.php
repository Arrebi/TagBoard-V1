<?php
/*
*
* Programador: Juan Arrebillaga
* Diseñador: Antonio Zavala (TheLastDark)
* Web: http://tagboard.mundo-fans.eu
* Version: 1.0
*
*/
require('../Config.php');
require('../User.php');

if(isset($_POST['mission']) && !empty($_POST['mission']))
{
	$mysqli->query("UPDATE users SET mission = '". $_POST['mission'] ."' WHERE id = '". $u['id'] ."'");
	echo '<img src="./v.png" />';
}
else
	echo '<img src="./x.png" />';
?>