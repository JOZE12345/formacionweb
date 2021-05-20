
<?php
	require_once("views/header.php");

?>
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

if(isset($_GET["v"])){

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
					<a href="#">Olvidaste tu contraseña?</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	require_once("views/footer.php");

?>