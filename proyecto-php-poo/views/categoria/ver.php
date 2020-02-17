<?php if(isset($categoria)): ?>

<h1>Categoria: " <?=$categoria_selected->nombre?> "</h1>

<?php if($productos->num_rows == 0): ?>
	<h1>No hay productos de esa categoria para mostrar</h1>
	<?php else: ?>
	<?php while ($item = $productos->fetch_object()): ?>

	<div class="product">
		<a href="<?=base_url?>producto/ver&id=<?=$item->id_producto?>" title="Ver más">
		<?php if($item->imagen != null): ?>
			<img src="<?=base_url."uploads/images/".$item->imagen?>" alt="">
		<?php else: ?>
			<img src="<?=base_url."assets/images/camisa-blanca-dibujo-png.png"?>" alt="">
		<?php endif; ?>	

		<h2><?=$item->nombre?></h2>
		</a>
		<p><?=$item->precio?></p>

		<a href="<?=base_url?>cart/add&id=<?=$item->id_producto?>" class="button">Comprar</a>

	</div>

<?php endwhile; ?>	
<?php endif; ?>	

<?php else: ?>

<h1>La categoria no existe</h1>

<?php endif; ?>	


