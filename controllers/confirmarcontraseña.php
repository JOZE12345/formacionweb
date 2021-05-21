<?php


class confirmarcontraseña extends Controlador
{
	
	function __construct()
	{

		
		//Invocar al metodo MostrarVista
		//$this->mostrarVista("errores/index");
	}

	function mostrarVista()
	{
		$nombre = "confirmarcontraseña/index";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";


        //if(isset($_SESSION)){}
        $codigoenviado = $_GET["v"];
      
       // echo $_COOKIE["random"];
       if(isset($_COOKIE["random"])){
        if($_COOKIE["random"]==$codigoenviado)      {
          
           
        }else{
         
          //  header("Location:".  constant('URL')."login?e=asdgfdgdfafdfdsf");

        }
    }
		//Incluir el archivo (codigo) de la vista   
		require_once("$fileName");

	}
    function restablecer(){

        $p_contraseña = $_POST["contraseñaconfirmada"] ; 
        $p_usuario = $_POST["usuario"] ; 
      

        $objmodel = new stock_model();
       
       
       
            if(isset($_POST["contraseñaconfirmada"]) && isset($_POST["usuario"])){

                      $objmodel->restablecercontraseña($p_contraseña,  $p_usuario);

                header("Location:".  constant('URL')."login");




        }else{

           header("Location:".  constant('URL')."registrar?v=GHRTADFADWFASDFDFADFEFCVEFA23XFAF");
        }


    }

    
}