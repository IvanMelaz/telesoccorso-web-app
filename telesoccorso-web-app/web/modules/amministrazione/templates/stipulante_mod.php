<?php

$querystring = $_GET['AB_CODI'];

include "header_modifica.php";

include "anagrafica.php";

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "CALL sp_v_Stipulante('".$querystring."')" ;

$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

## STIPULANTE

$DATA_INSERIMENTO= $result["DATA_INSERIMENTO"];
$DATA_INSTALLAZIONE= $result["DATA_INSTALLAZIONE"];
$DATA_DISINSTALLAZIONE= $result["DATA_DISINSTALLAZIONE"];
$MOTIVO_DISINSTALLAZIONE= $result["MOTIVO_DISINSTALLAZIONE"];
$ENTE= $result["ENTE"];
$CENTRALE= $result["CENTRALE"];
$TOTALE= $result["TOTALE"];
$NOMINATIVO= $result["NOMINATIVO"];
$INDIRIZZO= $result["INDIRIZZO"];
$COMUNE= $result["COMUNE"];
$PROV= $result["PROV"];
$CAP= $result["CAP"];
$CF= $result["CF"];
$PIVA= $result["PIVA"];
$TELEFONO= $result["TELEFONO"];
$CELLULARE= $result["CELLULARE"];
$TEL_UFFICIO= $result["TEL_UFFICIO"];
$REFERENTE= $result["REFERENTE"];
$IMPONIBILE= $result["IMPONIBILE"];
$IVA= $result["IVA"];
$IMPORTO_IVA= $result["IMPORTO_IVA"];
$CONTRATTO= $result["CONTRATTO"];
$PAGAMENTO= $result["PAGAMENTO"];
$MODO_PAGAMENTO= $result["MODO_PAGAMENTO"];
$NOTE= $result["NOTE"];
$EMAIL= $result["EMAIL"];
$PARENTELA= $result["PARENTELA"];

$str = "stipulante_mod.html";
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