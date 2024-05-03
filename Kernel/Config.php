<?php
/*
*
* Programador: Juan Arrebillaga
* Dise�ador: Antonio Zavala (TheLastDark)
* Web: http://tagboard.mundo-fans.eu
* Version: 1.0
*
*/

session_start();

$mysqli = new mysqli('localhost',
			   'root',
			   '123456',
			   'tagboard');


// Verificar la conexión
if ($mysqli->connect_errno) {
    die('Error al conectar con la base de datos: ' . $mysqli->connect_error);
}

// Seleccionar la base de datos
if (!$mysqli->select_db('tagboard')) {
    die('Error al seleccionar la base de datos: ' . $mysqli->error);
}

?>