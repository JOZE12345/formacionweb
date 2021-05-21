<?php
	require_once("views/header.php");

?>
<script>
	$(document).ready(function(){

		initMap(-11.878659770295092,-77.01935938191203);
		//cargarajax(1);

	});
</script>
<h1 class="display-4 text-center">Selecciona el Restaurante</h1>
<br>
<br>
<div class="rigth">
  <select name="sources" id="sources" class="custom-select sources" placeholder="Source Type">
    <option value="1" >El ruedo restobar</option>
    <option value="2">Raja Tabla</option>
    <option value="3">restaurante cevicheria puerto tumbes</option>
    <option value="4">cevicheria popeye </option>
    <option value="5">El abuelo wanka</option>
   
  </select>
</div>
<script>
		
		var map;



		 function initMap(late,lnge) {
		


		  map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: late, lng: lnge},
			zoom: 20,
		  });
		  var marker = new google.maps.Marker({
			position: {lat: late, lng: lnge},
			map: map,
		title: 'RESTAURANTES'
		  });
		}
	
		
	  </script>
<style> 

  	#map {
        height: 70%;
        }
     
        
</style> 
<script>
	
$('#sources').on('change', function() {
  SeleccionarRestaurante(this.value);
if(this.value==1){

	initMap(-11.878659770295092,-77.01935938191203);
	

}else if(this.value==2){
	initMap(-11.956375909125589,-77.05213960007984);

}else if(this.value==3){
	initMap(-11.91799624499927,-77.04584776414985);

}else if(this.value==4){
	initMap(-11.91899698997568,-77.04512877032255);

}else if(this.value==5){
	initMap(-12.072465786719935,-76.94328383222434);

}
cargarajax(this.value);
});

function cargarajax($valor){

	url="http://localhost/formacion/formacionweb/controllers/maps.php";
      var parametros={
            "restaurante": $valor

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
                $("#platos").html(response);
              //  $("#loginModal").modal("show");
            }            

        });
        }

}





function SeleccionarRestaurante(restaurante){

  

if(restaurante!=''){
//deletec();
var d = new Date();
 d.setTime(d.getTime()+1 * 24 * 60 * 60 * 1000);
 document.cookie = "selecresta="+restaurante+";expires="+d.toUTCString()+";";
 //cambiarpara('ALMACEN PRINCIPAL VENTAS',202010);

}
}
</script>

<div id ="map"> </div> 

<br>
<br>
<br>
<div id="platos">








</div>




<?php
	require_once("views/footer.php");

?>