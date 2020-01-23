<?php
	require_once 'conexion.php';
	require_once 'includes/helpers.php';
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
		<title>Index del Blog con php puro y msql</title>
		<!--CSS Bootstrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<!--Bootstrap JavaScript-->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<!--CSS personalizado-->
		<link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
	</head>
	<body>
		
		<!--Cabecera -->
		<header id="cabecera" class="">
			<div id="logo">
				<a href="index.php">
					Blog de Videojuegos
				</a>
			</div>
			<!--Menu -->
			<nav id="menu">
				<ul>
					<li><a href="index.php" title="">Index</a></li>
					<?php $categorias = getCategories($db);
					
					if(!empty($categorias)):
					while ($categoria = mysqli_fetch_assoc($categorias)): ?>
					<li> <a href="categoria.php?id_cat=<?= $categoria['id_category'] ?>"><?= $categoria['name'] ?></a> </li>
					<?php endwhile; endif; ?>
					
					<li><a href="entradas.php" title="">Entradas</a></li>
					<li><a href="sobremi.php" title="">Sobre Mi</a></li>
					<li><a href="contacto.php" title="">Contacto</a></li>
				</ul>
			</nav>
			<div class="clear-fix">
				
			</div>
		</header>
		<div id="contenedor">