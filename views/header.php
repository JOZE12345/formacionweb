<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
     <!--MATERIALIZE PARA HACER EL CARRUSEL-->
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/bootstrap/bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/nivo-slider_2.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/mi-slider_2.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/estilos2.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&display=swap" rel="stylesheet">
    <!--aqui se encuentra el footer diseño de fondo-->
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/Footer1style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <!--icono titulo-->
    <link rel="shortcut icon" href="<?php echo constant('URL') ?>public/img/pvsac1.ico">
        <!--boton buscar-->
        <title>Plus Vision </title>
  </head>
  <body >


    
    <!-- Barra -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="public/bootstrap/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
  
    <script src="public/js/jquery.nivo.slider.js"></script>
    <script src="public/js/main.js"></script>
    <script src="public/js/footer.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <!--js necesarios para hacer el maps la direccion-->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key="></script>


    <!--inicio...-->





    <nav class="navbar navbar-expand-lg navbar-light colorbarra sticky-top shadow-lg" >
    <div class="">
    <img  width="26" height="26"  src="<?php echo constant('URL') ?>public/img/pvsac1.ico">  
    </div>
      <div class="col-5"><a class="navbar-brand " id="tipo" href="#">L & S Plus Vision </a></div>
      
     <!-- <a class="navbar-brand" href="#"><img  width="70" height="70" src="public/img/pvsac.png">  L&S Plus Vision S.A.C</a>-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <!--
          <li class="nav-item">
            <a class="button" href="#" data-toggle="modal" data-target="#exampleModalLong" >
               Agregar Dirección
            </a>
          </li>-->
          <li class="nav-item ">
            <a class="nav-link"  href="<?php echo constant('URL') ?>main"> Home <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Soluciones</a><div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo constant('URL') ?>soluciones?valo=1">Desarrollo de paginás web</a>
                <a class="dropdown-item" href="<?php echo constant('URL') ?>soluciones?valo=2" >Desarrollo de sistemas personalisados</a>
                <a class="dropdown-item"href="<?php echo constant('URL') ?>soluciones?valo=3" >Sistema de ventas</a>
                <a class="dropdown-item" href="<?php echo constant('URL') ?>soluciones?valo=4" >Sistema de almacén </a>
                <a class="dropdown-item"href="<?php echo constant('URL') ?>soluciones?valo=5" >Soporté tecnico</a>
                <a class="dropdown-item" href="<?php echo constant('URL') ?>soluciones?valo=6" >Instalaciones de Red</a>
              </div>
              
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Equipos Tecnológicos</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo constant('URL') ?>equipostec?val=1" >Computadoras</a>
                <a class="dropdown-item" href="<?php echo constant('URL') ?>equipostec?val=2">Laptos</a>
                <a class="dropdown-item" href="<?php echo constant('URL') ?>equipostec?val=3">Servidores</a>
                <a class="dropdown-item" href="<?php echo constant('URL') ?>equipostec?val=4">Monitores</a>
                <a class="dropdown-item" href="<?php echo constant('URL') ?>equipostec?val=5">Cámaras de Seguridad</a>
                <a class="dropdown-item" href="<?php echo constant('URL') ?>equipostec?val=6">Impresoras</a>
                <a class="dropdown-item" href="<?php echo constant('URL') ?>equipostec?val=7">Fotocopiadoras</a>

              </div>
          </li>
         <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Preferencias
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>-->
         
          <li class="nav-item">
            <a class="nav-link" href="<?php echo constant('URL') ?>contacto"> Contáctenos</a>
          </li>
          <!--
          <li class="nav-item">
            <a class="nav-link" href="#"><img  width="25" height="25" src="public/img/iconcarrocompras.png">  Mi Carrito</a>
          </li>-->
        </ul>
        <form class="form-inline my-2 my-lg-0 " action="buscador" method="post">
          <input class="form-control mr-sm-2 bg-white badge-pill" name="palabraclave" type="search" placeholder="Buscador" aria-label="Search" >
          <button class="btn btn-outline-info my-2 my-sm-0 border-0 text-dark btn-lg " type="submit"><img   width="32" height="32"  src="<?php echo constant('URL') ?>public/img/search.png"></button>
        </form>
      </div>
      
    </nav>
    <!-------------------------------------------------------------------------------------------------------------->

   <!-- <a class="button" href="#">Agregar Dirección</a>-->
<!--ALERT SCRIPT-->
<!-- Modal 
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar Direccion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>-->
<div id="contenedor_carga">
      <div id= "carga"></div>
</div>
