<?php 

class Conexion
{

	private $servidor;
	private $usuarios;
	private $password;
	private $base;
	private $conexion;

	function __construct() 
	{
		require_once 'ConfiguracionBaseDatos.php';
		$this->servidor = HOST;
		$this->usuarios = USER;
		$this->password = PASSWORD;
		$this->base = DATABASE;
	}

	function Conectar() 
	{
		$cadenaConexion = 'mysql:host=' . $this->servidor . ';dbname=' . $this->base . ';charset=utf8';
		try {
			$this->conexion = new PDO($cadenaConexion,$this->usuarios,$this->password);
			$this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
		} catch (Exception $e) {
			$this->conexion = 'Error de conexions';
			echo "ERROR: " . $e->getMessage();
		}
	}

	function Consultar($sql) 
	{
		$datos = array();
		$resultado = $this->conexion->query($sql);
		$error = $this->conexion->errorInfo();
		if ($error[0] === "00000") {			
			if ($resultado->rowCount() > 0) {
				while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
					array_push($datos, $row);
				}
			}
			if ($resultado->rowCount() == 0) {
				session_start();
				$_SESSION['mensaje'] = 'SIN REGISTRO';
			}
		} else {
			throw new Exception($error[2]);			
		}
		return $datos;
	}

	function Ejecutar($sql)
	{
		$resultado = $this->conexion->query($sql);
		$error = $this->conexion->errorInfo();
		if ($error[0] === "00000") {			
			return $resultado->rowCount() > 0;		
		} else {
			throw new Exception($error[2]);			
		}
	}


	function Cerrar()
	{
		$this->conexion = null;
	} 
}

