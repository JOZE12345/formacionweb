<?php
class ubicaciones 
{
	function __construct()
	{

		//Invocar al metodo MostrarVista
		
	}

	function mostrarVista()
	{
		$nombre = "ubicaciones/index";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";
        require_once("$fileName");
	//
    }

}
    ?>