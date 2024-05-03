			<div class="right">
		<?php
		if(isset($_SESSION['id']))
		{
			echo '<div class="box"></div>';
		}
		else
		{
			?>
				<div class="title">Entrar</div>
				<div class="boxTop"><div class="addBox" id="addBLogin"></div><div class="removeBox" id="removeBLogin" style="display: none;"></div> <div class="boxTitle">Haz Login para acceder al Chat</div></div>
				<div class="boxMid">
					<div id="contentLogin" style="display: none;">
						<form action="" method="post" id="login-form">
							<input type="text" name="username" placeholder="Usuario" /></br>
							<input type="password" name="password" placeholder="Contraseña" /></br>
								<input type="submit" name="login" value="Inicia Sesión" /></br>
						</form>
						<div class="result-login"></div>
					</div>
				</div>
				<div class="boxBot"></div>
		<?php
		}
		?>
			</div>