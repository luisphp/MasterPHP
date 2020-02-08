<h1>Registro de usuario</h1>

<form action="index.php?controller=usuario&action=save" method="post" accept-charset="utf-8">

	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" required>

	<label for="apellido">Apellido</label>
	<input type="text" name="apellido" required>

	<label for="email">Email</label>
	<input type="email" name="email" required>

	<label for="password">Password</label>
	<input type="password" name="password" required>

	<input type="submit" name="" value="Registrar">
	
</form>