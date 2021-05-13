<?php
class main 
{
	private $modelo;
	private $consulta;
	private $tienda ; 
	private $periodo ; 
	function __construct()
	{

		//Invocar al metodo MostrarVista
		
	}

	function mostrarVista()
	{
		$nombre = "main/index";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";
		$this->modelo = new stock_model();
		

		$estado = $this->modelo->validarestado($_SESSION['use']) ;                    
		$recuperarestado = $estado[0];  
		if(!is_null($recuperarestado["_estadousuario"])){
			if($recuperarestado["_estadousuario"]=="ACTIVO"){
				$tienda = $this->modelo->validartienda($_SESSION['use']) ; 
				$recuperartienda = $tienda[0];
			
				if(is_null($recuperartienda["_descalmacen"]) == false ){
					
					if($recuperartienda["_descalmacen"]!="" ){
					
					$_SESSION['Tienda_sesion'] = $recuperartienda["_descalmacen"];
					
					}else{
						$this->cerrarsesion();
						header("Location:".  constant('URL')  ."login?v=jasdfkldfuenadflsadfujqnfsf");

					}
				}else{
				   // echo "entro";
				   $this->cerrarsesion();
					header("Location:".  constant('URL')  ."login?v=jasdfkldfuenadflsadfujqnfsf");

				}
			
			}else{
				$this->cerrarsesion();
				header("Location:".  constant('URL')  ."login?v=jasdfkldfuenadflsadfujqnfsf");

			}
	   ///
	}else{
		$this->cerrarsesion();
		header("Location:".  constant('URL')  ."login?v=jasdfkldfuenadflsadfujqnfsf");

	}

	

	 

		$this->modelo->readerpara();
	
		$this->consulta = $this->modelo->get();
			
		
	
		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");

	}

	function cerrarsesion(){

	//	setcookie('tienda', '',0);
	
		//setcookie("tienda", "", 0);
		//setcookie("periodo", '',0);
		unset($_SESSION['user']);
		unset($_SESSION['pass']);
		unset($_SESSION['r']);
		session_unset();
		session_destroy();
		header("Location:".  constant('URL'));
	}

	


}


?>