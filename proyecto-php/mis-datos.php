<?php
	require_once 'includes/redireccion.php';
	require_once 'includes/cabecera.php';
	require_once 'includes/lateral.php';
?>
<div id="principal">
	<h1> Mis datos personales</h1>
	<p>Actualiza tus datos personales</p>
	<br>
	<!--Mostrar errores-->
	
	<?php if(isset($_SESSION['completado'])): ?>
	
	
	<div class="alerta alerta-exito"> <?=  $_SESSION['completado']; ?> </div>
	
	
	<?php  elseif(isset($_SESSION['errores']['general'])): ?>
	
	<div class="alerta alerta-exito"> <?=  $_SESSION['errores']['general']; ?> </div>
	<?php endif; ?>
	<!--fin Mostrar errores-->
	<!--Formulario de registro-->
	<form action="actualizar-usuario.php" method="post" accept-charset="utf-8">
		
		<label for="nombre">Nombre</label>
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre'): '' ?>
		<input type="text" name="nombre" value="<?= $_SESSION['usuario']['name']; ?>"/>
		<label for="apellido">Apellido</label>
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido'): '' ?>
		<input type="text" name="apellido" value="<?= $_SESSION['usuario']['lastname']; ?>"/>
		<label for="email">email</label>
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email'): '' ?>
		<input type="text" name="email" value="<?= $_SESSION['usuario']['email']; ?>"/>
		<input type="submit" name="submit" value="Actualizar">
	</form>
	<?php borrarErrores(); ?>
</div>
<?php require_once 'includes/pie.php' ?>