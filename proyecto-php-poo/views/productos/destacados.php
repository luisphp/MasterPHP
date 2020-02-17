<h1>Algunos de nuestros productos</h1>

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

	<a href="" class="button">Comprar</a>

</div>

<?php endwhile; ?>
