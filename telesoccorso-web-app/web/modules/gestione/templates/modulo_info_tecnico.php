<?php

##$AB_CODI = $_GET['AB_CODI'];
#$ID_ALLARME= $_GET['ID_ALLARME'];

include "header_visualizza.php";

include "anagrafica.php";

include "modulo_tecnico_aperto.php";


include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "call sp_v_InfoAllarme('".$ID_ALLARME."')";

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

$NOMINATIVO= $result["NOMINATIVO"];
$DATA= $result["DATA"];
$ORA= $result["ORA"];
$TELEFONO= $result["TELEFONO"];
$RISPOSTA= $result["RISPOSTA"];
$DURATA= $result["DURATA"];
$USER= $result["USER"];
$INFO= $result["INFO"];
$ID= $result["ID"];


$str = "modulo_info_allarme.html";
eval("PrintTemplate(\"".GetTemplate($str)."\");");

}

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