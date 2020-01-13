<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
					<li><a href="categoria1.php" title="">Categoria 1</a></li>
					<li><a href="categoria2.php" title="">Categoria 2</a></li>
					<li><a href="categoria3.php" title="">Categoria 3</a></li>
					<li><a href="categoria4.php" title="">Categoria 4</a></li>
					<li><a href="entradas.php" title="">Entradas</a></li>
					<li><a href="sobremi.php" title="">Sobre Mi</a></li>
					<li><a href="contacto.php" title="">Contacto</a></li>
				</ul>
			</nav>
			<div class="clear-fix">
				
			</div>
		</header>
		<div id="contenedor">
			<!--Barra Lateral -->
			<aside id="sidebar">
				<div id="login" class="bloque">
					<h3>Login</h3>
					<form action="login.php" method="post" accept-charset="utf-8">
						<label for="email">Email</label>
						<input type="text" name="email" id="email"/>
						<label for="password">Password</label>
						<input type="text" name="password" />
						<input type="submit" name="Enviar">
					</form>
				</div>
				
				
				<div id="login" class="bloque">
					<h3>Registro</h3>
					<form action="register.php" method="post" accept-charset="utf-8">
						<label for="email">Email</label>
						<input type="email" name="email" id="email"/>
						<label for="password">Password</label>
						<input type="text" name="password" />
						<label for="Name">Name</label>
						<input type="text" name="Name" />
						<label for="lastName">lastName</label>
						<input type="text" name="lastName" />
						<input type="submit" name="Enviar">
					</form>
				</div>
			</aside>
			<div id="principal">
				<h1>Ultimas entradas</h1>
				<article class="entrada">
					<a href="">
						<h2>Título de mi entrada</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</p>
					</a>
				</article>
				<article class="entrada">
					<a href="">
						<h2>Título de mi entrada</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</p>
					</a>
				</article>
				<article class="entrada">
					<a href="">
						<h2>Título de mi entrada</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</p>
					</a>
				</article>
				<article class="entrada">
					<a href="">
						<h2>Título de mi entrada</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</p>
					</a>
				</article>
				<div class="verTodas">
					
					<a href="">Ver todas las entradas</a>
					
				</div>
			</div>
		</div>
		<div class="clear-fix">
			
		</div>
		<footer id="pie">
			<p>Desarrollador por Luis Hurtado &copy; 2019 </p>
		</footer>
	</body>
</html>