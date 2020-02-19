

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
</pre>




<?php else: ?>
<h1>Tu pedido no se ha podido procesar</h1>
<?php var_dump($_SESSION['pedido']); ?>
<?php endif; ?>


