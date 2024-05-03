<?php
/*
*
* Programador: Juan Arrebillaga
* Diseñador: Antonio Zavala (TheLastDark)
* Web: http://tagboard.mundo-fans.eu
* Version: 1.0
*
*/

session_start();

$Mysql = array('host' => 'HOST',
			   'user' => 'USUARIO',
			   'pass' => 'CONTRASEÑA',
			   'db'   => 'BASE DE DATOS');

$connect = mysql_connect($Mysql['host'], $Mysql['user'], $Mysql['pass']) or die ('Error al Conectar');
mysql_select_db($Mysql['db'], $connect) or die ('Error al Seleccionar la base de datos: <b>' . $Mysql['db']  . '</b>');

?>