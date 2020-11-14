<?php
require "../capa_logica/ConexionBaseDatos.php";
require "../capa_negocios/ClaseUsuario.php";

$fnombre = strtoupper($_POST['nombre']);
$fcorreo = strtoupper($_POST['correo']);
$fpass = sha1($_POST['pass']);
$frol = $_POST['rol'];


$conexion1 = new Conexion();

$conexion1->Conectar();

$usuario1 = new Usuario();

$nuevo = $usuario1->Crear($fnombre,$fcorreo,$pass,$frol);

$conexion1->Ejecutar($nuevo);

$conexion1->Cerrar();

Header('location: ../capa_presentacion/PreUsuarios.php');

?>
