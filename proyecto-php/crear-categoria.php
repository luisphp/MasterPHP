<?php 
 require_once 'includes/redireccion.php';
 require_once 'includes/cabecera.php';
 require_once 'includes/lateral.php'; 

 ?>

 <div id="principal">

 	<h1> Crear categoria</h1>

 	<p>Añade nuevas categorias al blog para que los usuarios puedan usarlas al crear sus entradas</p>
 	<br>
 	<form action="guardar-entrada.php" method="post" accept-charset="utf-8">
 		<label for="nombre">Nombre de la categoria</label>
 		<input type="text" name="nombre">

 		<input type="submit" name="enviar" value="Guardar">
 		
 	</form>
 </div>

 <?php require_once 'includes/pie.php' ?>