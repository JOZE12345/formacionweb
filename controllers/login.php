<?php
class login
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
		$nombre = "login/index";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";



	

	

		$this->modelo = new stock_model();
		$this->modelo->readerpara();

	
		//$this->consulta = $this->modelo->get();
		
		
	
		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");

	}

    
	function ValidarIngreso(){
        require_once("codificar.php");
        $stock_model = new stock_model();
        $entidadcode = new EntidadCode();
        $cod = new codificar();
      
        
    
        if((isset($_POST["usuario"])) && (isset($_POST["passw"]))){
             $entidadcode->usuario_set($_POST["usuario"]);
             $entidadcode->clave_set($_POST["passw"]);
            //session_start();
            $entidadcode = $cod->inic($entidadcode,8);
            $_SESSION['user'] = $entidadcode->usuario_get();
            $_SESSION['pass'] = $entidadcode->clave_get();
        
            
            if(clase_conexioninicial::validar()){
                //mejor esto igual al validar el estado 
                if($stock_model->validaringresocod($_POST["usuario"],md5($_POST["passw"]))!=''){                   
                    $estado = $stock_model->validarestado($_POST["usuario"]) ;                    
                    $recuperarestado = $estado[0];  
                    //
                    if(!is_null($recuperarestado["_estadousuario"])){
                        if($recuperarestado["_estadousuario"]=="ACTIVO"){
                            $tienda = $stock_model->validartienda($_POST["usuario"]) ; 
                            $recuperartienda = $tienda[0];
                           // echo var_dump(is_null($recuperartienda["_descalmacen"]));
                            if(is_null($recuperartienda["_descalmacen"]) == false ){
                                
                                if($recuperartienda["_descalmacen"]!="" ){
                                $_SESSION['r'] = "main";
                                $_SESSION['Tienda_sesion'] = $recuperartienda["_descalmacen"];
                                $_SESSION['use'] = $_POST["usuario"];
                                header("Location:".  constant('URL'));
                                }else{
                                    header("Location:".  constant('URL')  ."login?v=jasdfkldfuenadflsadfujqnfsf");
            
                                }
                            }else{
                               // echo "entro";
                                header("Location:".  constant('URL')  ."login?v=jasdfkldfuenadflsadfujqnfsf");
            
                            }
                        
                        }else{
                            header("Location:".  constant('URL')  ."login?v=jasdfkldfuenadflsadfujqnfsf");

                        }
                   ///
                }else{
                    header("Location:".  constant('URL')  ."login?v=jasdfkldfuenadflsadfujqnfsf");

                }
              
                }else{
                    header("Location:".  constant('URL')  ."login?v=GHRTADFADWFASDFDFADFEFCVEFA23XFAF");
    
                }
                
            }else{
                header("Location:".  constant('URL')  ."login?v=GHRTADFADWFASDFDFADFEFCVEFA23XFAF");
            
            }
        }
    
        }
	

}


?>