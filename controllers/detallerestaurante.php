<?php
class detallerestaurante extends Controlador
{
	
	function __construct()
	{

		$this->mensaje = "<p>Se ha producido un error al llamar al recurso.</p>";
		
		//Invocar al metodo MostrarVista
		//$this->mostrarVista("errores/index");
	}
	function mostrarVista()
	{
		$nombre = "detallerestaurante/index";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");

	}
	function agregar()
	{
		$objmodel = new stock_model();

		



		$p_nombreRestaurante =  $_POST["p_nombreRestaurante"] ;
		$p_direccion = $_POST["p_direccion"];
		$p_Telefono = $_POST["p_Telefono"];
		$p_permiso = $_POST["p_permiso"];
		$p_per_salu = $_POST["per_salu"];
		$lat = $_POST["lat"]; 
		$lng = $_POST["lng"];
		$pemisototal = null;

		if($p_permiso==1 || $p_per_salu == 1)
		{	
			$permisototal = 1;
		}
		else{
			$permisototal = 2;
		}
		
		if($p_nombreRestaurante!="" && $p_direccion!="" && $p_Telefono != "" && $permisototal!= "" && $lat!= "" && $lng!= ""){

        $objmodel->insertarRestaurante($p_nombreRestaurante,$p_direccion, $p_Telefono, $permisototal,$lat,$lng);

        header("Location:".  constant('URL')."tablarestaurante");
		
		}else{
			header("Location:".  constant('URL')."detallerestaurante");

		}
	}

}
?>