<h1> Gestionar categorias</h1>

	<a class="button button-small" href="<?=base_url?>categoria/crear">Crear categoria</a>
	<br>

<table>
	<tr>
		<th>id_categoria</th>
		<th>Nombre</th>
	</tr>

<?php while ($cat = $categorias->fetch_object()):?>
		
	<tr>
		<td><?=$cat->id_categoria;?></td>
		<td><?=$cat->nombre;?></td>
	</tr>
	
<?php endwhile; ?>
</table>
