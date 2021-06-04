
<?php
    
    class stock_model
    {
        private $_bd;
        public static $_tienda = ""; 
        public static $_periodo = "" ; 
       
        
        
        
       


        public function __construct()
        {
           
           
       
        }
       /* public function parametroproced($tienda,$periodo)
        {
            
            stock_model::$_tienda = $tienda;
            stock_model::$_periodo = $periodo;
            
           
        }*/
        public function readerpara(){
         // echo    $_COOKIE['prueba']; 

            if(isset($_COOKIE['tienda'])){
            stock_model::$_tienda = $_COOKIE['tienda'];
            stock_model::$_periodo = $_COOKIE['periodo'];
         
            }else if (isset($_SESSION['Tienda_sesion'])){
            stock_model::$_tienda = $_SESSION['Tienda_sesion'];
                 $periodoall = $this->get_periodo();
                 foreach ($periodoall as $fila) 
                 {
                    $ultimoperiodo =  $fila["_idperiodo"] ;
                 }
              //   echo $ultimoperiodo;
            stock_model::$_periodo = $ultimoperiodo;
            }
        }

       

        public  function get()
        {
            
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();

            $cadenasql = "select * from proc_return_datos_stockxalmacen_periodo_all_web(0,'".self::$_tienda."','".self::$_periodo."');";
            $registros = $this->_bd->query($cadenasql);
            $fila = $registros->fetchAll();
            clase_conexion::desconectar();
            return $fila ; 


        }
        public function get_auditoria()
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();
          
            $cadenasql = "select * from proc_return_datos_stockxalmacen_periodo_all_auditoria(0,'".self::$_tienda."',".self::$_periodo.");";
            $registros = $this->_bd->query($cadenasql);
            $fila = $registros->fetchAll();
            clase_conexion::desconectar();
            return $fila ; 


        }
        public function getiD($id)
        {

            $registros = $this->_bd->prepare("select * from estudiante where  id=:id");
            $registros->bindValue(":id", $id);
            $registros->execute();

           
            $fila = $registros->fetch();
            clase_conexion::desconectar();
            return $fila ; 


        }

        public function regitrarse($p_nombre,$p_apellido,$p_dni,$p_telefono,$p_direccion,$p_usuario,$p_contraseña,$p_cod_RolUsuario)
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();

            $cadenasql = "CALL registrarUsuario('".$p_nombre."','".$p_apellido."','".$p_dni."','".$p_telefono."','".$p_direccion."','".$p_usuario."','".$p_contraseña."',".$p_cod_RolUsuario.")";
            $insertar = $this->_bd->prepare($cadenasql);

            $insertar->execute();
            clase_conexion::desconectar();



        }

        public function restablecercontraseña($p_contraseña,$p_usuairo)
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();

            $cadenasql = "CALL restablecercontraseña('".$p_contraseña."','".$p_usuairo."')";
            $insertar = $this->_bd->prepare($cadenasql);

            $insertar->execute();
            clase_conexion::desconectar();



        }




      
        public function restaurantes($idrestaurante)
        {
            clase_conexion::cargarajax();
            $this->_bd = clase_conexion::conectar();
            $cadenasql = "call  proc_restaurantes(".$idrestaurante. ");";
            $registros = $this->_bd->query($cadenasql);
            $fila = $registros->fetchAll();
            clase_conexion::desconectar();
            return $fila ; 


        }

        public function Menus($idrestaurante)
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();
            $cadenasql = "call  proc_restaurantes(".$idrestaurante.");";
            $registros = $this->_bd->query($cadenasql);
            $fila = $registros->fetchAll();
            clase_conexion::desconectar();
            return $fila ; 
        }

        public function Todosrestaurantes()
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();
            $cadenasql = "call  proc_Todos_restaurantes();";
            $registros = $this->_bd->query($cadenasql);
            $fila = $registros->fetchAll();
            clase_conexion::desconectar();
            return $fila ; 
        }

        public function traerRestaurante($p_restaurante_ID, $p_codrestaurante_detalle)
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();
            $cadenasql = "call proc_Todos_restaurantes_ID(".$p_restaurante_ID.",".$p_codrestaurante_detalle.")";
            $registros = $this->_bd->query($cadenasql);
            $fila = $registros->fetchAll();
            clase_conexion::desconectar();
            return $fila ; 

        }



        public function insertarMenu( $p_codrestaurante_detalle)
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();
            $cadenasql = "call añadir_menu(".$p_codrestaurante_detalle.")";
            $registros = $this->_bd->query($cadenasql);
            $fila = $registros->fetchAll();
            clase_conexion::desconectar();
            return $fila ; 

        }




        public function añadir_plato($idmenu, $cod_cantidad, $nombreplato ,$rutaplato ,$precioplato,$idtipoplato )
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();

            $cadenasql = "CALL añadir_plato(".$idmenu.",".$cod_cantidad.",'".$nombreplato."','".$rutaplato."','".$precioplato."',".$idtipoplato.")";
            $insertar = $this->_bd->prepare($cadenasql);

            $insertar->execute();
            clase_conexion::desconectar();

        }
        public function añadirplato_menunuevo($cod_cantidad, $nombreplato ,$rutaplato ,$precioplato,$idtipoplato )
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();

            $cadenasql = "CALL añadirplato_nuevomenu(".$cod_cantidad.",'".$nombreplato."','".$rutaplato."','".$precioplato."',".$idtipoplato.")";
            $insertar = $this->_bd->prepare($cadenasql);

            $insertar->execute();
            clase_conexion::desconectar();

        }

        public function Administradores()
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();
            $cadenasql = "call  TraerAdministradores();";
            $registros = $this->_bd->query($cadenasql);
            $fila = $registros->fetchAll();
            clase_conexion::desconectar();
            return $fila ; 


        }

        public function lat_lngRestaurantes()
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();
            $cadenasql = "call  lat_lngRestaurantes();";
            $registros = $this->_bd->query($cadenasql);
            $fila = $registros->fetchAll();
            clase_conexion::desconectar();
            return $fila ; 

        }
        public function EliminarRestaurantes($id)
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();
            $cadenasql = "call  EliminarRestaurantes(".$id.");";
            $registros = $this->_bd->query($cadenasql);
            $fila = $registros->fetchAll();
            clase_conexion::desconectar();
            return $fila ;

        }


        public function insertarRestaurante($p_nombreRestaurante,$p_direccion,$p_Telefono,$p_permiso,$lat,$lng)
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();
            $cadenasql = "CALL InsertarRestaurante('".$p_nombreRestaurante."','".$p_direccion."',".$p_Telefono.",".$p_permiso.",'".$lat."','".$lng."')";
            $insertar = $this->_bd->prepare($cadenasql);
            $insertar->execute();
            clase_conexion::desconectar();

        }

        public function editarRestaurante($p_nombreRestaurante,$p_direccion,$p_Telefono,$p_permiso,$lat,$lng,$p_restaurante_ID,$p_codrestaurante_detalle)
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();
            $cadenasql = "CALL EditarRestaurante('".$p_nombreRestaurante."','".$p_direccion."',".$p_Telefono.",".$p_permiso.",'".$lat."','".$lng."',".$p_restaurante_ID.",".$p_codrestaurante_detalle.")";
            $editar = $this->_bd->prepare($cadenasql);
            $editar->execute();
            clase_conexion::desconectar();
        }


        public function validaringresocod($nrdoc,$pass)
        {
            //echo "estamos validando ";
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();
        //    echo var_dump(clase_conexion::conectar());
            $cadenasql = "CALL proc_validarUsuario('".$nrdoc."','".$pass."');";
            //echo "ga";
            $registros = $this->_bd->query($cadenasql);
            if($registros!=null){
             //   echo "paso";
            $fila = $registros->fetchAll();
            clase_conexion::desconectar();
            return $fila ; 
            }else{
               // echo " no paso";
                clase_conexion::desconectar();
                false;
            }
        }

        public function mostrarUsuario($p_usuario)
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();
            $cadenasql = "CALL proc_mostrarUsuario('".$p_usuario."');";
            $registros = $this->_bd->query($cadenasql);
            if($registros!=null){
                //   echo "paso";
               $fila = $registros->fetchAll();
               clase_conexion::desconectar();
               return $fila ; 
               }else{
                  // echo " no paso";
                   clase_conexion::desconectar();
                   false;
               }
        }
        public function get_periodo()
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();
            $cadenasql = "select * from proc_vist_periodomensual();";
            $registros = $this->_bd->query($cadenasql);
            $fila = $registros->fetchAll();
            clase_conexion::desconectar();
            return $fila ; 


        }

        public function get_inventario_dinero($basestock)
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();
            $cadenasql = "select * from proc_return_stock_cuenta_x_periodo_x_almacen_new(".$basestock.",'".self::$_tienda."','".self::$_periodo."');";
            $registros = $this->_bd->query($cadenasql);
            $fila = $registros->fetchAll();
            clase_conexion::desconectar();
            return $fila ; 


        }


        public function validarestado($nrdoc)
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();
            $cadenasql = "select * from proc_call_return_estadousuario_x_nrodoc('".$nrdoc."');";
            $registros = $this->_bd->query($cadenasql);
            $fila = $registros->fetchAll();
            clase_conexion::desconectar();
            return $fila ; 


        }



        public function validartienda($nrdoc)
        {
            clase_conexion::cargar();
            $this->_bd = clase_conexion::conectar();
            $cadenasql = "select * from proc_call_return_descalmacen_x_nrodoc_estadoalmacen('".$nrdoc."');";
            $registros = $this->_bd->query($cadenasql);
            $fila = $registros->fetchAll();
            clase_conexion::desconectar();
            return $fila ; 


        }

       
    }



?>