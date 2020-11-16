<?php

$ID_ALLARME =  $_GET['ID_ALLARME'];
$querystring = $_GET['AB_CODI'];
$FRAME = $_GET['FRAME'];

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "call sp_v_Anagrafica('".$querystring."')" ;

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

$AB_CODI= $result["AB_CODI"];

#switch ($FRAME_REQUEST) 
#{
#case "ALLARMI":
#    $str = "header_visualizza.html";
#   break;
#case "PROVE_DAY":
#    $str = "header_visualizza.html";
#    break;
#case "PROVE_NR":
#    $str = "header_visualizza.html";
#    break;
#case "CODA_PROVE":
#    $str = "header_visualizza.html";
#    break;
#case "REALI":
#    $str = "header_visualizza.html";
#    break;
#case "AVARIE":
    $str = "header_visualizza.html";
#    break;
#}

eval("PrintTemplate(\"".GetTemplate($str)."\");");

}

   /* free result set */
   $ret->close();

include "/var/www/modules/mysqli_close_db.php";
?>