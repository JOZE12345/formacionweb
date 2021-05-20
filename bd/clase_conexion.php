<?php
//clase_conexion::cargar();
//echo var_dump( clase_conexion::conectar());
class clase_conexion{
   

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

        require_once("models/EntidadCode.php");
        require_once("controllers/code.php");
        $entidadcode = new EntidadCode();

        if(isset($_COOKIE['empresasenati'])){
            if($_COOKIE['empresasenati']=="senati"){
                //$entidadcode->bd_set("=");
                $entidadcode->bd_set("WmxWV1NrMUZaM1JSYlRGc1kxUk9hRnBWUlhaYVZrMXNXV3RDWWxkNmRFSmlSMFl3VjFSV2RsUXpiRkppYWpCc1RUQmtXRXBwWnpWWFdERjFUMU5TV2xGVGF6TlpVM05zVUhsb2FWbEdWbnBtVkdob1kxaDRlbEY1WkdOVFZrMXNZVWRXYW1GVWVFdGFNR1I1VGtWSk1GUnRVWEpXYkRSc1RVWmpPVlI1ZUhwUFNFWXhTME5HTkdKR1l5dE9WMUZzVlhscmEySlRjMjlqVjFwb1pWZHJjRkZXT1ZabGEwVnNVMnh2Y2s0d1ZTOVRhbVF3V2taQmMySkZXbGxrYmtGc1VsZGFTMWxVY0dOTWVWSjZabGRrUzJGRVVrOVZha2xzWmxkV1YwNUZUa1pQUjNSc1RXa3hkR1JUTkc1VldGVnNVbFkxZFdGWWVGaFJibHA1VWxWR1RWbEViRU5VTWpoc1ZFWTVSMlZyYUdGWGFWWnJTbGhCZFdScFRsVmlNbU5zVGxoc1dsaEhXbUZRVXpGcFRXcFdlbVV3VVd0Tk1UaHM=");
            }
        }

        
         $entidadcode->servidor_set("VGpCR01XVkVaRFpRVkRFd1RXMUtWVlV4WTNOTk1FVnNTa00wTVdGc1JYSk5Wa0o2VTBka1kyUXllSGxLVmtsc1UyMWFaV05YVWpoTGVUbDJWVEJqTTFKV1JrMVJSV05zUzBZeFpsUllZM1JMTUZadlVrVlphVnBFZEdobE1XdHNZa1ZKZDFsRldYZFpSMnh6UzFaamQxVnBhRlpTVnpoc1pIazFVRkp1Um14a2VuaG9ZbGM1VjFBeE9XNVJSRkZzVTJ0a2JWZFRhRkZOUjJScVpIbGtRa3BXYzI5UlIzZHNUbnBTY0ZBd1ZUaFJhVTUyVEVWc1ZGWXdPVXBSVm5kc1ZFVXhhbUpXY0RaTFZuQnpUVlpvU0dFd05YZExlV05z");
           
        
        $entidadcode->usuario_set("U2xSa09XTldlSFJpUlVvd1VWWlJMMVZYYzNSVmFtZHNWbFpLWWxOR1FUbEpiVnAyV1ZSc1NWTlhRblZRZVZWc1pWVm5kMGt4T0ROYVJGSjJaVVU1T0ZSV05HcE9iVGhzVFRGNFVsTXdXamhhVmtaNVRrTk9XV0pXTVZWTmJGVnM=");
        $entidadcode->clave_set("VnpCVmIxVlhNV3hUZVdkblYwVktiRlJWYjNCWlZITnM=");
        $entidadcode->puerto_set("WlZjMGRsZDZjek5UVXpReVdXbHNhV0ZZZERaT1ZEQnNZVVpTVUZKV2QzVmFSR04zUzI1U01WTkljSE5sZVVsc1dIcEpNbFZGY0c5VmJXOTZUa05zVWxsSU1WSlZNMnRzUzJwT1dWTldPVFpRUm5kNlZVUmpNVWx0YkdaUU1sVnM="); 
        
        $objeto = new Code();
        $entidadcode = $objeto->inic($entidadcode,8);
        self::$_bd = trim($entidadcode->bd_get());
        self::$_servidor=trim($entidadcode->servidor_get());
        self::$_usuario = trim($entidadcode->usuario_get());
        self::$_clave=trim($entidadcode->clave_get());
        self::$_puerto = trim($entidadcode->puerto_get());
      
    }

    
    public static function cargarajax(){
        session_start();//INTERESANTE
        require_once("../models/EntidadCode.php");
        require_once("../controllers/code.php");
        $entidadcode = new EntidadCode();
        if(isset($_COOKIE['empresasenati'])){
            if($_COOKIE['empresasenati']=="senati"){
              //  $entidadcode->bd_set("=");
              $entidadcode->bd_set("WmxWV1NrMUZaM1JSYlRGc1kxUk9hRnBWUlhaYVZrMXNXV3RDWWxkNmRFSmlSMFl3VjFSV2RsUXpiRkppYWpCc1RUQmtXRXBwWnpWWFdERjFUMU5TV2xGVGF6TlpVM05zVUhsb2FWbEdWbnBtVkdob1kxaDRlbEY1WkdOVFZrMXNZVWRXYW1GVWVFdGFNR1I1VGtWSk1GUnRVWEpXYkRSc1RVWmpPVlI1ZUhwUFNFWXhTME5HTkdKR1l5dE9WMUZzVlhscmEySlRjMjlqVjFwb1pWZHJjRkZXT1ZabGEwVnNVMnh2Y2s0d1ZTOVRhbVF3V2taQmMySkZXbGxrYmtGc1VsZGFTMWxVY0dOTWVWSjZabGRrUzJGRVVrOVZha2xzWmxkV1YwNUZUa1pQUjNSc1RXa3hkR1JUTkc1VldGVnNVbFkxZFdGWWVGaFJibHA1VWxWR1RWbEViRU5VTWpoc1ZFWTVSMlZyYUdGWGFWWnJTbGhCZFdScFRsVmlNbU5zVGxoc1dsaEhXbUZRVXpGcFRXcFdlbVV3VVd0Tk1UaHM=");
            }
        }else{
            header("Location:".  constant('URL') );
        }
        
        $entidadcode->servidor_set("VGpCR01XVkVaRFpRVkRFd1RXMUtWVlV4WTNOTk1FVnNTa00wTVdGc1JYSk5Wa0o2VTBka1kyUXllSGxLVmtsc1UyMWFaV05YVWpoTGVUbDJWVEJqTTFKV1JrMVJSV05zUzBZeFpsUllZM1JMTUZadlVrVlphVnBFZEdobE1XdHNZa1ZKZDFsRldYZFpSMnh6UzFaamQxVnBhRlpTVnpoc1pIazFVRkp1Um14a2VuaG9ZbGM1VjFBeE9XNVJSRkZzVTJ0a2JWZFRhRkZOUjJScVpIbGtRa3BXYzI5UlIzZHNUbnBTY0ZBd1ZUaFJhVTUyVEVWc1ZGWXdPVXBSVm5kc1ZFVXhhbUpXY0RaTFZuQnpUVlpvU0dFd05YZExlV05z");
            
        $entidadcode->usuario_set("U2xSa09XTldlSFJpUlVvd1VWWlJMMVZYYzNSVmFtZHNWbFpLWWxOR1FUbEpiVnAyV1ZSc1NWTlhRblZRZVZWc1pWVm5kMGt4T0ROYVJGSjJaVVU1T0ZSV05HcE9iVGhzVFRGNFVsTXdXamhhVmtaNVRrTk9XV0pXTVZWTmJGVnM=");
        $entidadcode->clave_set("VnpCVmIxVlhNV3hUZVdkblYwVktiRlJWYjNCWlZITnM=");
        $entidadcode->puerto_set("WlZjMGRsZDZjek5UVXpReVdXbHNhV0ZZZERaT1ZEQnNZVVpTVUZKV2QzVmFSR04zUzI1U01WTkljSE5sZVVsc1dIcEpNbFZGY0c5VmJXOTZUa05zVWxsSU1WSlZNMnRzUzJwT1dWTldPVFpRUm5kNlZVUmpNVWx0YkdaUU1sVnM="); 
        
        $objeto = new Code();
        $entidadcode = $objeto->inic($entidadcode,8);
        self::$_bd = trim($entidadcode->bd_get());
        self::$_servidor=trim($entidadcode->servidor_get());
        self::$_usuario = trim($objeto->Descodificar("=",8).$entidadcode->usuario_get());
        self::$_clave=trim($objeto->Descodificar("==",8).$entidadcode->clave_get());
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
         //  header("Location:".  constant('URL')  ."errores");
          //   header("Location:".  constant('URL')  ."login");
            die("Existe error".$e->getMessage());
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