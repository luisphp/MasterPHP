<h1>Registro de usuario</h1>
<!-- Mostramos el mensaje guardado en la session en caso de que se haya guardado el nuevo usuario -->

<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'completed'): ?>
<strong>Registro completado exitosamente! </strong>

<?php  elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
<strong>Registro incompleto. </strong>
<?php  endif; ?>

<!-- Borramos la sesion y por consecuente el mensaje de error -->
<?php Utils::deleteSession('register') ?>

<!-- Formulario de registro -->

<form action="<?=base_url?>usuario/save" method="post" accept-charset="utf-8">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" id="nombre" required>
	<label for="apellidos">Apellidos</label>
	<input type="text" name="apellidos" id="apellidos" required>
	<label for="email">Email</label>
	<input type="email" name="email" id="email" required>
	<label for="password">Password</label>
	<input type="password" name="password" id="password" required>
	<input type="submit" value="Registrar">
	
</form>