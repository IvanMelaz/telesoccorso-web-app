<?php

$AB_CODI = $_GET['AB_CODI'];
$ID_ALLARME = $_GET['ID_ALLARME'];

include "header_visualizza.php";

include "anagrafica.php";

include "assenza.php";

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "call sp_v_Anagrafica('".$AB_CODI."')" ;

## Execute query
$ret = $mysqli->query($query);


while ($result = $ret->fetch_assoc()) {

$AB_CODI= $result["AB_CODI"];
$MATRICOLA= $result["MATRICOLA"];
$NOMINATIVO= $result["NOMINATIVO"];
$TELEFONO= $result["TELEFONO"];
$CELLULARE= $result["CELLULARE"];
$SESSO= $result["SESSO"];
$CENTRALE= $result["CENTRALE"];
$INDIRIZZO= $result["INDIRIZZO"];
$COMUNE= $result["COMUNE"];
$PROVINCIA= $result["PROVINCIA"];
$CAP= $result["CAP"];
$TAVOLA= $result["TAVOLA"];
$ZONA= $result["ZONA"];
$DATA_NASCITA= $result["DATA_NASCITA"];
$LUOGO_NASCITA= $result["LUOGO_NASCITA"];
$ALTEZZA= $result["ALTEZZA"];
$PESO= $result["PESO"];
$PATOLOGIA= $result["PATOLOGIA"];
$TERAPIA= $result["TERAPIA"];
$EVIDENZIA= $result["EVIDENZIA"];
$NOTE= $result["NOTE"];
$ALTRO= $result["ALTRO"];
$DATI_ABITA= $result["DATI_ABITA"];
$DATI_TECNICI= $result["DATI_TECNICI"];

$str = "scheda.html";
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