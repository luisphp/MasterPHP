
	<?php if(isset($edit) && isset($item) && is_object($item)): ?>

		<?php $url_action = base_url."producto/save&id=$item->id_producto"; ?>

		<h1>Editar producto: " <?=$item->nombre?> "</h1>

	<?php else: ?>

		<h1>Crear nuevo producto</h1>

		<?php $url_action = base_url."producto/save"; ?>

	<?php endif; ?>

	<!-- Formulario para creacion/edicion -->
<form action="<?=$url_action?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" style="width: 100%;">

	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" value="<?=isset($item) && is_object($item) ? $item->nombre: ''?>">

	<label for="descripcion">Descripcion</label>
	<textarea name="descripcion" ><?=isset($item) && is_object($item) ? $item->descripcion: ''?></textarea>

	<label for="precio">Precio</label>
	<input type="text" name="precio" value="<?=isset($item) && is_object($item) ? $item->precio: ''?>">

	<label for="stock">Stock</label>
	<input type="number" name="stock" value="<?=isset($item) && is_object($item) ? $item->stock: ''?>">

	<label for="categoria">Categoria</label>
	<select name="categoria">
		<?php $categorias = Utils::showCategories(); ?>
		<?php while($cat = $categorias->fetch_object()): ?>
		<option value="<?=$cat->id_categoria?>" <?=isset($item) && is_object($item) && $cat->id_categoria == $item->fk_id_categoria ? 'selected' : ''?>><?=$cat->nombre?></option>
		<?php endwhile; ?>	
	</select>

	<label for="imagen">Imagen</label>
	<?php if(isset($item) && is_object($item) && !empty($item->imagen) ): ?>
		<img src="<?=base_url."uploads/images/".$item->imagen?>" alt="<?=$item->imagen?>" style="width: 150px;">
	<?php endif; ?>	
	
	<br>
	<input type="file" name="imagen">

	<button type="submit">Guardar</button>
</form>

