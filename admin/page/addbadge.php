<?php
require(dirname(dirname(dirname(__FILE__))).'/Kernel/Config.php');
require(dirname(dirname(dirname(__FILE__))).'/Kernel/User.php');
?>
<script>
	Form();
</script>
<center>
	<form action="" method="post" id="addBadge">
		Codigo de Placa:</br>
		<input type="text" name="code" placeholder="Ejemplo: ADM" /></br>
		<hr></hr>
		Precio de Placa:</br>
		<input type="number" name="price" placeholder="Coloca un Precio" /></br>
		<hr></hr>
		Cantidad a venta:</br>
		<input type="number" name="amount" placeholder="Coloca una Cantidad" /></br>
		
		<input type="submit" value="Agregar Placa" onClick="addBadge();" />
	</form>
</center>