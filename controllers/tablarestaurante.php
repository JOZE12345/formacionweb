<?php
class tablarestaurante extends Controlador
{
	
	function __construct()
	{

		$this->mensaje = "<p>Se ha producido un error al llamar al recurso.</p>";
		
		//Invocar al metodo MostrarVista
		//$this->mostrarVista("errores/index");
	}
	function mostrarVista()
	{
		$nombre = "tablarestaurante/index";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";

        
        $objstock = new stock_model();
        $restaurantes  =  $objstock->Todosrestaurantes();
        $administradores  =  $objstock->Administradores();
		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");

	}
	function eliminar()
	{
		$idrestaurante= $_GET["id"];
		$objstock = new stock_model();
		$objstock->EliminarRestaurantes($idrestaurante);
		header("Location:".  constant('URL')  ."tablarestaurante");

	}

	
}
?>