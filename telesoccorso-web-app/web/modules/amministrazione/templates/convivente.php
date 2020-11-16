<?php

$querystring = $_GET['AB_CODI'];

include "header_visualizza.php";

include "anagrafica.php";

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "CALL sp_v_Convivente('".$querystring."')" ;

$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

## CONVIVENTE

$ID= $result["ID"];
$AB_CODI= $result["AB_CODI"];
$NOME= $result["NOMINATIVO"];
$COINTESTATARIO= $result["COINTESTATARIO"];
$SEX= $result["SESSO"];
$CELL= $result["CELLULARE"];
$LUOGO_NASCITA= $result["LUOGO_NASCITA"];
$DATA_NASCITA= $result["DATA_NASCITA"];
$ALTEZZA= $result["ALTEZZA"];
$PESO= $result["PESO"];
$PATOLOGIA= $result["PATOLOGIA"];
$TERAPIA= $result["TERAPIA"];
$EVIDENZIA= $result["EVIDENZIA"];
$NOTE= $result["NOTE"];
$PARENTELA= $result["PARENTELA"];

$str = "convivente.html";
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