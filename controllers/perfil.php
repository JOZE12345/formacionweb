<?php
class perfil extends Controlador
{
	
	function __construct()
	{

		
		//Invocar al metodo MostrarVista
		//$this->mostrarVista("errores/index");
	}
	function mostrarVista()
	{
		require_once("models/EntidadCode.php");
    	require_once("code.php");
		$nombre = "perfil/index";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";
		$perfil = new stock_model();
		//$perfil->validaringresocod()
		$objeto = new Code();
		$entidadcode = new EntidadCode();
		$entidadcode->usuario_set($_SESSION['user']);
		$entidadcode=$objeto->inic($entidadcode, 8);//inic->decifrado, 8 cantidad de veces de descodificar, inic devulve variable
        $variablecualquiera =   $perfil->mostrarUsuario($entidadcode->usuario_get());

        $datosusuario =  $variablecualquiera[0];
       


		//echo $entidadcode->usuario_get();
		//reescribimos la misma variable
		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");

	}

	


}
?>