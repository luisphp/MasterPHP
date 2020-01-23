<?php 
require_once 'includes/cabecera.php'; 
require_once 'includes/lateral.php'; 
require_once 'includes/conexion.php';
 ?>

 
<div id="principal">
	<h1>Ultimas entradas</h1>
	<?php
	$entradas = getLatestEntries($db);
	
	if(!empty($entradas)):
	while ($entrada = mysqli_fetch_assoc($entradas)):  ?>
	<article class="entrada">
		<a href="entrada.php?id=<?=$entrada['id_entrada']?>">
			<h2><?=$entrada['title']?></h2>
			<span class="categorias"><?= $entrada['name'] ?></span>
			
			<p>
				<?= utf8_decode(substr( $entrada['description'],0, 180)."...")   ?>
				<span class="fecha"><?=  $entrada['fecha'] ?></span>
			</p>
		</a>
	</article>
	<?php  endwhile; endif; ?>
	
	
	<div class="verTodas">
		
		<a href="entradas.php">Ver todas las entradas</a>
		
	</div>
</div>
</div>
<div class="clear-fix">
<?php require_once 'includes/pie.php'; ?>
</body>
</html>