<?php 

class Usuario
{
	private $nombre;
	private $correo;
	private $contra;
	private $rol;
	private $estado;

	function Crear($vnombre, $vcorreo, $vcontra, $vrol)
	{
		$this->nombre = $vnombre;
		$this->correo = $vcorreo;
		$this->contra = sha1($vcontra);
		$this->rol = $vrol;
		$this->estado = 1;
		$cadena_sql =  
		'CALL crear_usuario("'.$this->nombre.'","'.$this->correo.'","'.$this->contra.'",'.$this->rol.','.$this->estado.')';
		return $cadena_sql;
	}

	function Mostrar()
	{
		$cadena_sql = 'CALL mostrar_usuario()';
		return $cadena_sql;
	}

	/*function Buscar($vbuscar)
	{

	}

	function Modificar($vnombre, $vcontra, $vrol, $vestado)
	{

	}

	function Eliminar($vid)
	{

	}*/
}