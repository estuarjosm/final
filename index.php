<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<title>MENU</title>	
	<script language="JavaScript">
		function mueveReloj(){
			momentoActual = new Date()
			hora = momentoActual.getHours()
			minuto = momentoActual.getMinutes()
			segundo = momentoActual.getSeconds()
			str_segundo = new String (segundo)
			if (str_segundo.length == 1)
				segundo = "0" + segundo
			str_minuto = new String (minuto)
			if (str_minuto.length == 1)
				minuto = "0" + minuto
			str_hora = new String (hora)
			if (str_hora.length == 1)
				hora = "0" + hora
			horaImprimible = hora + " : " + minuto + " : " + segundo
			document.form_reloj.reloj.value = horaImprimible
			setTimeout("mueveReloj()",1000)
		}
	</script>	
</head>
<body onload="mueveReloj()">
	<header>
		<div class="container text-center">
			<h1>MENÚ</h1>
			<h5>
				<form name="form_reloj" class="cssforma">
					<script>
						var f = new Date();
						document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
					</script>
					<br/>
					<input type="text" name="reloj" class="bg-primary text-white text-center border-0 font-weight-bold" onfocus="window.document.form_reloj.reloj.blur()">
				</form>	
			</h5>
		</div>	
	</header>
	
	<div class="container">
		<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3">
			
			<div class="col-sm-12 col-mb-6 col-lg-4">
				<div class="card">
					<div class="card-body text-primary">
						<h5 class="card-title text-center">
							<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-tags-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M3 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 7.586 1H3zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
								<path d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
							</svg>
						</h5>
						<a href="#" class="btn btn-primary btn-block">PRODUCTOS
						</a>
					</div>
				</div>
			</div>
			
			<div class="col-sm-12 col-mb-6 col-lg-4">
				<div class="card">
					<div class="card-body text-primary">
						<h5 class="card-title text-center">
							<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-basket2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1z"/>
							</svg>
						</h5>
						<a href="#" class="btn btn-primary btn-block">COMPRAS
						</a>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-mb-6 col-lg-4">
				<div class="card">
					<div class="card-body text-primary">
						<h5 class="card-title text-center">
							<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-cart-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm.354-7.646a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
							</svg>
						</h5>
						<a href="#" class="btn btn-primary btn-block">VENTAS
						</a>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-mb-6 col-lg-4">
				<div class="card">
					<div class="card-body text-primary">
						<h5 class="card-title text-center">
							<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-grid-1x2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z"/>
							</svg>
						</h5>
						<a href="#" class="btn btn-primary btn-block">INVENTARIO
						</a>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-mb-6 col-lg-4">
				<div class="card">
					<div class="card-body text-primary">
						<h5 class="card-title text-center">
							<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-reply-all-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path d="M8.079 11.9l4.568-3.281a.719.719 0 0 0 0-1.238L8.079 4.1A.716.716 0 0 0 7 4.719V6c-1.5 0-6 0-7 8 2.5-4.5 7-4 7-4v1.281c0 .56.606.898 1.079.62z"/>
								<path fill-rule="evenodd" d="M10.868 4.293a.5.5 0 0 1 .7-.106l3.993 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a.5.5 0 0 1-.593-.805l4.012-2.954a.493.493 0 0 1 .042-.028.147.147 0 0 0 0-.252.496.496 0 0 1-.042-.028l-4.012-2.954a.5.5 0 0 1-.106-.699z"/>
							</svg>
						</h5>
						<a href="#" class="btn btn-primary btn-block">DEVOLUCIÓN
						</a>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-mb-6 col-lg-4">
				<div class="card">
					<div class="card-body text-primary">
						<h5 class="card-title text-center">
							<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-cash-stack" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z"/>
								<path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z"/>
								<path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
							</svg>
						</h5>
						<a href="#" class="btn btn-primary btn-block">CIERRE DE CAJA
						</a>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-mb-6 col-lg-4">
				<div class="card">
					<div class="card-body text-primary">
						<h5 class="card-title text-center">
							<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-graph-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z"/>
							</svg>
						</h5>
						<a href="#" class="btn btn-primary btn-block">REPORTES
						</a>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-mb-6 col-lg-4">
				<div class="card">
					<div class="card-body text-primary">
						<h5 class="card-title text-center">
							<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
								<path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							</svg>
						</h5>
						<a href="capa_presentacion/PreUsuarios.php" class="btn btn-primary btn-block">USUARIOS
						</a>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-mb-6 col-lg-4">
				<div class="card">
					<div class="card-body text-primary">
						<h5 class="card-title text-center">
							<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-person-x-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
							</svg>
						</h5>
						<a href="#" class="btn btn-primary btn-block">CIERRE DE SESIÓN
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>

	<br>
	<footer>
		<div class="container text-center">
			<h4>USUARIO</h4>			
		</div>	
	</footer>
	
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.js"></script>	
</body>
</html>