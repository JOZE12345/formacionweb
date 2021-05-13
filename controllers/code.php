<?php


class Code {

    function __construct()
	{
       
		
    }
    

    public function inic( EntidadCode $entidadcode,$seleccionado){
        $PrimerResultado = "";
        $SegundoResultado = "";
        $TercerResultado = "";
        $CuartoResultado = "";
        $QuintoResultado = "";
        if ($seleccionado==5) {
            $PrimerResultado = $this->Descodificar(trim($entidadcode->bd_get()), 5);
            $SegundoResultado = $this->Descodificar(trim($entidadcode->servidor_get()), 5);
            $TercerResultado = $this->Descodificar(trim($entidadcode->usuario_get()), 5);
            $CuartoResultado = $this->Descodificar(trim($entidadcode->clave_get()), 5);
            $QuintoResultado = $this->Descodificar(trim($entidadcode->puerto_get()), 5);
        } else if ($seleccionado==8) {
            $PrimerResultado = $this->Descodificar(trim($entidadcode->bd_get()), 8);
            $SegundoResultado = $this->Descodificar(trim($entidadcode->servidor_get()), 8);
            $TercerResultado = $this->Descodificar(trim($entidadcode->usuario_get()), 8);
            $CuartoResultado = $this->Descodificar(trim($entidadcode->clave_get()), 8);
            $QuintoResultado = $this->Descodificar(trim($entidadcode->puerto_get()), 8);
        } else if ($seleccionado==10) {
            $PrimerResultado = $this->Descodificar(trim($entidadcode->bd_get()), 10);
            $SegundoResultado = $this->Descodificar(trim($entidadcode->servidor_get()), 10);
            $TercerResultado = $this->Descodificar(trim($entidadcode->usuario_get()), 10);
            $CuartoResultado = $this->Descodificar(trim($entidadcode->clave_get()), 10);
            $QuintoResultado = $this->Descodificar(trim($entidadcode->puerto_get()), 10);
        }

        $objEntidadCode = new EntidadCode();
        
        $objEntidadCode->bd_set($PrimerResultado);
        $objEntidadCode->servidor_set($SegundoResultado);
        $objEntidadCode->usuario_set($TercerResultado);
        $objEntidadCode->clave_set($CuartoResultado);
        $objEntidadCode->puerto_set($QuintoResultado);     // T

        return  $objEntidadCode  ;

    }
   public function Descodificar($textoIngreso,$SelecCapa){

        $tercer = "";
        try {
            $primer = $this->desencriptar($textoIngreso);
            $segun = $this->desencriptar($primer);
            $tercer = $this->desencriptar($segun);
        } catch (Exception $e) {
        }
        $aumentarCapa = $this->DesintegrarCapaaumentada($tercer, $SelecCapa);
        $porciento = $this->DisminuirPorciento($aumentarCapa);
        $reverso = $this->Reverso($porciento);
//        jTextArea1SalidaTexto.setText(reverso);
        return $reverso;

    }
    public function desencriptar($s) {
        $decode = base64_decode($s);
        return $decode;
    }
    public function DesintegrarCapaaumentada($texto, $cantidad) {
     
        
        $resultado = "";
        $fusion = "";
//        System.out.println("cantidad" + texto.length());
        for ($i = $cantidad; $i < strlen($texto); $i = $i + ($cantidad + 1)) {

//            System.out.println("%");
//            System.out.println("->" + aumentar);
            $fusion = "" . substr($texto,$i,1);
            
            $resultado = $resultado . $fusion;
        }
       
        return $resultado;
    }


    public function DisminuirPorciento($texto) {
        $resultado = "";
        $aumentar = "";
        for ($i = 0; $i < strlen($texto); $i = $i + 2) {
            $aumentar = "" . substr($texto,$i,1);
            $resultado = $resultado . $aumentar;
        }

        
        return $resultado;
    }


    public function Reverso($texto) {
        $terminado = "";
        for ($i = strlen($texto) - 1; $i >= 0; $i--) {
            $terminado = $terminado . substr($texto,$i,1);
        }
        
        return $terminado;
    }


}

?>