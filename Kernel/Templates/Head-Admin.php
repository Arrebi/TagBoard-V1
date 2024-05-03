<?php
require('../Kernel/Config.php');
require('../Kernel/User.php');

if(!isset($_SESSION['id']))
{
	header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Bienvenido a la Administración</title>

		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="./jquery/jquery.js"></script>
		<link href="./style/index.css" rel="stylesheet" />
	</head>

	<body>
		<div class="content">