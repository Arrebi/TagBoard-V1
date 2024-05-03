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

$sql_messages = $mysqli->query("SELECT * FROM messages ORDER BY id ASC");
while ($messages = $sql_messages->fetch_assoc())
{
	$autor_q = $mysqli->query("SELECT * FROM users WHERE id = '". $messages['authorid'] ."'");
	$autor = $autor_q->fetch_assoc();
?>
	<div class="Chat"><a><div id="Avatar">
			<?php
				switch ($autor['rank']) {
					case 0:
						echo '<font>U</font>';
						break;
					
					case 1:
						echo '<font color="yellow">V</font>';
						break;
					case 2:
						echo '<font color="white">M</font>';
						break;
					case 3:
						echo '<font color="red">A</font>';
						break;
				}
			?>
	</div><div id="Messages"><b><a href="javascript:void(0);" onClick="Profile(<?=$autor['id'];?>);"><?=utf8_encode($autor['username']);?></a></b> <?=utf8_decode($messages['message']);?></div></div>
<?php
}
?>
<script>
	document.getElementById('chatMessages').scrollTop = document.getElementById('chatMessages').scrollHeight;
</script>