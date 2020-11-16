<?php

$querystring = $_GET['AB_CODI'];

include "header_visualizza.php";

include "anagrafica.php";

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "CALL sp_v_Stipulante('".$querystring."')" ;

$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

## STIPULANTE

$CENTRALE= $result["CENTRALE"];
$NOMINATIVO= $result["NOMINATIVO"];
$INDIRIZZO= $result["INDIRIZZO"];
$COMUNE= $result["COMUNE"];
$PROV= $result["PROV"];
$CAP= $result["CAP"];
$TELEFONO= $result["TELEFONO"];
$CELLULARE= $result["CELLULARE"];
$CF= $result["CF"];
$PIVA= $result["PIVA"];
$TEL_UFFICIO= $result["TEL_UFFICIO"];
$ENTE= $result["ENTE"];
$REFERENTE= $result["REFERENTE"];
$IMPONIBILE= $result["IMPONIBILE"];
$IVA= $result["IVA"];
$IMPORTO_IVA= $result["IMPORTO_IVA"];
$CONTRATTO= $result["CONTRATTO"];
$PAGAMENTO= $result["PAGAMENTO"];
$MODO_PAGAMENTO= $result["MODO_PAGAMENTO"];
$NOTE= $result["NOTE"];
$PARENTELA= $result["PARENTELA"];
$EMAIL= $result["EMAIL"];

$str = "stipulante.html";
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