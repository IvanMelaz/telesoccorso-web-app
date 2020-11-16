<?php

$querystring = $_GET['AB_CODI'];

include "header_visualizza.php";

include "anagrafica.php";

include "his_assenza_header.html";

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "CALL sp_v_his_assenza('".$querystring."')" ;

$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

## STORICO EVENTI

$ID_ALLARME= $result["ID_ALLARME"];
$AB_CODI= $result["AB_CODI"];
$TIPO= $result["TIPO"]; 
$DATA_ASSENZA= $result["DATA_ASSENZA"];
$DATA_RIENTRO= $result["DATA_RIENTRO"];
$NOTE= $result["NOTE"];

$str = "his_assenza.html";
eval("PrintTemplate(\"".GetTemplate($str)."\");");

}

/*
	RENDER TEMPLATE
*/

function GetTemplate($template) {

return str_replace("\"","\\\"",implode("",file($template)));

}

   /* free result set */
   $ret->close();

## QUESTA FUNZIONE STAMPA A VIDEO IL TEMPLATE RISULTANTE DALLA FUNZIONE PRECEDENTE
function PrintTemplate($template) {

echo $template;

}

include "/var/www/modules/mysqli_close_db.php";

?>