<h1>Listado de Usuarios</h1>
<br>
<?php 
	
	while ($usuario = $todos_los_usuarios->fetch_object()): ?>
		
	<?php echo $usuario->name; ?> - <?php echo $usuario->email; ?>
	<br>
	


<?php endwhile; ?> 
