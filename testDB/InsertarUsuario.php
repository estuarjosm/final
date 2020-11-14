<?php 


class InsertarUsuario
{

	public function insertar($nombre,$correo,$pass,$rol,$estado)
	{
		$dbhost = "localhost:33065";
		$dbname = "examenfinal";
		$dbuser = "root";
		$dbpass = "";
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
