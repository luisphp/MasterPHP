<?php if(!isset($gestion)): ?>
	<h1>Mis pedidos</h1>
<?php  else: ?>
	<h1>Todos los pedidos</h1>
<?php endif; ?>
<table>
	<tr>
		<th>N° pedido</th>
		<th>Coste</th>
		<th>fecha</th>
		<th>Estado</th>
	</tr>

	<!--?php var_dump($_SESSION['cart']); ?>-->


<?php while ($pedido = $pedidos->fetch_object()): ?>
		
	<tr>
		<td><a href="<?=base_url?>pedido/detalle&id=<?=$pedido->id_pedido?>"><?=$pedido->id_pedido?></a></td>
		<td><?=$pedido->coste?></td>
		<td><?=$pedido->fecha?> - <?=$pedido->hora?></td>
		<td><?=$pedido->estado?></td>
	</tr>
	
<?php endwhile; ?>
</table>

