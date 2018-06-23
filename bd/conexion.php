<?php
require("parametros.php");
class Conexion_db
{
	private $_db;

	public function __GET($k){ return $this->$k; }
	
    public function __CONSTRUCT()
	{
		
		$dsn = "mysql:dbname=".DB_NAME.";host=".DB_HOST;
		$usuario = DB_USER;
		$contraseña = DB_PASS;

			try {
				$this->_db = new PDO($dsn, $usuario, $contraseña);
			
			}
			catch (PDOException $e) {
				
				echo 'Falló la conexión: ' . $e->getMessage();
			}				
	}
	
}


?>
