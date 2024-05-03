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

if(isset($_SESSION['id']))
{
    $u_q = $mysqli->query("SELECT * FROM users WHERE id = '" . $_SESSION['id'] . "'");
    $u = $u_q->fetch_assoc();
}

?>