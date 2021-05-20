<?php
	require_once("views/header.php");

?>
<div class="img-fluid" style="max-width:100%; height: auto; background-image: url('public/img/registro.jpg'); background-repeat: no-repeat;
background-position: center; background-size: cover; background-attachment: fixed;">

<div class="form-body">
<div class="d-flex justify-content-center h-100">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Registro Restaurant</h3>
                        <?php

if(isset($_GET["v"])){

  if($_GET["v"]=="GHRTADFADWFASDFDFADFEFCVEFA23XFAF"){
	echo "<h4 class='display-14 text-danger text-center bg-dark' >INGRESE SUS DATOS CORRECTAMENTE </h4>" ;
  }
}

?>
                        <p class="font-weight-bold">Escriba sus datos a continuacion.</p>
                        <form class="requires-validation" novalidate method="post" action="registrar/registrarusuario">

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="p_nombre" placeholder="Nombre" required>
                               <div class="valid-feedback">Ingresa un nombre valido!</div>
                               <div class="invalid-feedback">Ingresa un dato valido !</div>
                            </div>
                            <div class="col-md-12">
                               <input class="form-control" type="text" name="p_apellido" placeholder="Apellido" required>
                               <div class="valid-feedback">Ingresa un apellido valido!</div>
                               <div class="invalid-feedback">Ingresa un dato valido !</div>
                            </div>
                            <div class="col-md-12">
                               <input class="form-control" type="text" name="p_dni" placeholder="Dni" required>
                               <div class="valid-feedback">Ingresa un dni valido!</div>
                               <div class="invalid-feedback">Ingresa un dato valido !</div>
                            </div>
                            <div class="col-md-12">
                               <input class="form-control" type="text" name="p_telefono" placeholder="Telefono" required>
                               <div class="valid-feedback">Ingresa un telefono valido!</div>
                               <div class="invalid-feedback">Ingresa un dato valido !</div>
                            </div>
                            <div class="col-md-12">
                               <input class="form-control" type="text" name="p_direccion" placeholder="Direccion" required>
                               <div class="valid-feedback">Ingresa una direccion valida!</div>
                               <div class="invalid-feedback">Ingresa un dato valido !</div>
                            </div>
                            <div class="col-md-12">
                               <input class="form-control" type="text" name="p_usuario" placeholder="Usuario" required>
                               <div class="valid-feedback">Ingresa un usuario valido!</div>
                               <div class="invalid-feedback">Ingresa un dato valido !</div>
                            </div>
                         
                            <div class="col-md-12">
                              <input class="form-control" type="password" name="p_contraseña" placeholder="contraseña" required>
                               <div class="valid-feedback">Su contraseña no es valida</div>
                               <div class="invalid-feedback">no es valido</div>
                           </div>

                           <div class="col-md-12">
                                <select class="form-select mt-3" required name="p_cod_RolUsuario">
                                      <option selected disabled  value="">Nivel</option>
                                      <option value="1">Administrador</option>
                                      <option value="2">Cliente</option>
                                     
                               </select>
                                <div class="valid-feedback">Seleccion un nivel!</div>
                                <div class="invalid-feedback">SELECCIONA!</div>
                           </div>





                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label">CONFIRMO QUE TODOS LOS DATOS SON VALIDOS</label>
                         <div class="invalid-feedback">Escriba correctamente!</div>
                        </div>
                  

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>












<?php
	require_once("views/footer.php");

?>