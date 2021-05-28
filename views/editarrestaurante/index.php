
<?php
	require_once("views/header.php");

?>




<h1 class="display-4 text-center">Informacion - Restaurantes</h1>
<br>
<br>
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1"><strong>Nombre Restaurante</strong></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="restaurante..">
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
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Licencia de Funcionamiento corporativa para mercados de abastos, galerías comerciales y centros comerciales (con ITSE previa)
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
  <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
</form>


<br>
<br>
<br>

<nav class="navbar navbar-light bg-primary">
  <a class="navbar-brand text-light" href="#">
    MENU
  </a>
  <form class="form-inline">
    <button class="btn btn-outline-success  bg-info my-2 my-sm-0 text-light" type="submit">AGREGAR PLATO</button>
  </form>
</nav>
<table class="table table-sm table-dark">
  <thead>
    <tr>
    <th scope="col">Plato</th>
<th scope="col">Foto</th>
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
      <td><?php echo $fila["precioPLato"] ?></td>
      <td><?php echo $fila["nombreTipo"] ?></td>

    </tr>
  <?php
      }

?>
  </tbody>
</table>










<?php
	require_once("views/footer.php");

?>