<?php 


class InsertarUsuario
{

	public function insertar($nombre,$correo,$pass,$rol,$estado)
	{
		$dbhost = "examenexamen.mysql.database.azure.com";
		$dbname = "examenfinal";
		$dbuser = "estuar@examenexamen";
		$dbpass = "EJ140505%";
		$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
		$sql ="insert into usuarios (nombre_usuario, correo_usuario, pass_usuario, rol_usuario, estado_usuario) values (?,?,?,?,?)";
		if ($stmt = $mysqli->prepare($sql)) {
			if ($stmt->bind_param("sssii", $nombre, $correo, $pass, $rol, $estado)) {
				if($stmt->execute()){
					$stmt->close();
					$mysqli->close();

				}
			}
		}
		
	}
}

?>
