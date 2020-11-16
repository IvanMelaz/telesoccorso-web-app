<?php

$querystring = $_GET['AB_CODI'];

include "header_modifica.php";

include "anagrafica.php";

include "mdb_ins.php";

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "call sp_v_Mdb('".$querystring."')" ;

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

$ID= $result["ID"];
$MEDICO= $result["MEDICO"];
$INDIRIZZO= $result["INDIRIZZO"];
$COMUNE= $result["COMUNE"];
$TEL_AMB= $result["TEL_AMB"];
$TEL_CASA= $result["TEL_CASA"];
$TEL_CELL= $result["TEL_CELL"];
$SPECIALISTA= $result["SPECIALISTA"];
$ORARIO= $result["ORARIO"];
$NUMERO= $result["NUMERO"];

$str = "mdb_mod.html";
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
