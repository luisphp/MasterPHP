<?php
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
require_once 'includes/conexion.php';
	$entrada = findEntry($db, $_GET['id']);
	if(!isset($entrada["id_entrada"])){header("Location: index.php");}
?>
<div id="principal" style="margin-bottom: 15px;">
	<h1>Entrada: <?=$entrada['title']; ?></h1>
	<?php
	$entradas = getEntryById($db, $_GET['id']);
		
		if(!empty($entradas)):
	$entrada_actual = mysqli_fetch_assoc($entradas);  ?>
	<article class="entrada">
		
		
		<h2><?=$entrada_actual['category_name'] ?></h2>
		<br>
		
		<p style="text-align: justify;">
			<?= utf8_decode( $entrada_actual['description'])   ?>
			<span class="fecha"><?=  $entrada_actual['fecha'] ?></span>
		</p>
		<p>
			<h2 class="categorias">Escrito por: <?=  $entrada_actual['name']." ".$entrada_actual['lastname'] ?></h2>
		</p>
	</a>
</article>
<!-- Se muestra mensaje de error si tenemos 404 not found-->
<?php else: ?>
<div>
	<br>
	<h3 style="text-align: center;">No hay entradas con esta categoria</h3>
</div>
<?php endif; ?>
<!-- <?php //var_dump($entrada_actual['fk_user_id']);  ?> <br> <?php // var_dump($_SESSION['usuario']) ?> -->
<br>
<?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id_user'] === $entrada_actual['fk_user_id']): ?>
<div>
	<a class="btn btn-outline-primary" style="width: 30%; "href="editar-entrada.php?id=<?=$entrada_actual['id_entrada']?>">Editar entrada</a>
	<a class="btn btn-outline-secondary" style="width: 30%; "href="borrar-entrada.php?id=<?=$entrada_actual['id_entrada']?>">Borrar entrada</a>
	<br>
</div>
</div>
<?php endif; ?>
<?php require_once 'includes/pie.php'; ?>