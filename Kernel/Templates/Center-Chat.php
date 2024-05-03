			<div class="alertProfile" style="display: none;">
				
			</div>
			<div class="center">
				<div class="title">MiniChat</div>
				<div class="boxTop"><?php if(isset($_SESSION['id'])) : ?><a href="./logout.php"><div class="Logout" id="Logout"></div></a> <?php else : ?><div class="Logout-Hide" id="Logout-Hide"></div><?php endif; ?> <div class="boxTitle"><?php if(isset($_SESSION['id'])) : ?> Bienvenido <?=utf8_encode($u['username']);?> <?php else : ?>Haz Login para acceder al Chat <?php endif; ?></div></div>
				<div class="boxMid">
					<div class="chatMessages" id="chatMessages">

					</div>
					<?php
					if(isset($_SESSION['id']))
					{
					?>
					<form action="" method="post" id="SendMessage">
						<input type="text" name="message" placeholder="Escribe tu mensaje..." />
					</form>
					<?php
					}
					else
						echo '<input type="text" placeholder="Haz Login para acceder al Chat" disabled/>';
					?>
				</div>
				<div class="boxBot"></div>
				<?php
				if(isset($_SESSION['id']))
				{
					echo '<a href="./shop.php"><div class="Button">Tienda</div></a>';

					if($u['rank'] >= 2)
					{
						echo '<a href="./admin" target="_blank"><div class="Admin">Administración</div></a>';
					}
				}
				?>
			</div>