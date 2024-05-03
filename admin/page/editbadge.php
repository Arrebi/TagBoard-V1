<?
require(dirname(dirname(dirname(__FILE__))).'/Kernel/Config.php');
require(dirname(dirname(dirname(__FILE__))).'/Kernel/User.php');

$q = mysql_query("SELECT * FROM badges ORDER BY id ASC");
?>
<script>
	Form();
</script>
<center>
	<form action="" method="post" id="editBadge">
		Placa a Editar:</br>
		<select name="code">
		<?
		while($b = mysql_fetch_assoc($q))
		{
		?>
			<option value="<?=$b['code'];?>"><?=$b['code'];?></option>
		<?
		}
		?>
		<hr></hr>
		</select></br>
		Coloca nuevo Precio:</br>
		<input type="number" name="price" placeholder="Coloca un Precio" /></br>
		<hr></hr>
		Actualiza su cantidad:</br>
		<input type="number" name="amount" placeholder="Actualiza su cantidad" /></br>
		
		<input type="submit" value="Editar Placa" onClick="editBadge();" />
	</form>
</center>