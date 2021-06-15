<?php
	require_once("views/header.php");
    

?>
<script type="text/javascript">
function valideKey(evt){
    
    // code is the decimal ASCII representation of the pressed key.
    var code = (evt.which) ? evt.which : evt.keyCode;
    
    if(code==8) { // backspace.
      return true;
    } else if(code==45) { // backspace.
      return true;
    } else if(code>=48 && code<=57) { // is a number.
      return true;
    } else{ // other keys.
      return false;
    }
}
</script> 
<script>
function myFunction() {
 $numero =  document.getElementById('telefono').value ;
if($numero>=8){


  document.getElementById('telefono').value = $numero.substr(0, 8);

}
//alert($numero.length);
}
</script>
<?php 
if($recuperarrestaurante["codTipoPlato"]==1)
{
  $lista1="selected";
  $lista2="";
  $lista3="";
} else if($recuperarrestaurante["codTipoPlato"]==2){
  $lista2="selected";
  $lista1="";
  $lista3="";
}else if($recuperarrestaurante["codTipoPlato"]==3){
$lista3="selected";
$lista1="";
$lista2="";
}else {
      $lista1="selected";
      $lista2="";
      $lista3="";
}
?>
<h1 class="display-4 text-center">Agregar Plato</h1>
<div class="d-flex p-4 justify-content-center">

<form action="<?php  echo constant('URL') ."platos/subido" ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1"><strong>Nombre Plato</strong></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="nombreplato" placeholder="Lomo saltado.." value="<?php echo $recuperarrestaurante["nombreRestaurante"] ?>">
  </div>
  <div class="form-group ">
    <label for="exampleFormControlInput1" class="font-weight-bold">Cantidad</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="cantidad" placeholder="1.."  onkeypress="return valideKey(event);"  value="<?php echo $recuperarrestaurante["direccion"] ?>">
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput1" class="font-weight-bold">Selecciona Archivo</label>
    <input type="file" class="form-control" id="exampleFormControlInput1"  name="image" />
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1" class="font-weight-bold">Precio Plato</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="precio"  onkeypress="return valideKey(event);"  placeholder="20.00" value="<?php echo $recuperarrestaurante["numero_Telf"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1" class="font-weight-bold">Tipo - Plato</label>
    <select name="tipoplato" class="form-control" id="exampleFormControlSelect1">
      <option value="1" <?php echo $lista1?>>Vegano
</option>
<option value="2" <?php echo $lista2?>>Carnivoro
</option>
      <option value="3" <?php echo $lista3?>>otros</option>
   
    </select>
  </div>
 
 

  <div class="form-group">
    <label for="exampleFormControlSelect1" class="font-weight-bold">Tipo - Menu</label>
    <select name="tipomenu" class="form-control" id="exampleFormControlSelect1">
      <option value="1" <?php echo $lista1?>>Entrada
      </option>
      <option value="2" <?php echo $lista2?>>Plato
      </option>
      <option value="3" <?php echo $lista3?>>Postre
      </option>
      <option value="4" <?php echo $lista3?>>Plato a la carta
      </option>
    </select>
  </div>



    
 
  <!--<div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>-->
  <input type="hidden" name="idrestaurantedetalle"  value="<?php echo $idrestaurante_detalle?>">
  <input type="hidden"   name="idmenu" value="<?php echo $idmenu ?>">
  <button type="submit" class="btn btn-primary">AGREGAR</button>
</form>
</div>



	<!--<form action="<?php  echo constant('URL') ."platos/subido" ?>" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>-->



<?php
	require_once("views/footer.php");

?>