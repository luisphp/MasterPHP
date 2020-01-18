
<?php 
	
	require_once "includes/helpers.php";

 ?>



<!--Barra Lateral -->
			<aside id="sidebar">
				<div id="login" class="bloque">
					<h3>Login</h3>
					<form action="login.php" method="post" accept-charset="utf-8">
						<label for="email">Email</label>
						<input type="text" name="email" id="email"/>
						<label for="password">Password</label>
						<input type="text" name="password" />
						<input type="submit" name="submit">
					</form>
				</div>
				
				
				<div id="login" class="bloque">

					<!-- Mostrar errores a modo de vista previa -->
					
					<!-- <?php if(isset($_SESSION['errores'])):  ?> -->

					<!-- <?php var_dump($_SESSION['errores']); ?> -->
					
					 <!-- <?php endif ?> -->



					<h3>Registrate</h3>

					<!--Mostrar errores-->

					<?php if(isset($_SESSION['completado'])): ?>
						
						<div class="alerta alerta-exito"> <?=  $_SESSION['completado']; ?> </div>
					 
					 <?php  elseif(isset($_SESSION['errores']['general'])): ?>

					 	<div class="alerta alerta-exito"> <?=  $_SESSION['errores']['general']; ?> </div>


					 <?php endif; ?>	

					 	
					<form action="registro.php" method="post" accept-charset="utf-8">
						
						<label for="Name">Name</label>
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre'): '' ?>
						<input type="text" name="Name" />

						<label for="lastName">lastName</label>
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido'): '' ?>
						<input type="text" name="lastName" />

						<label for="email">Email</label>
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email'): '' ?>
						<input type="email" name="email" id="email"/>

						<label for="password">Password</label>
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password'): '' ?>
						<input type="password" name="password" />
						

						<input type="submit" name="submit">
					</form>
					<?php borrarErrores(); ?>
				</div>
			</aside>