<?php
	//Inlcuir el CONFIG
	require_once("config/config.php"); 

	/*
	// --- PROBANDO BD ---
	require_once("class/basedatos.php");
	$bd = new BaseDatos();
	echo "Instanciada la BD<br>";
	echo $bd->usuario . "<br>";
	$bd->conectar();
	echo "Conexion realizada a la BD<br>";
	*/

	/* 
	// --- PROBANDO MODELO --- 
	require_once("models/producto.php");
	$producto = new Producto();

	$tabla = $producto->listarTodos();

	var_dump($tabla);
	*/
	
	
	//Incluir el Controlador PADRE
	//Sirve para poder acceder a los controladores y a la vez a los metodos de este , como la base de datos o que se visuallzia
	require_once("class/controlador.php");

	//Incluir el ruteador
	require_once("class/ruteador.php");
	
	//Instanciar la clase
	$ruteador = new Ruteador();	
