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



	

	

		//$this->modelo = new stock_model(); descomentar para que funcione bd 
		//$this->modelo->readerpara();

	
		//$this->consulta = $this->modelo->get();
		
		
	
		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");

	}

    
	function ValidarIngreso(){
        require_once("codificar.php");
        $stock_model = new stock_model();
        $entidadcode = new EntidadCode();
        $cod = new codificar();
   //     echo "hola1";
        
    
        if((isset($_POST["usuario"])) && (isset($_POST["passw"]))){
          
            $estado = $stock_model->validaringresocod($_POST["usuario"],($_POST["passw"])) ;   
          //  echo var_dump($estado);
            
            $recuperarnombre = $estado[0];
           echo var_dump($recuperarnombre);  
          
                //mejor esto igual al validar el estado 
                if(!is_null($recuperarnombre["nombre"])){        
                    echo "ga";
                    $entidadcode->usuario_set($_POST["usuario"]);
                    $entidadcode->clave_set($_POST["passw"]);
                   //session_start();
                  // echo "hola2";
                   $entidadcode = $cod->inic($entidadcode,8);
                //   echo "hola3";
                   $_SESSION['user'] = $entidadcode->usuario_get();
                  
                   $_SESSION['pass'] = $entidadcode->clave_get();
                //   echo "hola4";           
                  // echo $recuperarnombre["nombre"] ;
                  $_SESSION['use'] = $_POST["usuario"];
                                
                                $_SESSION['r'] = "main";
                               // $_SESSION['use'] = $_POST["usuario"];
                                header("Location:".  constant('URL'));
                             
                           
                   ///
               
              
                }else{
                  header("Location:".  constant('URL')  ."login?v=GHRTADFADWFASDFDFADFEFCVEFA23XFAF");
    
                }
                
            }else{
                header("Location:".  constant('URL')  ."login?v=GHRTADFADWFASDFDFADFEFCVEFA23XFAF");

            }
        
    
    }
	

}


?>