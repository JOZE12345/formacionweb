<?php
class platos extends Controlador
{
	
	function __construct()
	{

		$this->mensaje = "<p>Se ha producido un error al llamar al recurso.</p>";
		
		//Invocar al metodo MostrarVista
		//$this->mostrarVista("errores/index");
	}

    function mostrarVista()
	{
		$nombre = "platos/index";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";

		$idrestaurante_detalle = $_GET["idrestaurantedetalle"];
		$idmenu = $_GET["idmenu"];
		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");



	}
function subido(){
	$objstock = new stock_model();

	

	$idrestaurante_detalle = $_POST["idrestaurantedetalle"];
	$idmenu = $_POST["idmenu"];
		$nombreplato = $_POST["nombreplato"];

		$cantidad = $_POST["cantidad"];

		$precio = $_POST["precio"];
		$tipoplato = $_POST["tipoplato"];

		if($idrestaurante_detalle!="" && $idmenu!="" && $nombreplato != "" && $cantidad!= "" && $precio!= "" && $tipoplato!= ""){

	//	echo $idrestaurante_detalle,$idmenu,$nombreplato,$cantidad,$precio,	$tipoplato  ;
	if(isset($_FILES['image'])){
		$errors= array();
		$file_name = $_FILES['image']['name'];
		$file_size =$_FILES['image']['size'];
		$file_tmp =$_FILES['image']['tmp_name'];
		$file_type=$_FILES['image']['type'];
		$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
		
		$extensions= array("jpeg","jpg","png");
		
		if(in_array($file_ext,$extensions)=== false){
		   $errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}
		
		if($file_size > 2097152){
		   $errors[]='File size must be excately 2 MB';
		}
		
		if(empty($errors)==true){
		   move_uploaded_file($file_tmp,"C:/xampp/htdocs/Formacion/formacionweb/public/img/".$file_name);
		   echo "Success";
		   if(Trim($idmenu)==""){
			$objstock->insertarMenu($idrestaurante_detalle);
			$objstock->añadirplato_menunuevo($cantidad,	$nombreplato,"public/img/".$file_name,$precio,$tipoplato);
			echo "menu-plato";
			header("Location:".  constant('URL')."tablarestaurante");
		  }else{
			echo $idmenu ;
			$objstock->añadir_plato($idmenu,$cantidad,	$nombreplato,"public/img/".$file_name,$precio,$tipoplato);
			echo "plato";
			header("Location:".  constant('URL')."tablarestaurante");
		  }
	  
		}else{
		   print_r($errors);
		}
	 }
	
	}else{


		header("Location:".  constant('URL')."platos?idmenu=". $idmenu." &idrestaurantedetalle=".$idrestaurante_detalle);


	 }




	// echo "C:/xampp/htdocs/Formacion/formacionweb/public/img/".$file_name ;





}

}
 ?>