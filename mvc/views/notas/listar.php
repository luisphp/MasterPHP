


<h1>Listado de notas</h1>
<br>
<?php 
	
	while ($nota = $notas->fetch_object()): ?>
		
	<?php echo $nota->title; ?> - <?php echo $nota->fecha; ?>
	<br>
	


<?php endwhile; ?> 