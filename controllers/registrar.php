<?php
class registrar extends Controlador
{
	
	function __construct()
	{

		$this->mensaje = "<p>Se ha producido un error al llamar al recurso.</p>";
		
		//Invocar al metodo MostrarVista
		//$this->mostrarVista("errores/index");
	}
	function mostrarVista()
	{
		$nombre = "registrar/index";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");

	}
    function registrarusuario(){
        $objmodel = new stock_model();
        $p_nombre = $_POST["p_nombre"] ;
        $p_apellido = $_POST["p_apellido"] ;
        $p_dni = $_POST["p_dni"] ; 
        $p_telefono = $_POST["p_telefono"]; 
        $p_direccion = $_POST["p_direccion"] ; 
        $p_usuario = $_POST["p_usuario"] ; 
        $p_contraseña = $_POST["p_contraseña"] ; 
        $p_cod_RolUsuario = $_POST["p_cod_RolUsuario"] ;

        if(isset($_POST["p_nombre"])&&isset($_POST["p_apellido"])&&isset($_POST["p_dni"])&&isset($_POST["p_telefono"])&&isset($_POST["p_direccion"])&&isset($_POST["p_usuario"])
        &&isset($_POST["p_contraseña"])&&isset($_POST["p_cod_RolUsuario"])){

        $objmodel->regitrarse($p_nombre,$p_apellido, $p_dni, $p_telefono,$p_direccion,$p_usuario,$p_contraseña,$p_cod_RolUsuario);

        header("Location:".  constant('URL')."login");




        }else{

            header("Location:".  constant('URL')."registrar?v=GHRTADFADWFASDFDFADFEFCVEFA23XFAF");
        }



    }

}
 ?>