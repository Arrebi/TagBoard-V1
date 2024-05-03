<?php
/*
*
* Programador: Juan Arrebillaga
* Diseñador: Antonio Zavala (TheLastDark)
* Web: http://tagboard.mundo-fans.eu
* Version: 1.0
*
*/
require('./Kernel/Config.php');
require('./Kernel/User.php');

if($_GET['id'])
{
	$q = mysql_query("SELECT * FROM users WHERE id = '". $_GET['id'] ."'");
	$up = mysql_fetch_assoc($q);
	?>
	<script>
		$('#changeMission').submit(function(e)
		{
			e.preventDefault();
			
			$.ajax({
				type: 'post',
				url: './Kernel/Acciones/changeMission.php',
				data: $('#changeMission').serialize(),
				success: function(result){
					$('#result-m').html(result)
				}
			});
		});
	</script>
		<div class="Top">
			<span style="float: left;"><b><?=utf8_encode($up['username']);?> (<?=$up['id'];?>)</b></span> <span onClick="closeAlert();" style="float: right; cursor: pointer; background: #c3c3c3; padding: 3px 6px;">X</span>
		</div>
		<div class="Title">Información</div>
		<div class="sep"></div>
		<div class="c">
			<div class="c1">
				<img src="http://www.habbohotel.es/habbo-imaging/avatarimage?user=<?=$up['username'];?>&direction=11&head_direction=3&size=l" />
			</div>
			<div class="c2">
				Nombre: <b><?=utf8_encode($up['username']);?></b></br>
				Email: <b><?=utf8_encode($up['email']);?></b></br>
				<?
				if($u['id'] == $up['id'])
				{
				?>
					<form action="" method="post" id="changeMission">
						<input type="text" name="mission" value="<?=utf8_encode($u['mission']);?>" placeholder="Coloca tu Misión"> <span id="result-m"></span>
					</form>
				<?
				}
				else
					echo 'Misión: <b>'. utf8_encode($up['mission']) .'</b></br>';
				?>
				Coins: <b><?=$up['coins'];?></b></br>
			</div>
		</div>
		<div class="Title">Inventario</div>
		<div class="sep"></div>
		<div class="c">
			<div class="inventory">
			<?
			$qb = mysql_query("SELECT * FROM inventory_badge WHERE userid = '". $up['id'] ."'");
			if(mysql_num_rows($qb))
			{
				$total = mysql_num_rows($qb);
				echo '<div align="center">Total de placas: <b>'. $total .'</b></div>';
				while($b = mysql_fetch_assoc($qb))
				{
					$qbn = mysql_query("SELECT * FROM badges WHERE id = '". $b['badgeid'] ."'");
					$n = mysql_fetch_assoc($qbn);
				?>
					<div class="badge" style="background-image: url('http://habboo-a.akamaihd.net/c_images/album1584/<?=$n['code'];?>.gif');"></div>
				<?
				}
			}
			else
				echo 'No tiene niguna placa el usuario <b>'. utf8_encode($up['username']) .'</b>';
			?>
			</div>
		</div>
		

	<?
}

?>