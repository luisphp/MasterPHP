<?php
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
require_once 'includes/conexion.php';
	$categoria = findCategory($db, $_GET['id_cat']);
	if(!isset($categoria["id_category"])){header("Location: index.php");}
?>
<div id="principal" style="margin-bottom: 15px;">
	<h1>Entradas de la categoría: <?= $categoria['name']; ?></h1>
	<?php
	$entradas = getAllEntriesByCat($db, $_GET['id_cat']);
		
		if(!empty($entradas)):
	while ($entrada = mysqli_fetch_assoc($entradas)):  ?>
	<article class="entrada">
		<a href="entrada.php?id= <?=$entrada['id_entrada'] ?>=">
			<h2><?=  $entrada['title'] ?></h2>
			<span class="categorias"><?=  $entrada['name'] ?></span>
			
			<p>
				<?= utf8_decode(substr( $entrada['description'],0, 180)."...")   ?>
				<span class="fecha"><?=  $entrada['fecha'] ?></span>
			</p>
		</a>
	</article>
	<?php   endwhile; else: ?>
	
	<div class="">
		<br>
		<h3 style="text-align: center;">No hay entradas con esta categoria</h3>
	</div>
	<?php endif; ?>
</div>
<?php require_once 'includes/pie.php'; ?>