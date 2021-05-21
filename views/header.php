
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/login2.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/footer.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/hover.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/regis.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/ubicaciones.css">
    <link rel="shortcut icon" href="<?php echo constant('URL') ?>public/img/pvsac1.ico">
    <link rel="shortcut icon" href="<?php echo constant('URL') ?>public/img/navbar2.ico">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?php echo constant('URL') ?>public/js/registro.js"></script>

<script async defer
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkZfAM8VJ5UGRSnnqwxNPP9NKfQKafJIU&callback=initMap">
    </script>
        <title>RESTAURANTE </title>
  </head>
  
  <body >
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="#"><img width="150" height="50"  src="public/img/senati.png"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo constant('URL') ?>main">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo constant('URL') ?>ubicaciones ">Ubicaciones</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Segundo
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Tercero</a>
          <a class="dropdown-item" href="#">Cuarto</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Quinto</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Sexto</a>
      </li>
    </ul>
    
   
    
    <?php
    if(!isset($_SESSION['use'])){
    $sinlogin = "  <form class='form-inline my-2 my-lg-0' action='login'> 
      
    <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Iniciar Sesión</button>
  </form>" ;

echo $sinlogin ;
    }else{
      $conlogin = "  <form class='form-inline my-2 my-lg-0' action='main/cerrarsesion'> 
      <a class='nav-link' href='perfil '>". $_SESSION['use'] ."</a>
      <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Salir </button>
    </form>" ;
echo $conlogin ;
    }
   
   ?>
  </div>
</nav>

<script>



function deletec(){
  
  document.cookie = "tienda=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
  document.cookie = "periodo=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
  document.cookie = "empresa=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
}
function cambiarpara(tienda,periodo){
 // alert("prueba");
 var d = new Date();
 d.setTime(d.getTime()+1*24*60*1000);
 document.cookie = "tienda="+tienda+";expires="+d.toUTCString()+";";
 document.cookie = "periodo="+periodo+";expires="+d.toUTCString()+";";
 location.reload();
/*var micookie = document.cookie ; 
/*alert(micookie);
  /*var url="controllers/para.php";
  var parametros={
        "tienda": tienda , 
        "periodo" : periodo 

    };
    if(tienda!='')

    {
    $.ajax({

        data: parametros,
        url: url,
        type: 'post',
        success: function(response)
        { 
           // $("#resultado").html(response);
           location.reload();
        }            

    });
    }*/
    


}


$(document).ready(function() {
    var mainMenu = new MainMenu({
        menu: '.main-menu',
        toggleBtn: '.main-menu-btn',
        close: '.main-menu-close'
    });
});

</script>
<?php
//require_once("modelo/stock_model.php");
//$objstock_model = new stock_model();
//$tienda  = $objstock_model->get_tienda();
//$periodo  = $objstock_model->get_periodo();

?>


<div id="contenedor_carga">
      <div id= "carga"></div>
</div>




