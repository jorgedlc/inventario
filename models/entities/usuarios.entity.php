<?php

	class Usuario{
		
		private $id_usuario;
		private $id_tipo_usuario;
		private $nombre;
		private $apellido;
		private $usuario;
		private $contrasena;
		private $estado;
				
		public function __GET($k){ return $this->$k; }
		public function __SET($k,$v){  return $this->$k=$v;}
				
	}


?>