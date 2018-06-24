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
		public function __SET($k, $v){ return $this->$k = $v; }
		
		//Funcion para retornar json con las propiedades (por problema de la visibilidad no se puede usar 
		//directamente json_encode()
		public function toJSON(){
			$json = array(
				'id_usuario'=>$this->__GET('id_usuario'),
				'usuario' => $this->__GET('usuario'),
				'contrasena' => $this->__GET('contrasena'),
				'estado' => $this->__GET('estado'),
				'nombre' => $this->__GET('nombre'),
				'apellido' => $this->__GET('apellido'),
				'id_tipo_usuario'=>$this->__GET('id_tipo_usuario')
			);
		
			return json_encode($json);
		}
				
	}


?>