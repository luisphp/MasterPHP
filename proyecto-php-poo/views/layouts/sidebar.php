<!-- Barra Lateral -->
<aside id="lateral">
	<div id="login" class="log_aside">

		<?php if(!isset($_SESSION['identity'])): ?>



		<h3>Entrar a la Web</h3>
		<form action="<?=base_url?>usuario/login" method="post" accept-charset="utf-8">
			<label for="email">Email</label>
			<input type="text" name="email" value="">
			<label for="password">Password</label>
			<input type="password" name="password" value="">
			<input type="submit" name="enviar" value="Enviar">
		</form>
		
		<!-- Enlace para registrar usuario -->
		<div style="margin-top: 30px; float: right;">
			<a style="text-decoration: none;" href="<?=base_url?>usuario/registro">Registrarme</a>	
		</div>
		
		

		<?php else: ?>

			<!-- En caso de que el usuario este logeado mostramos las opciones standares -->

			<h3>Bienvenido, <?=$_SESSION['identity']->nombre.' '.$_SESSION['identity']->apellidos?></h3>
			<ul class="panel_options">
				
			
			<li><a href="<?=base_url?>usuario/pedidos">Mis Pedidos</a></li>
			<li><a href="<?=base_url?>usuario/logout">Cerrar sesión</a></li>

			<!-- En caso de que sea admin mostramos las opciones de administrador -->
			<br>
			<br>
			<?php if(isset($_SESSION['admin'])): ?>
			<strong>Admin Panel</strong>
			
			<li><a href="<?=base_url?>pedido/index">Gestionar todos los Pedidos</a></li>
			
			<li><a href="<?=base_url?>categoria/index">Gestionar todas las Categorias</a></li>
			
			<li><a href="<?=base_url?>producto/gestion">Gestionar todos los Productos</a></li>
			</ul>
			<?php endif; ?>	

		<?php  endif; ?>
		
	</div>
</aside>

<!-- Contenido central -->
<div id="central">