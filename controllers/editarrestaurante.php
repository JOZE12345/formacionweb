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
		$codMenu =  $restaurantes[0];
		
		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");

	}
	function editar()
	{
		$objmodel = new stock_model();
		$p_nombreRestaurante =  $_GET["p_nombreRestaurante"] ;
		$p_direccion = $_GET["p_direccion"];
		$p_Telefono = $_GET["p_Telefono"];
		$p_permiso = $_GET["p_permiso"];
		$p_per_salu = $_GET["per_salu"];
		$lat = $_GET["lat"]; 
		$lng = $_GET["lng"];
		$p_restaurante_ID = $_GET["idrestaurante"];
		$p_codrestaurante_detalle = $_GET["idrestaurantedetalle"];
		$pemisototal = 0;
	
		if($p_permiso==1 || $p_per_salu == 1)
		{	
			$permisototal = 1;
		}
		else{
			$permisototal = 2;
		}

		if($p_nombreRestaurante!="" && $p_direccion!="" && $p_Telefono != "" && $permisototal!= "" && $lat!= "" && $lng!= ""&& $p_restaurante_ID!= "" && $p_codrestaurante_detalle!= ""){

		$objmodel->editarRestaurante($p_nombreRestaurante,$p_direccion, $p_Telefono, $permisototal,$lat,$lng,$p_restaurante_ID,$p_codrestaurante_detalle);
		header("Location:".  constant('URL')."tablarestaurante");
		}else{

			header("Location:".  constant('URL')."editarrestaurante?id=".$p_restaurante_ID."|".$p_codrestaurante_detalle);

		}
	}
	function eliminarplato(){

		$objmodel = new stock_model();
		$idrestaurante = $_GET["id"];
		$idplato = $_GET["codPlato"];
	
		$idmenu = $_GET["codMenu"];

		$objmodel->EliminarPlato($idplato,$idmenu);

	//	echo $variablesseparadas[0] ; 
		header("Location:".  constant('URL')."editarrestaurante?id=".$idrestaurante);

	}

	


}
?>