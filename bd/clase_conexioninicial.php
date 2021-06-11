<?php
 
class clase_conexioninicial{
   

    function __construct()
	{
       
	}

   
    private static $_bd;
    private static $_servidor;
    private static $_usuario ;
    private static $_clave;
    private static $_puerto ;
    
    private static $_conexion=null;


    public static function cargar(){

        require_once("modelo/EntidadCode.php");
        require_once("controllers/code.php");
        $entidadcode = new EntidadCode();
        if(isset($_COOKIE['empresa'])){
            if($_COOKIE['empresa']=="senati"){
               // $entidadcode->bd_set("=");
            $entidadcode->bd_set("");
            }
        }
       
        $entidadcode->servidor_set("");
            
        
        $entidadcode->usuario_set($_SESSION['user']);
        $entidadcode->clave_set($_SESSION['pass']);
        $entidadcode->puerto_set("=="); 
        
        $objeto = new Code();
        $entidadcode = $objeto->inic($entidadcode,8);
        self::$_bd = trim($entidadcode->bd_get());
        self::$_servidor=trim($entidadcode->servidor_get());
        self::$_usuario = trim($objeto->Descodificar("=",8).$entidadcode->usuario_get());
        self::$_clave=trim($objeto->Descodificar("==",8).$entidadcode->clave_get());
        self::$_puerto = trim($entidadcode->puerto_get());

       
       
    }
    public static function validar(){
        $confirmacion = false ; 
        require_once("modelo/EntidadCode.php");
        require_once("controllers/code.php");
        $entidadcode = new EntidadCode();
        if(isset($_COOKIE['empresa'])){
            if($_COOKIE['empresa']=="senati"){
              //  $entidadcode->bd_set("=");
            $entidadcode->bd_set("");
            }
        } 
      
         $entidadcode->servidor_set("");
                

        $entidadcode->usuario_set($_SESSION['user']);
        $entidadcode->clave_set($_SESSION['pass']);
        $entidadcode->puerto_set("=="); 
        
        $objeto = new Code();
        $entidadcode = $objeto->inic($entidadcode,8);
        self::$_bd = trim($entidadcode->bd_get());
        self::$_servidor=trim($entidadcode->servidor_get());
        self::$_usuario = trim($objeto->Descodificar("=",8).$entidadcode->usuario_get());
        self::$_clave=trim($objeto->Descodificar("==",8).$entidadcode->clave_get());
        self::$_puerto = trim($entidadcode->puerto_get());

        
        try{
           
        self::$_conexion=new PDO("pgsql:host=".self::$_servidor.";"."dbname=".self::$_bd,
                                    self::$_usuario,self::$_clave);

         $confirmacion = true ;          
        }catch(PDOException $e)
        {
            $confirmacion = false ; 
          //  die("Existe un error ->".$e->getMessage());


        }
        return $confirmacion;

    }
    public static function cargarajax(){
        session_start();
        require_once("../modelo/EntidadCode.php");
        require_once("../controllers/code.php");
        $entidadcode = new EntidadCode();
        if(isset($_COOKIE['empresasenati'])){
             //  $entidadcode->bd_set("VFZSM04ySklhM2xpU0hkNFVVWjBibEZzY0RkS1JXZHNaVE5XWldGRlRtdEpNa1YzV1VWS1UwMURPVlZPUkVWc1Z6RlNPRXBxUVc5UldEQjVZa1pDY2xOdU1VOVNlazFzVlRCNFRtTXpiMnBQUkZGM1RsUmFlRkZZVmxwWmFXZHNWekk1Y0dKc01XUktibGw0VVZoT1MyTkllRWxRUjJOc1NUSjRWRmRUV2xOU1JUVnBWbTR3YUU1cVJTdFRXRWxzVmxVMWJGTkdNSHBaYXpsclVERlpNRlZwZUVaWFZWRnM=");
             $entidadcode->bd_set("");
            
        }         
        $entidadcode->servidor_set("");
            
        $entidadcode->usuario_set("");
        $entidadcode->clave_set("==");
        $entidadcode->puerto_set("=="); 
        
        $objeto = new Code();
        $entidadcode = $objeto->inic($entidadcode,8);
        self::$_bd = trim($entidadcode->bd_get());
        self::$_servidor=trim($entidadcode->servidor_get());
        self::$_usuario = trim($entidadcode->usuario_get());
        self::$_clave=trim($entidadcode->clave_get());
        self::$_puerto = trim($entidadcode->puerto_get());

       
       
    }



    public static function conectar(){
        try{
           
            ///-----------------------

           /* self::$_conexion=new PDO("pgsql:host=".self::$_servidor.";"."port=".self::$_puerto.";"."dbname=".self::$_bd,
                                    self::$_usuario,self::$_clave);
*/

        self::$_conexion=new PDO("mysql:host=".self::$_servidor.";"."dbname=".self::$_bd,
                                    self::$_usuario,self::$_clave);
            /* self::$_conexion= pg_connect("host=201.240.44.159 port=5432 dbname=db1020 user=user2021 password=@User2021@");*/
            ///---------------------
           // pg_connection_status(self::$_conexion);

        }catch(PDOException $e)
        {
            unset($_SESSION['r']);
		    session_destroy();
            //header("Location:".  constant('URL')  ."errores");
            header("Location:".  constant('URL')  ."login");
            die();
            //die("Existe un error ->".$e->getMessage());



        }
        return self::$_conexion;





    }
    public static function desconectar()
    {

        self::$_conexion=null;


    }



}


?>