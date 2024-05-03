<?
require(dirname(dirname(dirname(__FILE__))).'/Kernel/Config.php');
require(dirname(dirname(dirname(__FILE__))).'/Kernel/User.php');
?>
<script>
	Form();
</script>
<center>
	<form action="" method="post" id="giveCoins">
		Usuario:</br>
		<input type="text" name="username" placeholder="Usuario a dar" /></br>
		<hr></hr>
		Cantidad de Coins:</br>
		<input type="number" name="coins" placeholder="Coloque una cantidad" /></br>

		<input type="submit" value="Dar Coins" onClick="giveCoins();" />
	</form>
</center>