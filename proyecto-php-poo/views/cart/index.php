<h1>Cart</h1>

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
		<th>Imagen</th>
		<th>Nombre</th>
		<th>Precio</th>
		<th>Unidades</th>
		<th>Acciones</th>
		<th></th>
	</tr>

	<!--?php var_dump($_SESSION['cart']); ?>-->
	

<?php foreach ($_SESSION['cart'] as $indice => $value):

	$producto = $value['producto'];

	?>
		
	<tr>
			<?php if($producto->imagen != null): ?>
				<td><img class ="img-cart" style="width: 50px;" src="<?=base_url."uploads/images/".$producto->imagen;?>" alt="<?=$producto->imagen?>"></td>
			<?php else: ?>
				<td><img class ="img-cart" style="width: 50px;" src="<?=base_url."assets/images/camisa-blanca-dibujo-png.png"?>"></td>
			<?php endif; ?>	
		
		<td><a href="<?=base_url."producto/ver&id=".$producto->id_producto?>"><?=$producto->nombre;?></a></td>
		<td><?=$producto->precio;?></td>
		<td><?=$value['unidades']?></td>
		<td>
				<a href="<?=base_url?>producto/delete&id=<?=$prod->id_producto?>" class="button button-getion button-red">Borrar</a>
		</td>
	</tr>
	
<?php endforeach; ?>


</table>

<!-- <?php var_dump($_SESSION['cart']); ?> -->