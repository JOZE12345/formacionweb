<?php
	require_once("views/header.php");
    

?>

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
<form action="<?php  echo constant('URL') ."platos/subido" ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1"><strong>Nombre Plato</strong></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="nombreplato" placeholder="restaurante.." value="<?php echo $recuperarrestaurante["nombreRestaurante"] ?>">
  </div>
  <div class="form-group ">
    <label for="exampleFormControlInput1" class="font-weight-bold">Cantidad</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="cantidad" placeholder="jr..av.."  value="<?php echo $recuperarrestaurante["direccion"] ?>">
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput1" class="font-weight-bold">Selecciona Archivo</label>
    <input type="file" class="form-control" id="exampleFormControlInput1"  name="image" />
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1" class="font-weight-bold">Precio Plato</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="precio" placeholder="0123456" value="<?php echo $recuperarrestaurante["numero_Telf"] ?>">
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
 
 
    
 
  <!--<div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>-->
  <input type="hidden" name="idrestaurantedetalle"  value="<?php echo $idrestaurante_detalle?>">
  <input type="hidden"   name="idmenu" value="<?php echo $idmenu ?>">
  <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
</form>




	<!--<form action="<?php  echo constant('URL') ."platos/subido" ?>" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>-->



<?php
	require_once("views/footer.php");

?>