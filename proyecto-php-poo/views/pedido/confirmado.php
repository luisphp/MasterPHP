

<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'Completo'): ?>
<h1>Tu pedido se ha confirmado</h1>
<p>Tu pedido ha sido guardado con exito, una vez que realices la transferencia bancaria a la cuenta 010101010101 con el costo del pedido sera procesado y enviado</p>
<br>


<h3>Datos del pedido</h3>

<br>
	<!-- <?php //pedidoController::confirmado(); ?> -->

<pre>
	Numero de pedido: <?= $pedido->id_pedido ?>
	<br>

	Total a pagar: <?= $pedido->coste ?>
	<br>

	Productos:
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


</pre>




<?php else: ?>
<h1>Tu pedido no se ha podido procesar</h1>
<?php var_dump($_SESSION['pedido']); ?>
<?php endif; ?>


