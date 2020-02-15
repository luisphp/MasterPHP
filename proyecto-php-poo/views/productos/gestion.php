<h1> Gestionar productos</h1>

	<a class="button button-small" href="<?=base_url?>producto/crear">Crear producto</a>
	<br>

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
		<th>id_producto</th>
		<th>Descripcions</th>
		<th>Precio</th>
		<th>fk_id_categoria</th>
		<th>Stock</th>
		<th>Oferta</th>
		<th>Fecha</th>
		<th>Imagen</th>
		<th></th>
	</tr>

<?php while ($prod = $productos->fetch_object()):?>
		
	<tr>
		<td><?=$prod->id_producto;?></td>
		<td><?=$prod->descripcion;?></td>
		<td><?=$prod->precio;?></td>
		<td><?=$prod->fk_id_categoria;?></td>
		<td><?=$prod->stock;?></td>
		<td><?=$prod->oferta;?></td>
		<td><?=$prod->fecha;?></td>
		<td><?=$prod->imagen;?></td>
	</tr>
	
<?php endwhile; ?>
</table>