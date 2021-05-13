<?php
require_once("modelo/EntidadCode.php");
/*
$entidadcode = new EntidadCode();
$entidadcode->bd_set("db1020");
$entidadcode->servidor_set("201.240.44.159");
$entidadcode->usuario_set("user2021");
$entidadcode->clave_set("@User2021@");
$entidadcode->puerto_set("5432"); 


$objeto = new codificar();
$entidadcode = $objeto->inic($entidadcode,8);
*/

/*
echo $entidadcode->bd_get()."<br>"; 
echo $entidadcode->servidor_get() ."<br>"; 
echo $entidadcode->usuario_get() ."<br>"; 
echo $entidadcode->clave_get() ."<br>";
echo $entidadcode->puerto_get() ."<br>"; 
*/
class codificar{


    function __construct()
	{
       
		
    }

   /* public function probar(){
        while(true){
        $variable =  chr(floor (rand(33,126)))."\n"; 
        
        if(!is_numeric($variable)){
           echo $variable;
        }else{

            
        }
           

        }
    }*/
    public function inic( EntidadCode $entidadcode,$seleccionado){
        $PrimerResultado = "";
        $SegundoResultado = "";
        $TercerResultado = "";
        $CuartoResultado = "";
        $QuintoResultado = "";
        if ($seleccionado==5) {
           
            $PrimerResultado = $this->codificar(trim($entidadcode->bd_get()), 5);
            $SegundoResultado = $this->codificar(trim($entidadcode->servidor_get()), 5);
            $TercerResultado = $this->codificar(trim($entidadcode->usuario_get()), 5);
            $CuartoResultado = $this->codificar(trim($entidadcode->clave_get()), 5);
            $QuintoResultado = $this->codificar(trim($entidadcode->puerto_get()), 5);
        } else if ($seleccionado==8) {
           
            $PrimerResultado = $this->codificar(trim($entidadcode->bd_get()), 8);
            $SegundoResultado = $this->codificar(trim($entidadcode->servidor_get()), 8);
            $TercerResultado = $this->codificar(trim($entidadcode->usuario_get()), 8);
            $CuartoResultado = $this->codificar(trim($entidadcode->clave_get()), 8);
            $QuintoResultado = $this->codificar(trim($entidadcode->puerto_get()), 8);
        } else if ($seleccionado==10) {
            $PrimerResultado = $this->codificar(trim($entidadcode->bd_get()), 10);
            $SegundoResultado = $this->codificar(trim($entidadcode->servidor_get()), 10);
            $TercerResultado = $this->codificar(trim($entidadcode->usuario_get()), 10);
            $CuartoResultado = $this->codificar(trim($entidadcode->clave_get()), 10);
            $QuintoResultado = $this->codificar(trim($entidadcode->puerto_get()), 10);
        }

        $objEntidadCode = new EntidadCode();
        
        $objEntidadCode->bd_set($PrimerResultado);
        $objEntidadCode->servidor_set($SegundoResultado);
        $objEntidadCode->usuario_set($TercerResultado);
        $objEntidadCode->clave_set($CuartoResultado);
        $objEntidadCode->puerto_set($QuintoResultado);     // T

       // echo $objEntidadCode->bd_get();

        return $objEntidadCode ;

    }
    private function  codificar($textoIngreso, $SelecCapa) {

        $Reverso = $this->Reverso($textoIngreso);
        
        $Porciento = $this->AumentarPorciento($Reverso);
        $aumentarCapa = $this->AumentarSegunCapa($Porciento, $SelecCapa);
        $tercer = "";
        try {
            $primer = $this->encriptar($aumentarCapa);
            $segun = $this->encriptar($primer);
            $tercer = $this->encriptar($segun);
        } catch (Exception $e) {
        }
        return $tercer;

    }

    public function Reverso($texto) {
        $terminado = "";
        for ($i = strlen($texto) - 1; $i >= 0; $i--) {
            $terminado = $terminado . substr($texto,$i,1);           
        }     
        
        return $terminado;
    }
    public function AumentarPorciento(String $texto) {
        $resultado = "";
        $aumentar = "";
        for ($i = 0; $i < strlen($texto); $i++) {
            $aumentar = substr($texto,$i,1) . "%";
            $resultado = $resultado . $aumentar;
        }

      // echo $resultado;
        return $resultado;
    }



    public function AumentarSegunCapa($texto, $cantidad) {
        $codigoAscii =""; //esto fue modificado 07032021
        $aumentar = "";
        $resultado = "";
        $randon = "";
        $fusion = "";
//        System.out.println("cantidad" + texto.length());
        for ($i = 0; $i < strlen($texto); $i++) {
            $aumentar = "";
            for ($j = 0; $j < $cantidad; $j++) {

                $codigoAscii =  chr(floor(rand(33,126)));
                
                if(!is_numeric($codigoAscii)){
                    $randon = trim($codigoAscii);
                }

                $aumentar = $aumentar . $randon;


               /* if(is_numeric($codigoAscii)){
                $randon = trim($codigoAscii);
                echo $randon;
                }else{echo "no es ";}
                $aumentar = $aumentar + $randon;
*/





            }
//            System.out.println("%");
//            System.out.println("->" + aumentar);
            $fusion = $aumentar . substr($texto,$i,1);
            $resultado = $resultado . $fusion;
        }
        //echo $resultado;
        return $resultado;
    }
    public function encriptar($s) {
        return base64_encode($s);
    }

}



?>