<?php

$ID = $_GET['ID'];

include "header.html";

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "call sp_v_Pediatrica_Scheda('".$ID."')" ;

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

$ID= $result["ID"];
$NOMINATIVO= $result["NOMINATIVO"];
$TELEFONO= $result["TELEFONO"];
$USER= $result["USER"];
$DATA= $result["DATA"];
$ORA= $result["ORA"];
$INDIRIZZO= $result["INDIRIZZO"];
$COMUNE= $result["COMUNE"];
$NOTE= $result["NOTE"];
$CONVENZIONE= $result["CONVENZIONE"];
$DOSSIER= $result["DOSSIER"];
$USCITA= $result["USCITA"];
$TEMPO= $result["TEMPO"];
$MEDICO= $result["MEDICO"];
$DATA_CHIUSO= $result["DATA_CHIUSO"];
$ORA_CHIUSO= $result["ORA_CHIUSO"];

$str = "scheda_finale.html";
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