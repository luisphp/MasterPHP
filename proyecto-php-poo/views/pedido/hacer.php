 
<?php if(isset($_SESSION['identity'])): ?>	

 	<h1>Hacer pedido</h1>

 	<br>
	<form action="<?=base_url."pedido/add"?>" method="POST" accept-charset="utf-8">

		<h3>Domicilio o dirección de envío</h3>
		<br>

		<label for="provincia">Provincia</label>
		<input type="text" name="provincia" required>

		<label for="localidad">Localidad</label>
		<input type="text" name="localidad" required>

		<label for="direccion">Dirección</label>
		<input type="text" name="direccion" required>

		<input type="Submit" name="" value="Confirmar">

	</form>

	<br>
 		<a href="<?=base_url."carrito/index"?>" title="ver los productos y precios de pedidos">Ir al Cart</a>
 		

 <?php else: ?>	

 	<h1>Debe indetificarse</h1>	

<?php endif; ?> 	
