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

<h1 class="display-4 text-center">Informacion - Restaurantes</h1>
<br>
<br>
<div class="d-flex p-4 justify-content-center">
<form action="<?php  echo constant('URL') ."detallerestaurante/agregar" ?>" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1"><strong>Nombre Restaurante</strong></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="p_nombreRestaurante" placeholder="restaurante.." >
  </div>
  <div class="form-group ">
    <label for="exampleFormControlInput1" class="font-weight-bold">Dirección</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="p_direccion" placeholder="jr..av..">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="font-weight-bold">Telefono</label>
    <input type="text" id="telefono" class="form-control" id="exampleFormControlInput1" name="p_Telefono"  onkeypress="return valideKey(event);" onkeydown="myFunction()" placeholder="0123456" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1" class="font-weight-bold">Permiso - Municipal</label>
    <select class="form-control" id="exampleFormControlSelect1" name="p_permiso">
      <option value="1">Licencia de Funcionamiento corporativa para mercados de abastos, galerías comerciales y centros comerciales (con ITSE previa)
</option>
      <option value="0">No cuenta con permiso - Municipal</option>
   
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1" class="font-weight-bold">Permiso - Salubridad</label>
    <select class="form-control" id="exampleFormControlSelect1"name="per_salu">
      <option value="1">Certificado de Registro Sanitario de Alimentos y Bebidas industrializados</option>
      <option value="0">No cuenta con permiso - salubridad</option>
   
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="font-weight-bold">Cordenadas del Restaurante</label>
    
  <div class="form-group">
    <label for="exampleFormControlInput1"></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Latitud"  onkeypress="return valideKey(event);" name="lat">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Longitud" onkeypress="return valideKey(event);" name="lng">
  </div>
  <!--<div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>-->
  <button type="submit" class="btn btn-primary">Ingresar Nuevo Restaurante</button>
</form>
</div>
</div>


<?php
	require_once("views/footer.php");

?>