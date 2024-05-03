			<div class="left">
		<?php
		if(isset($_SESSION['id']))
		{
			echo '<div class="box"></div>';
		}
		else
		{
			?>
				<div class="title">Registro</div>
				<div class="boxTop"><div class="addBox" id="addBRegister"></div><div class="removeBox" id="removeBRegister" style="display: none;"></div> <div class="boxTitle">Llena todo los Campos</div></div>
				<div class="boxMid">
					<div id="contentRegister" style="display: none;">
						<form action="" method="post" id="register-form">
							<input type="text" name="username" placeholder="Usuario" /></br>
							<input type="password" name="password" placeholder="Contraseña" /></br>
							<input type="password" name="r-password" placeholder="Repite Contraseña" /></br>
							<input type="email" name="email" placeholder="Correo electrónico" /></br>
								<input type="submit" name="register" value="Completar Registro" /></br>
						</form>
						<div class="result-register"></div>
					</div>
				</div>
				<div class="boxBot"></div>
		<?
		}
		?>
			</div>