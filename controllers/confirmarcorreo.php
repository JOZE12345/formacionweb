

<?php 




$email = $_POST["email"];

$validacion = $_POST["random"];




require "../PHPMailer/Exception.php";
require "../PHPMailer/PHPMailer.php";
require "../PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$oMail= new PHPMailer();

/*$oMail->SMTPOptions = array(
  'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
  )
);*/
/*
$oMail->SMTPDebug = 3 ; */
/*$oMail->SMTPDebug = 2 ; en caso de errores*/
$oMail->isSMTP();
$oMail->SMTPAuth=true;
$oMail->SMTPSecure="tls";
//$oMail->SMTPSecure="STARTTLS";
/*$oMail->Host="plusvision.com.pe";*/
/*$oMail->Host="mail.plusvision.com.pe";///esta mal*/
/*$oMail->Host="superm107111.planetahosting.pe";*/

//$oMail->Host="plusvisionperu.com";
//$oMail->Host="localhost";
$oMail->Host="smtp.gmail.com";
/* para ssl
$oMail->Port=465 /587;*/
/*$oMail->Port=26 ;*/
$oMail->Port=25 ;
$oMail->CharSet = "UTF-8" ; 
/*
$oMail->Username="ventas@plusvision.com.pe";
$oMail->Password="@Vision2021@";*/
$oMail->Username="antoniorestaurantesenati29@gmail.com";
$oMail->Password="antoniorestaurante";
/*$oMail->Username="pepitosamoradelgadillo@gmail.com";
$oMail->Password="pepitosamora1234";*/
//destinatario

//$oMail->setFrom("ventas@plusvision.com.pe","PLUS VISION PRUEBA");
$oMail->setFrom("antoniorestaurantesenati29@gmail.com","PRUEBA cabecera");
/*$oMail->addAddress("ventas@plusvision.com.pe" ,$nombre);*/
//$oMail->addAddress("ventas@plusvision.com.pe" ,$nombre);/*esto esta mal*/
$oMail->addAddress($email ,$nombre);/*esto esta mal*/


$oMail->SMTPKeepAlive = true; 
$oMail->Mailer = "smtp"; 
$oMail->Subject="<- IMPORTANTE -> RECUPERAR CONTRASEÑA - RESTAURANTE SENATI";
$oMail->isHTML(true);

$oMail->msgHTML(
                "Ingrese el codigo mostrado a continuación porfavor<br>".
                "SU CODIGO ES : " . $validacion."<br>".
                "Hagalo lo antes posible porfavor<br>".  
                "G & S - TODOS LOS DERECHOS RESERVADOS" );
 
if(!$oMail->send()){
echo $oMail->ErrorInfo; 



}



?>