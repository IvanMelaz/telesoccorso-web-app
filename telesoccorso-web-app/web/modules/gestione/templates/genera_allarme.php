<?php

include "header_visualizza.php";

include "anagrafica.php";

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "call sp_v_Anagrafica('".$querystring."')" ;

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

$PHONE_NUMBER= $result["TELEFONO"];

$str = "genera_allarme.html";
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

include "fooder.html";


?>
