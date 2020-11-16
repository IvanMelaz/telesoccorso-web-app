<?php

$querystring = $_GET['AB_CODI'];

include "header_modifica.php";

include "anagrafica.php";

include "prove_ins.php";

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "CALL sp_v_Prove('".$querystring."')" ;

$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

## PROVE

$ID= $result["ID"];
$GIORNO= $result["GIORNO"];
$FOGLIO= $result["FOGLIO"];
$FASCIA= $result["FASCIA"];
$NOTE= $result["NOTE"];
$RICHIAMARE= $result["RICHIAMARE"];

$str = "prove_mod.html";
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
function PrintTemplate($template) 

{

echo $template;

}

include "/var/www/modules/mysqli_close_db.php";

include "fooder.html";
?>