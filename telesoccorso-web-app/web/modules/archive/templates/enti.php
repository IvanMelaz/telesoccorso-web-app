<?php

include "/var/www/modules/mysqli_open_db.php";

include "header_enti.html";

## Fetch result
$query = "CALL sp_v_Enti";

$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

$ID= $result["ID"];
$ENTE= $result["ENTE"];
$DESCRIZIONE= $result["DESCRIZIONE"];
$REFERENTE= $result["REFERENTE"];
$TEL_1= $result["TEL_1"];
$TEL_2= $result["TEL_2"];
$INDIRIZZO= $result["INDIRIZZO"];
$COMUNE= $result["COMUNE"];
$CAP= $result["CAP"];

$str = "enti.html";
eval("PrintTemplate(\"".GetTemplate($str)."\");");

}

/*

/*
	RENDER TEMPLATE
*/

function GetTemplate($template) {

return str_replace("\"","\\\"",implode("",file($template)));

}

## QUESTA FUNZIONE STAMPA A VIDEO IL TEMPLATE RISULTANTE DALLA FUNZIONE PRECEDENTE
function PrintTemplate($template) {

echo $template;

}

   /* free result set */
   $ret->close();

include "/var/www/modules/mysqli_close_db.php";

?>