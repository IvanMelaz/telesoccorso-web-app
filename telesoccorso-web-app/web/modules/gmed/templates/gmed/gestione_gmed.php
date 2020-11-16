<?php

include "/var/www/modules/mysqli_open_db.php";

include "header.html";

include "gestione_gmed_ins.html";

## Fetch result
$query = "CALL sp_v_Asi()";

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

## ASI

$ID= $result["ID"];
$DATA= $result["DATA"];
$ORA= $result["ORA"];
$CONVENZIONE= $result["CONVENZIONE"];
$DOSSIER= $result["DOSSIER"];
$NOMINATIVO= $result["NOMINATIVO"];
$INDIRIZZO= $result["INDIRIZZO"];
$COMUNE= $result["COMUNE"];
$TELEFONO= $result["TELEFONO"];
$MEDICO= $result["MEDICO"];
$TEMPO= $result["TEMPO"];
$USCITA= $result["USCITA"];
$NOTE= $result["NOTE"];
$USER= $result["USER"];


$str = "gestione_gmed.html";
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