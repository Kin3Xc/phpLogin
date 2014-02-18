<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<div id="contenido">
		<img src="img/perfil.png">
		<h1>Elkin Urango Corporation</h1>
		<div id="login" class="myform">
			<form id="form" name="form" method="post" action="">
				<h2>Login de Usuario</h2>
				<p>Sistema de ingreso de usuarios</p>
				<label for="username">Username
					<span class="small">Ingrese su nombre de usuario</span>
				 </label>
				<input type="text" name="username" id="use" placeholder="Username" autofocus required>
				<label for="password">Password: 
					<span class="small">Ingrese su contraseña</span>
				</label>
				<input type="password" name="pass" id="pass" placeholder="Password" required>
				<button type="submit">Entrar </button>
				<button id="cancel" type="submit">Registrar	</button>
				<div class="spacer"></div>
			</form>
		</div>
		<footer>(C) Copyright - <a href="http://kin3xc.16mb.com/">Elkin Urango</a></footer>
	</div>
</body>
</html>