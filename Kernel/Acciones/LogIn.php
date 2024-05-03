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
   isset($_POST['password']) && !empty($_POST['password']))
{
	$User_q = mysql_query("SELECT * FROM users WHERE username = '". $_POST['username'] ."'");
	if(mysql_num_rows($User_q))
	{
		$Pass_q = mysql_query("SELECT * FROM users WHERE username = '". $_POST['username'] ."'");
		$Pass = mysql_fetch_assoc($Pass_q);
		if($Pass['password'] == sha1($_POST['password']))
		{
			$_SESSION['id'] = $Pass['id'];
			echo json_encode(array('login'   => true,
								   'user'  	 => $_POST['username']));
		}
		else
			echo json_encode(array('errorpass' => true));
	}
	else
		echo json_encode(array('erroruser' => true,
							   'user'      => $_POST['username']));
}
else
	echo json_encode(array('errorfield' => true));
?>