<h1>Cart</h1>
<?php if(isset($_SESSION['cart'])): ?>
	<?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) >= 1) : ?>
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
				<td><img class ="img-cart" style="max-width: 60px;" src="<?=base_url."uploads/images/".$producto->imagen;?>" alt="<?=$producto->imagen?>"></td>
			<?php else: ?>
				<td><img class ="img-cart" style="max-width: 60px;" src="<?=base_url."assets/images/camisa-blanca-dibujo-png.png"?>"></td>
			<?php endif; ?>	
		
		<td><a href="<?=base_url."producto/ver&id=".$producto->id_producto?>"><?=$producto->nombre;?></a></td>
		<td><?=$producto->precio;?></td>
		<td>
			<a href="<?=base_url."cart/up&indice=".$indice?>">+</a>
			<?=$value['unidades']?>
			<a href="<?=base_url."cart/down&indice=".$indice?>">-</a>
				

			</td>
		<td>
				<a href="<?=base_url?>cart/remove_one&id=<?=$indice?>" class="button button-getion button-red"> Borrar </a>
		</td>
	</tr>
	
<?php endforeach; ?>
</table>

<br>
<?php $status = Utils::StatusCart();  ?>
<h3 style="float: right; width: 45%">Total (<?=$status['total'];?>)</h3>

<br>
<br>
<a href="<?=base_url."cart/delete_all"?>" class="button button-red-delete" title="Borrar todos los elementos del cart">Borrar todo el cart</a>
<a href="<?=base_url."pedido/hacer"?>" class="button button_pedido" title="Completar compra">Hacer pedido</a>
<?php endif; ?>
<?php else: ?>

	<h5>Cart vacio</h5>

<?php endif; ?>	
<!-- <?php  //Utils::deleteSession('cart'); ?> -->




<!-- <?php var_dump($_SESSION['cart']); ?> -->