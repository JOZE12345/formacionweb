<?php

require_once("controllers/errores.php");

class Ruteador
{
	
	function __construct()
	{
		$this->iniciar();
	}

	function iniciar()
	{
	
	


		
		
		//ini_set("session.cookie_lifetime","28800");
		//ini_set("session.gc_maxlifetime","28800");
		session_set_cookie_params(60*60*24*1);



		session_start();
		//echo $_SESSION["session.gc_maxlifetime"];
		    // Establecer tiempo de vida de la sesión en segundos
		$inactividad = 1800;
			// Comprobar si $_SESSION["timeout"] está establecida
			if(isset($_SESSION["timeout"])){
				// Calcular el tiempo de vida de la sesión (TTL = Time To Live)
				$sessionTTL = time() - $_SESSION["timeout"];
				if($sessionTTL > $inactividad){
					session_unset();
					session_destroy();
					header("Location:".  constant('URL'));
				}
			}
		//	echo time() - $_SESSION["timeout"];
			// El siguiente key se crea cuando se inicia sesión
		
			$_SESSION["timeout"] = time();

	
		//Recoger la variable URL enviado por GET
		//y darle FORMATO
		//isset determina si la variable esta definida y no es null
		// condicion ? verdadero : falso
		//PARA REDIRIGIR HTTPS
		//local 
		
		/*$host = $_SERVER['HTTPS'] ;
		if($host=="")
		{
			?>

			<script>  window.location ="https://boticasamorysalud.com/"</script>
				   <?php
											
													
											
        }else{*/
			//se pone como variable principal segun la validacion del login

		if(isset($_SESSION['r'])){
			if($_SESSION['r']!=''){
			if(isset($_GET["url"])){
				if($_GET["url"]=="login"){
					$gt = "main";
				}else if($_GET["url"]=="loginfull"){
					$gt = "main";
	
				}else {
					$gt = $_GET["url"] ;
				}
			}else{
				$gt = $_SESSION['r'] ;
			}

			
				
			/*if(isset($_GET["url"])){
				if($_GET["url"]=="login"){
					$gt = "main";
				}else if($_GET["url"]=="loginfull"){
					$gt = "main";
	
				}else {
					$gt = $_GET["url"] ;
				}
			}else{
				$gt = $_SESSION['r'] ;
			}*/
		}

		}else{

			if(isset($_GET["url"])){
				

				
				if($_GET["url"]!="login"){
					if($_GET["url"]=="loginfull"){
						$gt = "loginfull";
					}else if($_GET["url"]=="login/ValidarIngreso"){
						//header("Location:".  constant('URL')  ."login");login/ValidarIngreso
						$gt = $_GET["url"] ;
						//$gt = "login";
					}else{
						$gt = "login";
					}
				}else{
					$gt = "login";
				}
				
			}else{
				$gt = "login";
			}
		}
			
		
		//$url = isset($_GET["url"]) ? $_GET["url"] : $inicio ;
												//Controlador por defecto
		$url = $gt ;											
												
		
		//Eliminar el "/" final
		//rtrim elimina el valor final
		$url = rtrim($url, "/");
		//Subdividir la URL		
		$url = explode("/", $url);
		
		//Invocar a los CONTROLADORES

		$fileName = "controllers/" . $url[0] . ".php";
		
		

		if(file_exists($fileName))
		{
			//Incluir el archivo del controlador
			
			require_once($fileName);

			//Instanciar el CONTROLADOR
			$controlador = new $url[0];

			
			if(isset($url[1])){
				//Ejecutar el metodo
				//obj->metodo()
				

				if(method_exists($controlador,$url[1])){
				$controlador->{$url[1]}();
				
				}else{

					$controlador = new Errores();
					$controlador->mostrarVista();
				}
				
			
				
							//Colocar la variable entre llaves
							//para considerar el valor como variable
			}else{

				$controlador->mostrarVista();
			}
			
				
		
			
			
			

			//Mostrar VISTA del CONTROLADOR
			

		}
		else
		{
			$controlador = new Errores();
			$controlador->mostrarVista();

		}
	//	}
	}
}


?>