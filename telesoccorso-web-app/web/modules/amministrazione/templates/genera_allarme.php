<?php

header( 'refresh: 5' );

include "/var/www/modules/mysqli_open_db.php";

## QUERY CON STORED PROCEDURE
$sql = "CALL sp_v_Allarmi()";

## Fetch result
$query = "call sp_v_Allarmi()" ;

$result = $mysqli->query($query);

while ($row = $result->fetch_assoc()) {

$ID = $row['ID'];
$AB_CODI= $row['AB_CODI'];
$EVENTO = $row['EVENTO'];
$ORA= $row['ORA'];
$USER= $row['USER'];
$MATRICOLA= $row['MATRICOLA'];

$str = "allarmi.html";
eval("PrintTemplate(\"".GetTemplate($str)."\");");

}

/* free result set */
mysqli_free_result($result);

/*
	TEMPLATE
*/

function GetTemplate($template) {

return str_replace("\"","\\\"",implode("",file($template)));

}

## QUESTA FUNZIONE STAMPA A VIDEO IL TEMPLATE RISULTANTE DALLA FUNZIONE PRECEDENTE
function PrintTemplate($template) {

echo $template;

}

include "/var/www/modules/mysqli_close_db.php";

?>
