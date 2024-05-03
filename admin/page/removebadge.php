<?php
require(dirname(dirname(dirname(__FILE__))).'/Kernel/Config.php');
require(dirname(dirname(dirname(__FILE__))).'/Kernel/User.php');

$q = $mysqli->query("SELECT * FROM badges ORDER BY id ASC");
?>
<script>
	Form();
</script>
<center>
	<form action="" method="post" id="removeBadge">
		Selecciona una Placa de la Lista a Borrar:</br>
		<select name="code">
		<?php
		while($b = $q->fetch_assoc())
		{
		?>
			<option value="<?=$b['code'];?>"><?=$b['code'];?></option>
		<?php
		}
		?>
		<hr></hr>
		</select></br>
		
		<input type="submit" value="Borrar Placa" onClick="removeBadge();" />
	</form>
</center>