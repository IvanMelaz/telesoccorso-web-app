<?php

$querystring = $_GET['AB_CODI'];

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "call sp_v_Mdb('".$querystring."')" ;

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

$NUMERO= $result["NUMERO"];
$MEDICO= $result["MEDICO"];
$TEL_AMB= $result["TEL_AMB"];
$TEL_CASA= $result["TEL_CASA"];
$TEL_CELL= $result["TEL_CELL"];
$SPECIALISTA= $result["SPECIALISTA"];
$INDIRIZZO= $result["INDIRIZZO"];
$COMUNE= $result["COMUNE"];
$ORARIO= $result["ORARIO"];

$str = "mdb.html";
eval("PrintTemplate06(\"".GetTemplate06($str)."\");");

}

/*

/*
	RENDER TEMPLATE
*/

function GetTemplate06($template) {

return str_replace("\"","\\\"",implode("",file($template)));

}

## QUESTA FUNZIONE STAMPA A VIDEO IL TEMPLATE RISULTANTE DALLA FUNZIONE PRECEDENTE
function PrintTemplate06($template) {

echo $template;

}

   /* free result set */
   $ret->close();

include "/var/www/modules/mysqli_close_db.php";

?>
