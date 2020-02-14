<h1> Gestionar categorias</h1>

<ul>

<?php while ($cat = $categorias->fetch_object()):?>
	
	
	<li><?=$cat->nombre;?></li>


<?php endwhile; ?>
</ul>
