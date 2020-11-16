<?php

$querystring = $_GET['AB_CODI'];

include "header_visualizza.php";

include "anagrafica.php";

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "CALL sp_v_Prove('".$querystring."')" ;

$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

## PROVE
$AB_CODI= $result["AB_CODI"];
$FOGLIO= $result["FOGLIO"];
$GIORNO= $result["GIORNO"];
$FASCIA= $result["FASCIA"];
$NOTE= $result["NOTE"];
$RICHIAMARE= $result["RICHIAMARE"];

$str = "prove.html";
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