<?php
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
require_once 'includes/conexion.php';
// var_dump($_POST);
// die();
;	if(!isset($_POST["busqueda"])){header("Location: index.php");}
	
	
?>
<div id="principal" style="margin-bottom: 15px;">
	<h1>Búqueda: <?=$_POST["busqueda"]?></h1>
	<?php
	
	$entradas = buscadorDeEntrada($db, $_POST['busqueda']);

	if(!empty($entradas)):
	while ($entrada = mysqli_fetch_assoc($entradas)):  ?>
	<article class="entrada">
		<a href="entrada.php?id= <?=$entrada['id_entrada'] ?>=">
			<h2><?=  $entrada['title'] ?></h2>
			<span class="categorias"><?=$entrada['category_name'] ?></span>
			
			<p>
				<?= utf8_decode($entrada['description'])   ?>
				<span class="fecha"><?=  $entrada['fecha'] ?></span>
			</p>
		</a>
	</article>
	<?php   endwhile; else: ?>
	
	<div class="">
		<br>
		<h3 style="text-align: center;">No tenemos resultados para tu búsqueda</h3>
	</div>
	<?php endif; ?>
</div>
<?php require_once 'includes/pie.php'; ?>