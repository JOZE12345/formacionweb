<?php

require_once("../bd/clase_conexion.php");
require_once("../models/stock_model.php");



$objstock = new stock_model();


$opciones = "";

    if($_POST["restaurante"]!='')
    {
        $idrestaurante = $_POST["restaurante"];
        $resta  =  $objstock->restaurantes($idrestaurante);

       
        $opciones = "<div class='card-deck'>";
        $contador = 0 ;
        foreach ($resta as $fila) 
	    {
            $nuevaopcion =  " 
            
            <div class='platos'>
              <h15 class='title'>".$fila["nombrePlato"] ."</h15>
              
           

            
                  <div class='row'>
                    
                    <img class='imagen ' src='".$fila["foto"]."'alt='Card image cap'>
                    
                    <div class='col-sm'>
                    <p class='p'>TIPO CERTIFICADO:  ".$fila["nombrePermisoSalubridad"]  ." </p>
                    </div>
                    <div class='col-sm'>
                    <p class='p'>TIPO PLATO:  ". $fila["nombreTipo"] . "</p>
                    <p class='p'>  <a class='navbar-brand' href='https://api.whatsapp.com/send?phone=51". $fila["numero_Telf"] ."&text=hola!%20quiero%20reservar%20-%20". str_replace(" ","%20",$fila["nombrePlato"])  ."'> <img width='60' height='50'  src='public/img/whatsapp.png'/>  </a></p>
                    </div>
                  </div>
                </div>
            </div> "     
              
                
                 ;
           if($contador==3){
            $opciones = $opciones ;

            $contador = 0 ;
           }


           $opciones = $opciones . $nuevaopcion ;    
            $contador = $contador + 1 ;
            
        }
       

/*
        <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>

*/
    



    }else{
        $opciones = "<div class='card-deck'></div>";


    }


print $opciones . "</div>";
?>