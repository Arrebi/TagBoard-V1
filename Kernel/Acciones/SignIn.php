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

if(isset($_POST['username']) && !empty($_POST['username']) &&
	isset($_POST['password']) && !empty($_POST['password']) &&
	isset($_POST['r-password']) && !empty($_POST['r-password']) &&
	isset($_POST['email']) && !empty($_POST['email']))
{
	$User_q = mysql_query("SELECT * FROM users WHERE username = '". $_POST['username'] ."'");
	if(!mysql_num_rows($User_q))
	{
		if($_POST['password'] == $_POST['r-password'])
		{
			mysql_query("INSERT INTO users SET username = '". strip_tags($_POST['username']) ."',
												  password = '". sha1($_POST['password']) ."',
												  email = '". strip_tags($_POST['email']) ."',
												  mission = '". strip_tags('Visita Mundo-Fans.eu') ."',
												  coins = 100");
				echo json_encode(array('register' => true,
									   'user' => $_POST['username']));
		}
		else
			echo json_encode(array('passconfirm' => true));
	}
	else
		echo json_encode(array('userexist' => true,
							   'userexisterror' => $_POST['username']));
}
else
	echo json_encode(array('fieldempty' => true));
?>