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
if(isset($_SESSION['id']))
{
	if(isset($_POST['message']) && !empty($_POST['message']))
	{
		$mysqli->query("UPDATE users SET coins = coins + 1 WHERE id = '". $u['id'] ."'");
		$mysqli->query("INSERT INTO messages SET authorid = '". $u['id'] ."',
											  message = '". strip_tags(utf8_encode($_POST['message'])) ."',
											  time = '". time() ."'");
				echo json_encode(array('envio' => true));
	}
	else
		echo json_encode(array('error' => true));
}
?>