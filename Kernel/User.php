<?php
/*
*
* Programador: Juan Arrebillaga
* Diseñador: Antonio Zavala (TheLastDark)
* Web: http://tagboard.mundo-fans.eu
* Version: 1.0
*
*/
//Usuario por Sesión
$u_q = mysql_query("SELECT * FROM users WHERE id = '". $_SESSION['id'] ."'");
$u = mysql_fetch_assoc($u_q);

?>