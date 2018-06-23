<?php

//Requerir archivo de entidades
//Requerir modelo de usuarios
require_once('bd/conexion.php');

class LoginController{
	
	private $model;
	
	public function __CONSTRUCT(){
			
	}
	
	//Retorna la vista de login
	public function index(){		
		require_once('views/usuarios/login.view.php');	
	}
	
	//Metodo para ingresar
	public function login(){
					
	}
	
	//Metodo para cerrar session
	public function logout(){
		
		
	}
	
}

?>