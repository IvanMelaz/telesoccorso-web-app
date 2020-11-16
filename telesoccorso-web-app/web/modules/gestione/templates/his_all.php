<?php

$querystring = $_GET['AB_CODI'];

include "header_visualizza.php";

include "anagrafica.php";

include "his_all_header.html";

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "CALL sp_v_His_allarmi('".$querystring."')" ;

$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

## STORICO ALLARMI

$ID_ALLARME= $result["ID_ALLARME"];
$AB_CODI= $result["AB_CODI"];
$DATA= $result["DATA"];
$ORA= $result["ORA"];
$EVENTO= $result["EVENTO"];
$ESITO= $result["ESITO"];
$USER= $result["USER"];

$str = "his_all.html";
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