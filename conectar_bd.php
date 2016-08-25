	<?php

function conectar_bd(){
    global $conexio;

     $elServer ="localhost";
    $elUsr = "idrdgov_Agenda";
    $elPw  = "Agenda2013";
   $laBd = "idrdgov_Caminatas";
  
  

       $conexio = mysql_connect($elServer, $elUsr , $elPw) or die (mysql_error());
 
    mysql_select_db($laBd, $conexio ) or die (mysql_error());
mysql_set_charset('utf8', $conexio);
}
    

?>