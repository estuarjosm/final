<?php 

use PHPUnit\Framework\TestCase;

class ClaseUsuarioTest extends TestCase
{
	public function test_crear(){
		$tnombre = 'Pedro Diaz';
		$tcorre = 'pedro@gmail.com';
		$tcontra = '12345';
		$trol = 1;
		
		require 'capa_negocios/ClaseUsuario.php';
		$usuario1 = new Usuario;

		$sentencia_obtenida = $usuario1->Crear($tnombre,$tcorre,$tcontra,$trol);	
		$sentencia_obtenida2 = $usuario1->Mostrar();

		$sentencia_deseada = 'CALL crear_usuario("Pedro Diaz","pedro@gmail.com","'.sha1($tcontra).'",1,1)';
		$this->assertEquals($sentencia_obtenida,$sentencia_deseada);

		echo "\n--- Test Clase Usuario -- Función Crear-- Superado ---";

		$sentencia_deseada2 = 'CALL mostrar_usuario()';

		$this->assertEquals($sentencia_obtenida2,$sentencia_deseada2);

		echo "\n--- Test Clase Usuario -- Función Mostrar-- Superado ---";
	}
	

}

?>