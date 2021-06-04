
<?php
	require_once("views/header.php");

?>
<script>
	$(document).ready(function(){
    url=window.location.href
    //alert(url);
		var code = url.split("?");
   
		
    if( code[1].split("=")[1]=="asdgfdgdfafdfdsf"){
      $("#confirmar").modal("show");


    }
	});
</script>
<script>
function deletec(){
  
  document.cookie = "empresasenati=; expires=Thu, 01 Jan 1970 00:00:00 UTC";

}
function cambiarempresa(empresa){

  

if(empresa!=''){
deletec();
var d = new Date();
 d.setTime(d.getTime()+1 * 24 * 60 * 60 * 1000);
 document.cookie = "empresasenati="+empresa+";expires="+d.toUTCString()+";";
 //cambiarpara('ALMACEN PRINCIPAL VENTAS',202010);

}
}
</script>
<div class="img-fluid" style="max-width:100%; height: auto; background-image: url('public/img/login.jpg'); background-repeat: no-repeat;
background-position: center; background-size: cover; background-attachment: fixed;">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div class="container">
	<div class="d-flex justify-content-center h-100">
		
		<div class="card">		
			<div class="card-header">
				<h3>Iniciar Sesion</h3>
				<?php

if(isset($_GET["v"])||isset($_GET["e"]) ){

  if($_GET["v"]=="GHRTADFADWFASDFDFADFEFCVEFA23XFAF"){
	echo "<h4 class='display-14 text-danger text-center' >VUELVA A INGRESAR </h4>" ;
  }else if($_GET["v"]=="jasdfkldfuenadflsadfujqnfsf"){
	echo "<h4 class='display-14 text-danger text-center' >USUARIO NO EXISTE</h4>" ;

  }
  }
 
?>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form action="login/ValidarIngreso" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="usuario">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="passw">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Recordar contraseña
					</div>
					<div class="form-group">
						<input onclick="cambiarempresa('senati')" type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					No estas registrado?<a href="registrar">Crear cuenta nueva</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#" data-toggle="modal" data-target="#exampleModal">Olvidaste tu contraseña?</a>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingrese su correo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Se enviara un codigo de confirmación</label>
            <input type="text" class="form-control" id="correoenviar" id="recipient-name">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button"  onclick="cargarajax()" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>


<script>
  function confirmarcontraseña(){
   $valor =  document.getElementById('codigo').value;

    

	$redireccion = "http://localhost/FORMACIONCOPIA/confirmarcontraseña?v="+$valor;
  
  location.href =	$redireccion ;
  }

function cargarajax(){
	$('#exampleModal').modal('hide')

  $random = Math.floor(Math.random() * 100000) ;

	$valor =  document.getElementById('correoenviar').value;


	document.getElementById('correoenviar').value = "";

  randomcookie($random);

	url="http://localhost/formacion/controllers/confirmarcorreo.php";
      var parametros={
            "email": $valor,
            "random":$random

        };
        if($valor!='')
//alert("ga");
        {
        $.ajax({

            data: parametros,
            url: url,
            type: 'post',
	
            success: function(response)
			
            { 
			//	alert("gi");
                //$("#platos").html(response);
                $("#confirmar").modal("show");
            }            

        });
        }

}



</script>
<script>function randomcookie(random){

  

if(random!=''){
//deletec();
var d = new Date();
 d.setTime(d.getTime()+1 * 24 * 60 * 60 * 1000);
 document.cookie = "codigoconfirmacion="+random+";expires="+d.toUTCString()+";";
 //cambiarpara('ALMACEN PRINCIPAL VENTAS',202010);

}
}
</script>




<div class="modal fade" id="confirmar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirme identidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Ingrese el codigo de su correo</label>
            <input type="text" id = "codigo" class="form-control" id="recipient-name">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button"  onclick="confirmarcontraseña()"  class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
<?php
	require_once("views/footer.php");

?>