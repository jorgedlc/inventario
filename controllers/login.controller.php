<?php

require_once('models/entities/usuarios.entity.php');
require_once('models/models/usuarios.model.php');

class LoginController{
	
	private $model;
	
	public function __CONSTRUCT(){

			$model=new UsuariosModel();
	}
	
	//Retorna la vista de login
	public function index(){		
		require_once('views/usuarios/login.view.php');	
	}
	
	//Metodo para ingresar
	public function login(){
	
		session_start();

		
		$usuario=new Usuario();
		$usuario->__SET('usuario',$_REQUEST['usuario']);
		$usuario->__SET('contrasena',$_REQUEST['contrasena']);


		$model=new UsuariosModel();

		$user=$model->login($usuario);


		if($user==null){

			$objeto = new stdClass();
			$objeto->estado=3;

			echo json_encode($objeto);


		}
		else{

			echo $user->toJSON();;						

		}		

	}
	
	//Metodo para cerrar session
	public function logout(){
		
		
	}
	
}

?>