<h1>Detalles del pedido: </h1>

<?php if(isset($_SESSION['admin']) && isset($pedido)): ?>

<div style="float: right; width: 100%">

	<div style="float:right">

		<h3>Cambiar estado del pedido</h3>

		<form action="<?=base_url."pedido/estado"?>" method="POST" style="float: right">
			<input type="hidden" name="pedido_id" value="<?=$pedido->id_pedido ?>">
			<select name="estado">
				<option value="confirm" <?= $pedido->estado == 'confirm'  ? 'selected' : ''  ?>>Pendiente</option>
				<option value="preparation" <?= $pedido->estado == 'preparation' ? 'selected' : ''  ?>>En preparacion</option>
				<option value="ready" <?= $pedido->estado == 'ready'  ? 'selected' : ''  ?>>Preparado</option>
				<option value="enviado" <?= $pedido->estado == 'enviado' ? 'selected' : ''  ?>>Sended</option>
			</select>

			<input type="submit" name="" value="Cambiar estado">
		</form>
	</div>
</div>
<br>
<?php endif; ?>

<div style="display: block; width: 100%;">

	<h3>Dirección de envío del pedido</h3> <br>
	Dirección: <?=$pedido->direccion ?> <br>
	Localidad: <?=$pedido->localidad ?> <br>
	Provincia: <?=$pedido->provincia ?> <br>

	<br>
	<h3>Datos del pedido</h3>
	<br>
	Estado:
	<strong><?=Utils::showStatus($pedido->estado)?></strong>
	<br>
	Numero de pedido: <?= $pedido->id_pedido ?>
	<br>
	Total a pagar: <?= $pedido->coste ?>
	<br>
	Productos:
	<br>
	<br>
	<table>
		<tr>
			<th>Imagen</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Unidades</th>
		</tr>
		<?php while($producto = $productos->fetch_object()): ?>
		
		
		<tr>
			<?php if($producto->imagen != null): ?>
			<td><img class ="img-cart" style="width: 50px;" src="<?=base_url."uploads/images/".$producto->imagen;?>" alt="<?=$producto->imagen?>"></td>
			<?php else: ?>
			<td><img class ="img-cart" style="width: 50px;" src="<?=base_url."assets/images/camisa-blanca-dibujo-png.png"?>"></td>
			<?php endif; ?>
			
			<td><a href="<?=base_url."producto/ver&id=".$producto->id_producto?>"><?=$producto->nombre;?></a></td>
			<td><?=$producto->precio;?></td>
			<td><?=$producto->unidades;?></td>
		</tr>
		
		<?php endwhile; ?>
	</table>
</div>