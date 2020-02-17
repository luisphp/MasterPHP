<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Tienda de camisetas</title>
		<link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
	</head>
	<body>
		<div id="container">
			<!-- Cabecera -->
			<header id="header" class="">
				<div id="logo">
					<img src="<?=base_url?>assets/images/camisa-blanca-dibujo-png.png" alt="Imagen_logo">
					<a href="index.php">
						Tienda de camisetas
					</a>
				</div>
			</header>
			<!-- /header -->
			<!-- Menú -->
			<nav id="menu">
				<ul>
					<li><a href="<?=base_url?>" title="">Inicio</a></li>
				</ul>
				<?php $categorias = Utils::showCategories(); ?>
				<ul>
				<?php while($cat = $categorias->fetch_object()): ?>
					<li><a href="<?=base_url."categoria/ver&id=".$cat->id_categoria?>" title=""><?=$cat->nombre?></a></li>
				<?php endwhile; ?>	
				</ul>
			</nav>
			<!-- Contenido -->
			<div id="content">