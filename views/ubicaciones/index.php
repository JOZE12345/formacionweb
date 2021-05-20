<?php
	require_once("views/header.php");

?>
<script>
		
		var map;
		 function initMap() {
		  map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: -11.91574556838702, lng: -77.04670021610085},
			zoom: 13,
		  });
		  var marker = new google.maps.Marker({
			position: {lat: -11.91574556838702, lng: -77.04670021610085},
			map: map,
		title: 'Acuario de Gijón'
		  });
		}
	
		
	  </script>
<style> 
  	#map {
        height: 100%;
        }
     
        
</style> 
<div id ="map"> </div> 

<div class="rigth">
  <select name="sources" id="sources" class="custom-select sources" placeholder="Source Type">
    <option value="Ancón">Ancón</option>
    <option value="Barranco">Barranco</option>
    <option value="Breña">Breña</option>
    <option value="Carabayllo">Carabayllo</option>
    <option value="Chorrillos">Chorrillos</option>
    <option value="Comas">Comas</option>
    <option value="La Molina">La Molina</option>
  </select>
</div>




<?php
	require_once("views/footer.php");

?>