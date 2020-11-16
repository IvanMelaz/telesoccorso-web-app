<?php

$querystring = $_GET['AB_CODI'];

include "header_modifica.php";

include "anagrafica.php";

include "socc_pubb_ins.php";

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "call sp_v_Soccpubb('".$querystring."')" ;

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

$ID=$result["ID"];
$TIPO= $result["TIPO"];
$TEL_1= $result["TEL_1"];
$TEL_2= $result["TEL_2"];
$NUMERO= $result["NUMERO"];
$CELLULARE= $result["CELLULARE"];

$str = "socc_pubb_mod.html";
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
