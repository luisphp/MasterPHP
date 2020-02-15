<h1>Crear nuevos productos</h1>


<form action="<?=base_url?>producto/save" method="post" accept-charset="utf-8">
	
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre">

	<label for="descripcion">Descripcion</label>
	<textarea name="descripcion"></textarea>

	<label for="precio">Precio</label>
	<input type="text" name="precio">

	<label for="stock">Stock</label>
	<input type="number" name="stock">

	<label for="categoria">Categoria</label>
	<select name="categoria">
		<?php $categoria = Utils::showCategories(); ?>
		<?php while() ?>
		<option value=""></option>
		option
	</select>

	<label for="nombre">Nombre</label>
	<input type="text" name="nombre">

	<button type="submit">Guardar</button>
</form>

