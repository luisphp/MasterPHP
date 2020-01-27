<?php 

	 require_once 'includes/redireccion.php';
	 require_once 'includes/cabecera.php';
	 require_once 'includes/lateral.php'; 

 ?>

<div id="principal">
	<h1> Crear Nueva Entrada</h1>
	<p>Añade nuevas entradas al blog para que los usuarios puedan verlas</p>
	<br>
	<form action="guardar-entrada.php" method="post" accept-charset="utf-8">
		<label for="titulo">Nombre de la entrada</label>
		<?php echo isset($_SESSION['errores-entrada']) ? mostrarError($_SESSION['errores-entrada'], 'titulo'): '' ?>
		<input type="text" name="titulo">
		<label for="categoria">Categoria</label>
		<?php echo isset($_SESSION['errores-entrada']) ? mostrarError($_SESSION['errores-entrada'], 'categoria'): '' ?>
		<select name="categoria">
			<?php $categorias = getCategories($db);
						
						if(!empty($categorias)):
			while ($categoria = mysqli_fetch_assoc($categorias)): ?>
			<option value="<?=$categoria['id_category']?>"><?=$categoria['name']?></option>
			<?php endwhile; endif; ?>
			
		</select>
		<label for="descripcion">Descripción</label>
		<?php echo isset($_SESSION['errores-entrada']) ? mostrarError($_SESSION['errores-entrada'], 'descripcion'): '' ?>
		<textarea name="descripcion"></textarea>
		<input type="submit" name="enviar" value="Guardar">
		
	</form>
	<?php borrarErrores(); ?>
</div>
<?php require_once 'includes/pie.php' ?>