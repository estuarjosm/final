<?php
require "../capa_logica/ConexionBaseDatos.php";
require "../capa_negocios/ClaseUsuario.php";
require "EntFunciones.php";

$conexion1 = new Conexion();

$conexion1->Conectar();

$usuarios = new Usuario();

$sentencia = $usuarios->Mostrar();

$datos = $conexion1->Consultar($sentencia);

if (isset($_SESSION['mensaje'])) {
	print '<br><div class="alert alert-danger" role="alert">'.$_SESSION['mensaje'].'</div>';
	session_destroy();
}

if (empty($_SESSION['mensaje'])) {
	$encabezado = '<tr><th>ID</th><th>NOMBRE</th><th>CORREO</th><th>ROL</th><th>EDITAR</th><th>ELIMINAR</th></tr>';
	tabla($encabezado,$datos);		
}

$conexion1->Cerrar();

?>
