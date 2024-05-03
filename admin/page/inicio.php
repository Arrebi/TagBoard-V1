<?
require(dirname(dirname(dirname(__FILE__))).'/Kernel/Config.php');
require(dirname(dirname(dirname(__FILE__))).'/Kernel/User.php');
?>
<p>
	Hola <?=$u['username'];?>, Estas en la administración desde aqui podras editar todo lo disponible del minichat. 
	que sepas usar bien esta herramienta.
</p>