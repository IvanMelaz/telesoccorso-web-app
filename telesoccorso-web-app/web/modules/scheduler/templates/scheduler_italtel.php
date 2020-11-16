<?php

include "scheduler_intestazione.html";

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "CALL sp_v_Schedulatore()" ;

$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

## STORICO EVENTI

$ID_ALLARME= $result["ID_ALLARME"];
$AB_CODI= $result["AB_CODI"];
$MATRICOLA= $result["MATRICOLA"]; 
$DATA= $result["DATA"];
$ORA= $result["ORA"];
$EVENTO= $result["EVENTO"];
$MUX= $result["MUX"];

$str = "scheduler_italtel.html";
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

include "fooder.html";

?>