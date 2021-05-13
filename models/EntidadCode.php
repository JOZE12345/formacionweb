<?php

class EntidadCode{

    private  $_bd;
    private  $_servidor;
    private  $_usuario ;
    private  $_clave;
    private  $_puerto ;

    function __construct()
	{

		//Invocar al metodo MostrarVista
	//	$this->mostrarVista();
    }
    /////////////////////////////////////////
    public function bd_set($bd)
    {
        $this->_bd = $bd ; 

    }
    public function bd_get()
    {
       return $this->_bd ;

    }
    ///////////////////////////////////////

    public function servidor_set($servidor)
    {
        $this->_servidor = $servidor; 

    }
    public function servidor_get()
    {
       return $this->_servidor;

    }
    /////////////////////////////////////
    public function usuario_set($usuario)
    {
        $this->_usuario = $usuario ; 

    }
    public function usuario_get()
    {
       return $this->_usuario ;

    }

    ////////////////////////////////////
    public function clave_set($clave)
    {
        $this->_clave= $clave; 

    }
    public function clave_get()
    {
       return $this->_clave ;

    }
    ///////////////////////////////////
    public function puerto_set($puerto)
    {
        $this->_puerto = $puerto ; 

    }
    public function puerto_get()
    {
       return $this->_puerto ;

    }
    ////////////////////////////////////
    
    






}




?>