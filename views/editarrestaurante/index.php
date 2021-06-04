
<?php
	require_once("views/header.php");

?>



<?php 
if(trim($recuperarrestaurante["nombrePermisoSalubridad"])!="No Tiene ningun permiso")
{
  $lista="selected";
  $nolista="";
} else{
  $nolista="selected";
  $lista="";
}
?>
<?php 
  if(trim($recuperarrestaurante["nombrePermisoMunicipal"])!="No Tiene ningun permiso")
  {
    $filita="selected";
    $nofilita="";
  }else{
    $nofilita="selected";
    $filita="";
  }

?>
<h1 class="display-4 text-center">Informacion - Restaurantes</h1>
<br>
<br>
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1"><strong>Nombre Restaurante</strong></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="" placeholder="restaurante.." value="<?php echo $recuperarrestaurante["nombreRestaurante"] ?>">
  </div>
  <div class="form-group ">
    <label for="exampleFormControlInput1" class="font-weight-bold">Dirección</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="jr..av.."  value="<?php echo $recuperarrestaurante["direccion"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="font-weight-bold">Telefono</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="0123456" value="<?php echo $recuperarrestaurante["numero_Telf"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1" class="font-weight-bold">Permiso - Municipal</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option <?php echo $filita?>>Licencia de Funcionamiento corporativa para mercados de abastos, galerías comerciales y centros comerciales (con ITSE previa)
</option>
      <option <?php echo $nofilita?>>No cuenta con permiso - Municipal</option>
   
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1" class="font-weight-bold">Permiso - Salubridad</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option <?php echo $lista ?>>Certificado de Registro Sanitario de Alimentos y Bebidas industrializados</option>
      <option <?php echo $nolista ?>>No cuenta con permiso - salubridad</option>
   
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="font-weight-bold">Cordenadas del Restaurante</label>
    
  <div class="form-group">
    <label for="exampleFormControlInput1"></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Latitud" >
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Longitud">
  </div>
  <!--<div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>-->
  <input type="hidden" name="idrestaurante"  value="<?php echo $variablesseparadas[0] ?>">
  <input type="hidden"   name="idrestaurantedetalle" value="<?php echo $variablesseparadas[1] ?>">
  <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
</form>


<br>
<br>
<br>

<nav class="navbar navbar-light bg-primary">
  <a class="navbar-brand text-light" href="#">
    MENU
  </a>
  <form class="form-inline" action="<?php  echo constant('URL') ."platos" ?>">
    <button class="btn btn-outline-success  bg-info my-2 my-sm-0 text-light" type="submit">AGREGAR PLATO</button>
  </form>
</nav>
<table class="table table-sm table-dark">
  <thead>
    <tr>
    <th scope="col">Plato</th>
<th scope="col">Foto</th>
<th scope="col">Ver Imagen</th>
<th scope="col">Precio</th>
<th scope="col">Tipo</th>

    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($restaurantes as $fila) 
	    {?>
    <tr>
      <th scope="row"><?php echo $fila["nombrePlato"] ?></th>
      <td><?php echo $fila["foto"] ?></td>
      <td ><button <?php $ver = "onclick=cambiarplato('".$fila["foto"]."')" ;
      echo $ver ;
      
      
      
      
      
      
      ?> type="button" class="btn btn-secondary btn-sm">Ver</button></td>
      <td><?php echo $fila["precioPLato"] ?></td>
      <td><?php echo $fila["nombreTipo"] ?></td>

    </tr>
  <?php
      }

?>
  </tbody>
</table>


<img id ="plato" src="100" alt="100" class="container img-thumbnail"> 

<script>
	
function cambiarplato(src){

  $("#plato").attr("src",src);
 
}




</script>


<style>
.container     { position: relative; overflow: hidden; }
.container img { position: absolute; }
</style>

<script type="text/javascript">
$image = $('.container img');
width = $image.width();
height = $image.height();

$image.css({
    left: 0 - (width / 2),
    top: 0 - (height / 2)
});
</script>
<?php
	require_once("views/footer.php");

?>