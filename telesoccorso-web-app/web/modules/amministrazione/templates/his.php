<?php
include "/var/www/modules/mysqli_open_db.php";

$querystring = $_GET['AB_CODI'];

## Fetch result
$query = "CALL sp_v_His('".$querystring."')" ;

$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

## ANAGRAFICA

$AB_CODI= $result["t1AB_CODI"];
$MATRICOLA= $result["t1MATRICOLA"]; 
$NOMINATIVO= $result["t1NOMINATIVO"];
$TELEFONO= $result["t1TELEFONO"];
$CELLULARE= $result["t1CELLULARE"];
$SESSO= $result["t1SESSO"];
$CENTRALE= $result["t1CENTRALE"];

## STORICO ALLARMI

$ID= $result["t2ID"];
$EVENTO= $result["t2EVENTO"];
$DATA= $result["t2DATA"];
$ORA= $result["t2ORA"];
$OPE= $result["t2OPE"];
$ESITO= $result["t2ESITO"];


$str = "his.html";
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

?>