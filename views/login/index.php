
<?php
	require_once("views/header.php");

?>

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
<br>
<br>
<br>
<br>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		
		<div class="card">		
			<div class="card-header">
				<h3>Iniciar Sesion</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Recordar contraseña
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					No estas registrado?<a href="#">Crear cuenta nueva</a>
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