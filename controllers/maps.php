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
            <div class='card'>
                <img class='card-img-top container' src='".$fila["foto"]."'alt='Card image cap' >
                <div class='card-body'><h5 class='card-title'>".$fila["nombrePlato"] ."</h5>
                <p class='card-text'>".$fila["nombrePermisoSalubridad"]  ." <p class='card-text'><small class='text-muted'>". $fila["nombreTipo"] . "</small></p> </div>
                </div>"
                
                
                
              



                
                 ;
           if($contador==3){
            $opciones = $opciones . "</div>aqui termina<div class='card-deck'>";

            $contador = 0 ;
           }


           $opciones = $opciones . $nuevaopcion ;    
            $contador = $contador + 1 ;
            echo $contador;
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


print $opciones ;
?>