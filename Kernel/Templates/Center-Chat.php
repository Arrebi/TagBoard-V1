			<div class="alertProfile" style="display: none;">
				
			</div>
			<div class="center">
				<div class="title">MiniChat</div>
				<div class="boxTop"><?if(isset($_SESSION['id'])) : ?><a href="./logout.php"><div class="Logout" id="Logout"></div></a> <? else : ?><div class="Logout-Hide" id="Logout-Hide"></div><? endif; ?> <div class="boxTitle"><? if(isset($_SESSION['id'])) : ?> Bienvenido <?=utf8_encode($u['username']);?> <? else : ?>Haz Login para acceder al Chat <? endif; ?></div></div>
				<div class="boxMid">
					<div class="chatMessages" id="chatMessages">

					</div>
					<?
					if(isset($_SESSION['id']))
					{
					?>
					<form action="" method="post" id="SendMessage">
						<input type="text" name="message" placeholder="Escribe tu mensaje..." />
					</form>
					<?
					}
					else
						echo '<input type="text" placeholder="Haz Login para acceder al Chat" disabled/>';
					?>
				</div>
				<div class="boxBot"></div>
				<?
				if(isset($_SESSION['id']))
				{
					echo '<a href="./shop.php"><div class="Button">Tienda</div></a>';
				}
				?>
				<?php
				if($u['rank'] >= 2)
				{
					echo '<a href="./admin" target="_blank"><div class="Admin">Administración</div></a>';
				}
				?>
			</div>