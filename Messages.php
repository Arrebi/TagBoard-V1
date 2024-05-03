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

$sql_messages = mysql_query("SELECT * FROM messages ORDER BY id ASC");
while ($messages = mysql_fetch_assoc($sql_messages))
{
$autor_q = mysql_query("SELECT * FROM users WHERE id = '". $messages['authorid'] ."'");
$autor = mysql_fetch_assoc($autor_q);
?>
	<div class="Chat"><a><div id="Avatar">
			<?
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
<?
}
?>
<script>
	document.getElementById('chatMessages').scrollTop = document.getElementById('chatMessages').scrollHeight;
</script>