<?php

$querystring = $_GET['AB_CODI'];

include "header_visualizza.php";

include "anagrafica.php";

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "call sp_v_Gmed('".$querystring."')" ;

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

$NUMERO= $result["NUMERO"];
$NOMINATIVO= $result["NOMINATIVO"];
$TEL_1= $result["TEL_1"];
$TEL_2= $result["TEL_2"];
$CELLULARE= $result["CELLULARE"];
$REFERENTE= $result["REFERENTE"];
$TIPO= $result["TIPO"];
$NOTE= $result["NOTE"];
$ORARIO= $result["ORARIO"];

$str = "gmed.html";
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
