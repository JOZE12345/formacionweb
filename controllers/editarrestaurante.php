<?php
class editarrestaurante extends Controlador
{
	
	function __construct()
	{

		$this->mensaje = "<p>Se ha producido un error al llamar al recurso.</p>";
		
		//Invocar al metodo MostrarVista
		//$this->mostrarVista("errores/index");
	}
	function mostrarVista()
	{
		$nombre = "editarrestaurante/index";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";
        $objstock = new stock_model();
        $idrestaurante = $_GET["id"];
		$variablesseparadas = explode("|", $idrestaurante);
        $restaurantes  =  $objstock->Menus($variablesseparadas[0]);
		$traer = $objstock->traerRestaurante($variablesseparadas[0],$variablesseparadas[1]);
		$recuperarrestaurante = $traer[0];
		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");

	}
	function editar()
	{
		$objmodel = new stock_model();
		$p_nombreRestaurante =  $_POST["p_nombreRestaurante"] ;
		$p_direccion = $_POST["p_direccion"];
		$p_Telefono = $_POST["p_Telefono"];
		$p_permiso = $_POST["p_permiso"];
		$p_per_salu = $_POST["per_salu"];
		$lat = $_POST["lat"]; 
		$lng = $_POST["lng"];
		$p_restaurante_ID = ["p_restaurante_ID"];
		$p_codrestaurante_detalle = ["p_codrestaurante_detalle"];


		if((trim($p_per_salu)!="No Tiene ningun permiso") && (trim($p_permiso)!="No Tiene ningun permiso"))
		{
			
			$permisototal = 1 ;
		} else{
			$permisototal = 2 ;
		}


		$objmodel->editarRestaurante($p_nombreRestaurante,$p_direccion, $p_Telefono, $permisototal,$lat,$lng,$p_restaurante_ID,$p_codrestaurante_detalle);
	}


}
?>