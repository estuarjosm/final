<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<title>USUARIO</title>
</head>
<body>
	<div class="container">
		<br>
		
		<nav class="navbar navbar-dark bg-primary">
			<a class="navbar-brand">
				<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
				</svg>
				USUARIOS
			</a>
			<a class="btn btn-secondary" href="PreUsuarios.php" role="boton">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
					<path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
				</svg>
				Regresar
			</a>

		</nav>
		<br>
		<div class="card">
			<div class="card-header text-primary font-weight-bold">
				CREAR USUARIO
			</div>
			<div class="card-body">
				
				<form action="../capa_entidad/EntRegistrarUsuario.php" method="post" class="needs-validation" novalidate autocomplete="off">
					<div class="form-group">
						<label for="nombre">Nombre y Apellido</label>
						<input type="text" class="form-control" id="nombre" name="nombre" required="text" maxlength="100">
					</div>
					<div class="form-group">
						<label for="correo_electronico">Correo Electrónico</label>
						<input type="email" class="form-control" id="correo_electronico" aria-describedby="emailHelp" name="correo" placeholder="example@gmail.com" required="email" maxlength="100">				
					</div>
					<div class="form-group">
						<label for="pass">Password</label>
						<input type="password" class="form-control" id="pass" name="pass" required="password" maxlength="45">
					</div>
					<div class="form-group">
						<label for="rol">Rol</label>
						<select id="rol" class="form-control" name="rol" required>
							<option value=""selected disabled>Elegir...</option>
							<option value="1">Administrador</option>
							<option value="2">Vendedor</option>
							<option value="3">Control</option>							
						</select>
					</div>	
					<br>	
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-block">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
							</svg>
							Registrar
						</button>	
					</div>

				</form>	
			</div>
		</div>


	</div>	
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script>
		(function() {
			'use strict';
			window.addEventListener('load', function() {
				var forms = document.getElementsByClassName('needs-validation');
				var validation = Array.prototype.filter.call(forms, function(form) {
					form.addEventListener('submit', function(event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	</script>	
</body>
</html>