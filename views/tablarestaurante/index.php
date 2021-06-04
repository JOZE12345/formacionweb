<?php
	require_once("views/header.php");

?>
<br>
<br>
<h1 class="display-4 text-center">Administración de Servicios</h1>
<br>
<br>

<nav class="navbar navbar-light bg-primary">
  <a class="navbar-brand text-light" href="#">
    Restaurantes Existentes
  </a>
  <form class="form-inline" action="<?php echo constant('URL') . "detallerestaurante"?> ">
    <button class="btn btn-outline-success  bg-info my-2 my-sm-0 text-light" type="submit">AGREGAR NUEVO RESTAURANTE</button>
  </form>
</nav>


<table class="table table-sm table-dark">
  <thead>
    <tr>
    <th scope="col">ID</th>
<th scope="col">Restaurante</th>
<th scope="col">Dirección</th>
<th scope="col">Telefono</th>
<th scope="col">Permiso Salubridad</th>
<th scope="col">Permiso Municipal</th>
<th hidden ></th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($restaurantes as $fila) 
	    {?>
    <tr>
      <th scope="row"><?php echo $fila["restaurante_ID"] ?></th>
      <td><?php echo $fila["nombreRestaurante"] ?></td>
      <td><?php echo $fila["direccion"] ?></td>
      <td><?php echo $fila["numero_Telf"] ?></td>
      <td><?php echo $fila["nombrePermisoSalubridad"] ?></td>
      <td><?php echo $fila["nombrePermisoMunicipal"] ?></td>
      <td><?php echo $fila["codrestaurante_detalle"] ?></td>
      <td><form  method="get" action="<?php  echo constant('URL') ."editarrestaurante" ?>"><input type="hidden" name="id" value="<?php echo $fila["restaurante_ID"] ."|".$fila["codrestaurante_detalle"] ?>"> <button type="subtmit" class="btn btn-outline-info">Editar</button></form></td> 
      <td><form  method="get" action="<?php  echo constant('URL') ."tablarestaurante/eliminar" ?>"><input type="hidden" name="id" value="<?php echo $fila["restaurante_ID"] ?>"> <button type="subtmit" class="btn btn-outline-info">Eliminar</button></form></td>
    </tr>
  <?php
      }

?>
  </tbody>
</table>

<br>
<br>
<br>

<blockquote class="blockquote text-center">
  <p class="mb-0">Recuerde que puede agregar, editar y eliminar los restaurantes que desee, ademas de ello actualizar los archivos multimedia que lo componen.</p>
  <footer class="blockquote-footer">Guevara Delgado, Yair  <cite title="Source Title">/Area de Sistema</cite></footer>
</blockquote>
<br>
<br>

<nav class="navbar navbar-light bg-primary">
  <a class="navbar-brand text-light" href="#">
    Administradores Actuales
  </a>
  <form class="form-inline">
    <button class="btn btn-outline-success  bg-info my-2 my-sm-0 text-light" type="submit">AGREGAR NUEVO ADMINISTRADOR</button>
  </form>
</nav>
<table class="table table-sm table-dark">
  <thead>
    <tr>
    <th scope="col">ID</th>
<th scope="col">Nombre</th>
<th scope="col">Apellido</th>
<th scope="col">Dni</th>
<th scope="col">Telefono</th>
<th scope="col">Dirección</th>
<th scope="col">-</th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($administradores as $fila) 
	    {?>
    <tr>
      <th scope="row"><?php echo $fila["codUsuario"] ?></th>
      <td><?php echo $fila["nombre"] ?></td>
      <td><?php echo $fila["apellido"] ?></td>
      <td><?php echo $fila["dni"] ?></td>
      <td><?php echo $fila["telefono"] ?></td>
      <td><?php echo $fila["direccion"] ?></td>
      <td><?php echo $fila["nombre_rol"] ?></td>
    </tr>
  <?php
      }

?>
  </tbody>
</table>
<?php
	require_once("views/footer.php");

?>