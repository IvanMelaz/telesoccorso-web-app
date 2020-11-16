<?php

$querystring = $_GET['AB_CODI'];

include "header_visualizza.php";

include "anagrafica.php";

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "call sp_v_Analisi('".$querystring."')" ;

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {


$NOMINATIVO= $result["NOMINATIVO"];
$NUMERO= $result["NUMERO"];
$TEL_1= $result["TEL_1"];
$TEL_2= $result["TEL_2"];
$FAX= $result["FAX"];
$REFERENTE= $result["REFERENTE"];
$CELLULARE= $result["CELLULARE"];
$FAX= $result["FAX"];
$FAX= $result["FAX"];
$ORARIO= $result["ORARIO"];
$NOTE= $result["NOTE"];
$INDIRIZZO= $result["INDIRIZZO"];
$COMUNE= $result["COMUNE"];
$PROV= $result["PROV"];
$CAP= $result["CAP"];

$str = "analisi.html";
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
