<h1> Gestionar productos</h1>

	<a class="button button-small" href="<?=base_url?>producto/crear">Crear producto</a>
	<br>


	<!-- Mostrar mensaje en la pantalla al crear producto -->
	<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'completed'): ?>
		<strong>Se guardo el produto correctamente</strong>
	<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != 'completed'): ?>
		<strong>Ocurrio un error al guardar</strong>
	<?php endif; ?>	

	<!-- Mostrar mensaje en la pantalla al eliminar producto -->
	<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'completed'): ?>
		<strong>Se borro el produto correctamente</strong>
	<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != 'completed'): ?>
		<strong>Ocurrio un error al borrar</strong>
	<?php endif; ?>	
	
	
	<br>
	<?php Utils::deleteSession('producto'); ?>
	<?php Utils::deleteSession('delete'); ?>	

<table>

	<!--

	private $id_producto;
		private $descripcion;
		private $precio;
		private $fk_id_categoria;
		private $stock;
		private $oferta;
		private $fecha;
		private $imagen;

	 -->
	<tr>
		<th>id</th>
		<th>Desc</th>
		<th>Precio</th>
		<th>id_cat</th>
		<th>Stock</th>
		<th>Fecha</th>
		<th>Acciones</th>
		<th></th>
	</tr>

<?php while ($prod = $productos->fetch_object()):?>
		
	<tr>
		<td><?=$prod->id_producto;?></td>
		<td><?=$prod->descripcion;?></td>
		<td><?=$prod->precio;?></td>
		<td><?=$prod->fk_id_categoria;?></td>
		<td><?=$prod->stock;?></td>
		<td><?=$prod->fecha;?></td>
		<td>
				<a href="<?=base_url?>producto/edit&id=<?=$prod->id_producto?>" class="button button-getion button-gray">Editar</a>
				<a href="<?=base_url?>producto/delete&id=<?=$prod->id_producto?>" class="button button-getion button-red">Borrar</a>
		</td>
	</tr>
	
<?php endwhile; ?>
</table>