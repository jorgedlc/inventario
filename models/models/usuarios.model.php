<?php


	require_once('../../bd/conexion.php');
	require_once('../entities/usuarios.entity.php');
	
	class UsuariosModel{
		
		private $db;
		
		public function __CONSTRUCT(){

			
		}
		
		public function listarUsuarios(){
			
			$db=new Conexion_db();
			
			$result=array();
					
			//Llamada al procedimiento almacenado
			$sql="call listar_usuarios();";
			
			$stmt=$db->__GET('_db')->prepare($sql);
			
			if($stmt->execute()){

				foreach($stmt->fetchAll(PDO::FETCH_OBJ) as $fila){

					$user=new Usuario();			
					
					$user->__SET('id_usuario', $fila->id_usuario);
					$user->__SET('nombre', $fila->nombre);
					$user->__SET('apellido', $fila->apellido);
					$user->__SET('id_tipo_usuario', $fila->id_tipo_usuario);
					$user->__SET('usuario', $fila->usuario);
					$user->__SET('estado', $fila->estado);
														
					$result[]=$user;
				}            
			}        
			
			return $result;
			
			
		}
		//Resive un objeto de tipo usuario 
		public function login($usuario){
			
			
			$db=new Conexion_db();
			
			$usr=null;
			
			//Los objetos nos se pueden pasar por referencia
			$contrasena=$usuario->__GET('contrasena');
			$usuario=$usuario->__GET('usuario');
			
				
			
			$sql="call login(:usuario,:contrasena)";
			
			$stmt=$db->__GET('_db')->prepare($sql);
			$stmt->bindParam('usuario',$usuario);
			$stmt->bindParam('contrasena',$contrasena);
			
			
			if($stmt->execute()){
			
				foreach($stmt->fetchAll(PDO::FETCH_OBJ) as $fila){
			
					$usr=new Usuario();
	
					$usr->__SET('id_usuario', $fila->id_usuario);
					$usr->__SET('nombre', $fila->nombre);
					$usr->__SET('apellido', $fila->apellido);
					$usr->__SET('estado', $fila->apellido);
					$usr->__SET('id_tipo_usuario', $fila->id_tipo_usuario);
										
				}            
			}	

			return $usr;
		
		}
		
		public function agregarUsuario($usuario){
			
			
			
		}
		
		public function eliminarUsuario($usuario){
			
			
		}
		
		public function editarUsuario($usuario){
			
			
			
		}
		
	}
	

?>