<?php
require_once 'includes/redireccion.php';
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
require_once 'includes/conexion.php';
require_once 'includes/helpers.php';
	$entrada = findEntry($db, $_GET['id']);
	if(!isset($entrada["id_entrada"])){header("Location: index.php");}
?>
<div id="principal">
	<h1> Editar Entrada</h1>
	<p>Edita tu entrada: <?=$entrada['title']?></p>
	<br>
	<form action="guardar-entrada.php?editar=1&id_entrada=<?=$entrada["id_entrada"]?>" method="post" accept-charset="utf-8">
		<label for="titulo">Nombre de la entrada</label>
		<?php echo isset($_SESSION['errores-entrada']) ? mostrarError($_SESSION['errores-entrada'], 'titulo'): '' ?>
		<input type="text" name="titulo" value="<?=$entrada['title']?>">
		<br>
		<label for="categoria">Categoria</label>
		<?php echo isset($_SESSION['errores-entrada']) ? mostrarError($_SESSION['errores-entrada'], 'categoria'): '' ?>
		<select name="categoria">
			<?php $categorias = getCategories($db);
						
						if(!empty($categorias)):
			while ($categoria = mysqli_fetch_assoc($categorias)): ?>
			<option value="<?=$categoria['id_category']?>"
				<?=($categoria['id_category'] == $entrada['fk_category_id']) ? 'selected="selected"': ''?>
			><?=$categoria['name']?></option>
			<?php endwhile; endif; ?>
		</select>
		<br>
		<br>
		<label for="descripcion">Descripción</label>
		<?php echo isset($_SESSION['errores-entrada']) ? mostrarError($_SESSION['errores-entrada'], 'descripcion'): '' ?>
		<textarea name="descripcion" style="width: 95%; height: 200px;"><?=$entrada['description']?></textarea>
		<input type="submit" name="enviar" value="Guardar">
		
	</form>
	<?php borrarErrores(); ?>
</div>
<?php require_once 'includes/pie.php' ?>