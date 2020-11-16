<?php

$querystring = $_GET['AB_CODI'];

include "header_visualizza.php";

include "anagrafica.php";

include "/var/www/modules/mysqli_open_db.php";


## Fetch result
$query = "CALL sp_v_Soccamici('".$querystring."')" ;

$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

## SOCCORRITORI AMICI

$NOME= $result["NOMINATIVO"];
$TEL_CASA= $result["TEL_CASA"];
$TEL_UFF= $result["TEL_UFF"];
$TEL_CELL= $result["TEL_CELL"];
$TEMPO_CASA= $result["TEMPO_CASA"];
$TEMPO_UFF= $result["TEMPO_UFF"];
$CHIAVI= $result["CHIAVI"];
$COINQUILINO= $result["COINQUILINO"];
$PARENTE= $result["PARENTE"];
$NUMERO= $result["NUMERO"];


$str = "socc_amici.html";
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