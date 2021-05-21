<?php

require_once("../bd/clase_conexioninicial.php");
require_once("../modelo/stock_model.php");



$objstock = new stock_model();


$opciones = "";

    if($_POST["empresa"]!='nada')
    {
      
        $tienda  =  $objstock->get_tienda_inicial();

        $empresa = $_POST["empresa"];
        $opciones = "<div class='card-deck'></div>";
        $contador = 0 ;
        foreach ($tienda as $fila) 
	    {
            $nuevaopcion =  " <div class='card-deck'>
            <div class='card'>
                <img class='card-img-top' src='".$fila["_descalmacen"]."'alt='Card image cap'>
                <div class='card-body'><h5 class='card-title'>".$fila["_descalmacen"] ."</h5>
                <p class='card-text'>".$fila["_descalmacen"]  ." <p class='card-text'><small class='text-muted'>". $fila["_descalmacen"] . "</small></p> </div>
                </div>".
                
                
                
                "<div class='card'>
                <img class='card-img-top' src='".$fila["_descalmacen"]."'alt='Card image cap'>
                <div class='card-body'><h5 class='card-title'>".$fila["_descalmacen"] ."</h5>
                <p class='card-text'>".$fila["_descalmacen"]  ." <p class='card-text'><small class='text-muted'>". $fila["_descalmacen"] . "</small></p> </div>
                </div>".


                "<div class='card'>
                <img class='card-img-top' src='".$fila["_descalmacen"]."'alt='Card image cap'>
                <div class='card-body'><h5 class='card-title'>".$fila["_descalmacen"] ."</h5>
                <p class='card-text'>".$fila["_descalmacen"]  ." <p class='card-text'><small class='text-muted'>". $fila["_descalmacen"] . "</small></p> </div>
                </div>"



                
                 ;
           if($contador==3){
            $opciones = $opciones . "</div><div class='card-deck'>";


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
        $opciones = "<option selected>Sucursal...</option>";


    }


print $opciones ;
?>