<?php
	require_once("views/header.php");

?>

<h1 class="display-4 text-center">Informacion - Restaurantes</h1>
<br>
<br>
<form action="<?php  echo constant('URL') ."detallerestaurante/agregar" ?>" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1"><strong>Nombre Restaurante</strong></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="restaurante.." name="NombreRestaurante">
  </div>
  <div class="form-group ">
    <label for="exampleFormControlInput1" class="font-weight-bold">Dirección</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="jr..av..">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="font-weight-bold">Telefono</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="0123456">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1" class="font-weight-bold">Permiso - Municipal</label>
    <select class="form-control" id="exampleFormControlSelect1" name="permisomunicipal">
      <option value="1">Licencia de Funcionamiento corporativa para mercados de abastos, galerías comerciales y centros comerciales (con ITSE previa)
</option>
      <option>No cuenta con permiso - Municipal</option>
   
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1" class="font-weight-bold">Permiso - Salubridad</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Certificado de Registro Sanitario de Alimentos y Bebidas industrializados</option>
      <option>No cuenta con permiso - salubridad</option>
   
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="font-weight-bold">Cordenadas del Restaurante</label>
    
  <div class="form-group">
    <label for="exampleFormControlInput1"></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Latitud">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Longitud">
  </div>
  <!--<div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>-->
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>



<?php
	require_once("views/footer.php");

?>