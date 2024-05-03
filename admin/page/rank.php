<?
require(dirname(dirname(dirname(__FILE__))).'/Kernel/Config.php');
require(dirname(dirname(dirname(__FILE__))).'/Kernel/User.php');
?>
<script>
	Form();
</script>
<center>
	<form action="" method="post" id="giveRank">
		Usuario:</br>
		<input type="text" name="username" placeholder="Usuario a dar" /></br>
		<hr></hr>
		Rango:</br>
		<select name="rank">
		<?
			$q = mysql_query("SELECT * FROM rank ORDER BY value ASC");
			while($r = mysql_fetch_assoc($q))
			{
			?>
				<option value="<?=$r['value'];?>"><?=$r['name'];?></option>
			<?
			}
		?>
		</select></br>

		<input type="submit" value="Dar Coins" onClick="giveRank();" />
	</form>
</center>