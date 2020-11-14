<?php 

use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

class InsertarUsuarioTest extends TestCase{	
	use TestCaseTrait;

	static private $pdo=null;

	private $conn =null;

	final public function getConnection() {
		if ($this->conn===null) {
			if (self::$pdo == null){
				self::$pdo = new PDO("mysql:dbname=examenfinal;host=examenexamen.mysql.database.azure.com", "estuar@examenexamen", "EJ140505%");
			}
			$this->conn = $this->createDefaultDBConnection(self::$pdo, "examenfinal");
		}
		return $this->conn;
	}

	public function getDataSet(){
		return $this->createFlatXmlDataSet('./testDB/usuario_entabla.xml');
	}

	public function testRowCount(){
		$this->assertSame(2, $this->getConnection()->getRowCount('usuarios'), "Pre-Condition");
	}

	public function testAgregar(){
		require "InsertarUsuario.php";
		$insertar = new InsertarUsuario();
		$insertar->insertar("Andres","aa@gmail.com","777",1,1);
		$queryTable = $this->getConnection()->createQueryTable('usuarios', 'SELECT id_usuario, nombre_usuario, correo_usuario, pass_usuario, rol_usuario, estado_usuario FROM usuarios');
		$expectedTable = $this->createFlatXmlDataSet("./testDB/usuario_esperado.xml")->getTable("usuarios");
		$this->assertTablesEqual($expectedTable, $queryTable);
	}

}

?>