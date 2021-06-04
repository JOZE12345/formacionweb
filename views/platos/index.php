<?php
	require_once("views/header.php");
    

?>






	<form action="<?php  echo constant('URL') ."platos/subido" ?>" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>



<?php
	require_once("views/footer.php");

?>