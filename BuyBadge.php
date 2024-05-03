<?php
/*
*
* Programador: Juan Arrebillaga
* Diseñador: Antonio Zavala (TheLastDark)
* Web: http://tagboard.mundo-fans.eu
* Version: 1.0
*
*/
require('./Kernel/Config.php');
require('./Kernel/User.php');

if($_GET['code'])
{
	$v_price = $mysqli->query("SELECT * FROM badges WHERE code = '". $_GET['code'] ."'");
	$p = $v_price->fetch_assoc();

	if($p['price'] <= $u['coins'])
	{
		$exist = $mysqli->query("SELECT * FROM inventory_badge WHERE badgeid = '". $p['id'] ."' AND userid = '". $u['id'] ."'");
		if(!$exist->num_rows)
		{
			if($p['amount'] != 0)
			{
				$mysqli->query("INSERT INTO inventory_badge SET userid = '". $u['id'] ."', badgeid = '". $p['id'] ."'");
				$mysqli->query("UPDATE users SET coins = coins - '". $p['price'] ."' WHERE id = '". $u['id'] ."'");
				$mysqli->query("UPDATE badges SET amount = amount - 1 WHERE id = '". $p['id'] ."'");


				echo '<font color="green">La placa <b>'. $_GET['code'] .'</b> fue comprada con exito.</font>';
			}
			else
				echo '<font color="red">Ya no quedan mas placas <b>'. $_GET['code'] .'</b></font>';
		}
		else
			echo '<font color="red">Ya tienes esta placa en tu inventario</font>';
	}
	else
		echo '<font color="red">No tienes <b>coins</b> suficientes</font>';
}

?>