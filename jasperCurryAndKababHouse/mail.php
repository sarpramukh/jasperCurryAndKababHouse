 <?php
 
 $to = "sarpramukh@gmail.com";
$subject = $_POST["name"];
$txt =  $_POST["message"];
$headers = "From: ".$_POST["mail"]. "\r\n" .
"CC: sarpramukh@gmail.com" ;

$txt.=" \n\n This Message sent from ".$_POST["mail"];	
	 $retval = mail($to,$subject,$txt,$header);
   if( $retval == true )  
   {
      echo "Message sent successfully...";
   }
   else
   {
      echo "Message could not be sent...".$subject;
   }
	
 ?>