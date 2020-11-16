<?php

$querystring = $_GET['AB_CODI'];

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "call sp_v_Soccpubb('".$querystring."')" ;

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

$TIPO= $result["TIPO"];
$TEL_1= $result["TEL_1"];
$TEL_2= $result["TEL_2"];
$NUMERO= $result["NUMERO"];

$str = "socc_pubb.html";
eval("PrintTemplate05(\"".GetTemplate05($str)."\");");

}

/*

/*
	RENDER TEMPLATE
*/

function GetTemplate05($template) {

return str_replace("\"","\\\"",implode("",file($template)));

}

## QUESTA FUNZIONE STAMPA A VIDEO IL TEMPLATE RISULTANTE DALLA FUNZIONE PRECEDENTE
function PrintTemplate05($template) {

echo $template;

}

   /* free result set */
   $ret->close();

include "/var/www/modules/mysqli_close_db.php";

?>
