<?php
	require_once("views/header.php");

?>


<nav class="navbar navbar-light bg-primary">
  <a class="navbar-brand text-light" href="#">
    Restaurantes Existentes
  </a>
  <form class="form-inline">
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
    </tr>
  <?php
      }

?>
  </tbody>
</table>


<?php
	require_once("views/footer.php");

?>