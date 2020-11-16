<?php

$AB_CODI = $_GET['AB_CODI'];
$ID_ALLARME= $_GET['ID_ALLARME'];

include "header_visualizza.php";

include "anagrafica.php";

include "/var/www/modules/mysqli_open_db.php";

## Fetch result
$query = "call sp_v_Richiamare('".$AB_CODI."')" ;

## Execute query
$ret = $mysqli->query($query);

while ($result = $ret->fetch_assoc()) {

$AB_CODI= $result["AB_CODI"];
$RICHIAMARE= $result["RICHIAMARE"];

switch ($RICHIAMARE) 
{
case "X":
    $str = "richiama.html";
    break;
case "":
    $str = "prova_ok.html";
    break;
}


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

?>