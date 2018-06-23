

<?php

//Requerir las entidades para el mapeo
//Requerir el modelo cuando este echo
//Requerir el archvio de la bd
require_once('bd/conexion.php');

class UsuariosController{
	
	//Variable que generara la instamcia  del modelo para ser utilizada
	private $model;
	
	
	public function __CONSTRUCT(){
		
		//Inicializar modelo
	}
	
	public function index(){
		
		require_once('views/usuarios/usuarios.view.php');
	}
	
	
	public function ingresarUsuario(){
		
		
	}
	public function actualizarUsuario(){
		
		
	}
	
	public function eliminarUsuario(){
				
		
	}
	
}


?>