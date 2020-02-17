<?php if(isset($producto)): ?>

	 <div class="detail-product">

		<div class="principal">
			<h2><?=$producto->nombre?></h2>
		</div>
		

		<div class="imagen">

			<?php if($producto->imagen != null): ?>
				<img src="<?=base_url."uploads/images/".$producto->imagen?>">
			<?php else: ?>
				<img src="<?=base_url."assets/images/camisa-blanca-dibujo-png.png"?>">
			<?php endif; ?>	
			
			
		</div>

		<div class="data">
			<h4>Descripción: </h4>
			<p><?=$producto->descripcion?> </p>
			<br>
			<h4>Precio: </h4>
			<p><?=$producto->precio?></p>

			<a href="" class="button">Comprar</a>

		</div>
		

	</div> 




<?php else: ?>

<strong> Ningun producto para mostrar</strong>

<?php endif; ?>