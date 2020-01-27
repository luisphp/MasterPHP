<!--Barra Lateral -->
<aside id="sidebar">
	<!--Buscador-->
	<div id="buscador" class="bloque">
		
		<h3>Buscar</h3>
		<!-- Formulario para buscar  -->
		<form action="buscador.php" method="post" accept-charset="utf-8">
			
			<input type="text" name="busqueda" id="buscar" placeholder="¿Qué estas buscando?" />
			<input type="submit" name="buscar">
		</form>
		
	</div>
	<!-- Fin buscador -->
	<!-- En caso de que la sesion se inicie correctamente -->
	<?php if(isset($_SESSION['usuario'])): ?>
	<div id="usuario-logueado" class="bloque">
		<h5>Bienvenido,
		
		<?= $_SESSION['usuario']['name'].' '.$_SESSION['usuario']['lastname']; ?>
		
		</h5>
		<br>
		<!-- Boton Cerrar sesion-->
		
		<div class="buttones">
			<a class="btn btn-outline-primary d-block" href="crear-categoria.php">Crear Categoria</a>
			<br>
			<a class="btn btn-outline-info d-block" href="mis-datos.php">Mis Datos</a>
			<br>
			<a class="btn btn-outline-secondary d-block" href="crear-entrada.php">Crear entrada </a>
			<br>
			<a class="btn btn-outline-warning d-block" href="cerrar_sesion.php">Cerrar sesión</a>
		</div>
		
	</div>
	<?php endif; ?>
	<?php if(isset($_SESSION['error_login'])): ?>
	<div id="error-login" class="bloque">
		<h4>
		
		<?= $_SESSION['error_login']; ?>
		
		</h4>
	</div>
	<?php endif; ?>
	<?php if(!isset($_SESSION['usuario'])): ?>
	<div id="login" class="bloque">
		<h3>Login</h3>
		<form action="login.php" method="post" accept-charset="utf-8">
			<label for="email">Email</label>
			<input type="text" name="email" id="email"/>
			<label for="password">Password</label>
			<input type="password" name="password" />
			<input type="submit" name="submit">
		</form>
	</div>
	
	
	
	<div id="login" class="bloque">
		<!-- Mostrar errores a modo de vista previa -->
		
		<!-- <?php if(isset($_SESSION['errores'])):  ?> -->
		<!-- <?php var_dump($_SESSION['errores']); ?> -->
		
		<!-- <?php endif ?> -->
		<h3>Registro</h3>
		<!--Mostrar errores-->
		<?php if(isset($_SESSION['completado'])): ?>
		
		<div class="alerta alerta-exito"> <?=  $_SESSION['completado']; ?> </div>
		
		<?php  elseif(isset($_SESSION['errores']['general'])): ?>
		<div class="alerta alerta-exito"> <?=  $_SESSION['errores']['general']; ?> </div>
		<?php endif; ?>
		<!--fin Mostrar errores-->
		<!--Formulario de registro-->
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
			
			<input type="submit" name="submit" value="Registrar">
		</form>
		<?php borrarErrores(); ?>
	</div>
	<?php endif; ?>
</aside>