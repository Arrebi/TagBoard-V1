			<div class="center">
				<div class="title">Tienda</div>
				<div class="boxTop"><?if(isset($_SESSION['id'])) : ?><a href="./logout.php"><div class="Logout" id="Logout"></div></a> <? else : ?><div class="Logout-Hide" id="Logout-Hide"></div><? endif; ?> <div class="boxTitle"><? if(isset($_SESSION['id'])) : ?> <?=utf8_encode($u['username']);?> tienes <b><?=$u['coins']?></b> Coins <? else : ?>Haz Login para acceder al Chat <? endif; ?></div></div>
				<div class="boxMid">
				<?
				if(isset($_SESSION['id']))
				{
				?>
					<div id="result-shop"></div>
					<div class="chatShop">
					<?
					$q = mysql_query("SELECT * FROM badges ORDER BY id ASC");
					while($b = mysql_fetch_assoc($q))
					{
					?>
						<div class="badge" onClick="Buy('<?=$b['code']?>');" style="background-image: url('http://habboo-a.akamaihd.net/c_images/album1584/<?=$b['code'];?>.gif');"><div class="price"><?=$b['price'];?> Coins</br> Resto:<?=$b['amount'];?></div></div>
					<?
					}
					?>

					</div>
				<?
				}
				else
				{
				?>
					<div class="chatShop">
						Necesitas estar <b>Logueado</b> o <b>Registrado</b> para poder utilizar la Tienda
					</div>
				<?
				}
				?>
				</div>
				<div class="boxBot"></div>
				<a href="./index.php"><div class="Button">Ir al Chat</div></a>
				<?php
				if($u['rank'] >= 2)
				{
					echo '<a href="./admin" target="_blank"><div class="Admin">Administración</div></a>';
				}
				?>
			</div>